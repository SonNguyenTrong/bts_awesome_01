<div class="box box-primary">
    <div class="box-header well text-center">
        <h3 class="box-title">Information</h3>
    </div>
    <div class="box-body">
        <div class="infor">
            <form role="form">
                <div slot="input" slot-scope="picker">
                    <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="name" class="form-control" id="exampleInputName1" placeholder="Enter Name" v-model="product.name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPrice1">Price</label>
                        <input type="price" class="form-control" id="exampleInputPrice1" placeholder="Price" v-model.number="product.price">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDuration1">Duration</label>
                        <input type="duration" class="form-control" id="exampleInputDuration1" placeholder="Duration" v-model="product.duration">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDescription1">Description</label>
                        <textarea type="description" class="form-control" id="exampleInputDescription1" placeholder="Description" v-model="product.description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Image</label>
                        <input type="file" id="exampleInputFile" v-model="product.image">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>