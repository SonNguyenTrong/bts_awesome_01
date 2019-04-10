new Vue({
    el: '#create_tour',
    data: function() {
        return {
            tour: {
                'name': null,
                'price': null,
                'duration': null,
                'description': null,
                'image': null,
                'status' : 0,
            },
            days: {
                'start_date': null,
                'end_date': null,
                'description': null,
                'service': [],
                'city': null,
                'images': [],   
                'url': [],
                'tourId': null,
            },
            formErrors: null,
            dayErrors: null,
            dayService: [],
            selectedFiles: '',
        }
    },
    watch: {
        'tour.name': function() {
            if(this.formErrors && this.formErrors.name) this.formErrors.name = null;
        },
        'tour.price': function() {
            if(this.formErrors && this.formErrors.price) this.formErrors.price = null;
        },
        'tour.duration': function() {
            if(this.formErrors && this.formErrors.duration) this.formErrors.duration = null;
        },
        'tour.image': function() {
            if(this.formErrors && this.formErrors.image) this.formErrors.image = null;
        },
        'tour.description': function() {
            if(this.formErrors && this.formErrors.description) this.formErrors.description = null;
        },
        'days.start_date': function() {
            if(this.dayErrors && this.dayErrors.start_date) this.dayErrors.start_date = null;
        },
        'days.end_date': function() {
            if(this.dayErrors && this.dayErrors.end_date) this.dayErrors.end_date = null;
        },
        'days.images': function() {
            if(this.dayErrors && this.dayErrors.images) this.dayErrors.images = null;
        },
        'days.city': function() {
            if(this.dayErrors && this.dayErrors.city) this.dayErrors.city = null;
        },
        'days.description': function() {
            if(this.dayErrors && this.dayErrors.description) this.dayErrors.description = null;
        },
        'days.service': function() {
            if(this.dayErrors && this.dayErrors.service) this.dayErrors.service = null;
        },
    },
    methods: {
        createTour() {
            var self = this;
            axios.post('/admin/tours', this.tour).then((response) => {
                self.formErrors = null;
                $('#activate-step-2').on('click', function(e) {
                    $('ul.ssetup-panel li:eq(1)').removeClass('disabled');
                    $('ul.setup-panel li a[href="#step-2"]').trigger('click');
                })
                self.days.tourId =  response.data.tour.id
            }).catch((error) => {
                self.formErrors = error.response.data.errors;
            });
        },
        pushTourImage(e){
            let files = e.currentTarget.files || e.dataTransfer.files;
            this.onImageChange(files,0)
        },
        pushDayImage(e){
            this.days.images = []
            let files = e.currentTarget.files || e.dataTransfer.files;
            this.onImageChange(files,1)
        },
        onImageChange(files, v) {
            if (files.length > 1) {
                for (var i=0; i< files.length; i++){
                    this.createImage(files[i],v);
                }
            }
            else if (files.length = 1)  {
                this.createImage(files[0],v)
            }
            else return   
        },
        createImage(file, v) {
            let reader = new FileReader();
            let vm = this;
            if (v == 0) {
                reader.onload = (e) => {
                    vm.tour.image = e.target.result;
                };
            } else {
                reader.onload = (e) => {
                    vm.days.images.push(e.target.result);
                };
                this.days.url.push(URL.createObjectURL(file));
            }
            reader.readAsDataURL(file);
        },
        dataURLtoFile(dataurl, filename) {
            var arr = dataurl.split(','), mime = arr[0].match(/:(.*?);/)[1],
                bstr = atob(arr[1]), n = bstr.length, u8arr = new Uint8Array(n);
            while(n--){
                u8arr[n] = bstr.charCodeAt(n);
            }
            return new File([u8arr], filename, {type:mime});
        },
        addService(days) {
            var cons = this
            axios.post('/admin/days', [this.days]).then((response) => {
                cons.dayErrors = null
                cons.dayService.push(days)
                cons.resetdays()
            }).catch((error) => {
                cons.dayErrors = error.response.data.errors
            });
        },
        resetdays() {
            this.days = {};
            this.days.start_date = new Date()
            this.days.end_date = new Date()
            this.days.description = null
            this.days.service = []
            this.days.city = null
            this.days.images = []
            this.days.url = []
        },
        removeService(index) {
			this.dayService.splice(index, 1)
        },
        clearAllDayService() {
            this.dayService = []
        },
        finishCreate() {
            var cons = this
            this.days.status = 1
            axios.put('/admin/tours/' + this.days.tourId, [this.days.status]).then((response) => {

            }).catch((error) => {
                cons.dayErrors = error.response.data.errors
            });
        },
    }    
})
