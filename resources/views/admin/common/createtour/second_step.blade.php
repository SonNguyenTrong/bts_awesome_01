<div class="box box-primary">
    <div class="box-header well text-center">
        <h3 class="box-title">Day Plan</h3>
    </div>
    <div class="box-body">
        <div class="w-1/4 h-full bg-grey-darkest"></div>
        <div class="flex-col w-1/2 h-full bg-grey-lightest rounded-lg overflow-scroll p-2 shadow-md">
            <div class="flex items-center border-b border-b-2 border-teal py-2">
                <form role="form">
                    <div class="box-body">
                        <div class="row">
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <button class="btn btn-success">Add</button>
                                    <button class="btn btn-success">Finish</button>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="exampleInputEmail1">Start Date</label>
                                    <input type="text" class="form-control pull-right" id="datepicker">
                                </div>
                                <div class="col-xs-6">
                                    <label>End Date</label>
                                    <input type="text" class="form-control pull-right" id="datepicker">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label for="exampleInputEmail1">Service</label>
                                    <br>
                                    <select class="selectpicker col-xs-12" multiple data-live-search="true">
                                    <option>Mustard</option>
                                    <option>Ketchup</option>
                                    <option>Relish</option>
                                </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputDescription1">Description</label>
                            <textarea type="description" class="form-control" id="exampleInputDescription1" placeholder="Enter Description"></textarea>
                        </div>
                        <div>
                            <div id="my-strictly-unique-vue-upload-multiple-image" style="display: flex; justify-content: center;">
                                <vue-upload-multiple-image @upload-success="uploadImageSuccess" @before-remove="beforeRemove" @edit-image="editImage" @data-change="dataChange" :data-images="images" idUpload="myIdUpload" editUpload="myIdEdit"></vue-upload-multiple-image>
                            </div>
                        </div>
                        <div class="text-center mt-3">
                            <br>

                        </div>
                    </div>
                </form>
            </div>
            <template v-if="todos.length == 0">
                <h3 class="flex-1 text-center text-3xl text-grey-darker bg-teal-lighter p-4 m-1">Empty</h3>
            </template>
            <template v-else>
                <div class="flex bg-grey-light w-full h-auto p-2 mt-4 rounded-lg" v-for="(todo, index) in todos" :key="index">
                    <h3 class="w-5/6 font-sans font-light text-2xl text-center bg-grey-lightest pt-1 shadow-md rounded-lg">@{{ todo }}</h3>
                    <div class="w-1/6 text-right pr-2 xHolder">
                        <i class="fa fa-times text-2xl" aria-hidden="true" @click="removeTodo(index)"></i>
                    </div>
                </div>
                <button class="w-full bg-red-light hover:bg-red text-white font-thin py-2 px-8 mt-4 rounded" @click="clearAll()">
                    Clear All
                </button>
            </template>
        </div>
        <div class="w-1/4 h-full bg-grey-darkest"></div>
    </div>
</div>
