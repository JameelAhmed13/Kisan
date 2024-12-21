@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/cropperjs/dist/cropper.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Image Cropper</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Bonus Ui</li>
                        <li class="breadcrumb-item active">Image Cropper</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid img-cropper">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Image Cropper</h4>
                        <p class="desc mb-0 mt-1"><span>Use the image cropper.js</span><code></code><span></span></p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-9 col-md-12">
                                <div class="img-container"><img id="image"
                                        src="{{ asset('assets/images/other-images/img-cropper.jpg') }}" alt="Picture">
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-12">
                                <div class="docs-preview clearfix">
                                    <div class="img-preview preview-md"></div>
                                    <div class="img-preview preview-sm"></div>
                                    <div class="img-preview preview-xs"></div>
                                </div>
                                <div class="docs-data">
                                    <div class="input-group input-group-sm"><span class="input-group-text">X</span>
                                        <input class="form-control" id="dataX" type="text" placeholder="x"><span
                                            class="input-group-text">px</span>
                                    </div>
                                    <div class="input-group input-group-sm"><span class="input-group-text">Y</span>
                                        <input class="form-control" id="dataY" type="text" placeholder="y"><span
                                            class="input-group-text">px</span>
                                    </div>
                                    <div class="input-group input-group-sm"><span class="input-group-text">Width</span>
                                        <input class="form-control" id="dataWidth" type="text" placeholder="width"><span
                                            class="input-group-text">px</span>
                                    </div>
                                    <div class="input-group input-group-sm"><span class="input-group-text">Height</span>
                                        <input class="form-control" id="dataHeight" type="text"
                                            placeholder="height"><span class="input-group-text">px</span>
                                    </div>
                                    <div class="input-group input-group-sm"><span class="input-group-text">Rotate</span>
                                        <input class="form-control" id="dataRotate" type="text"
                                            placeholder="rotate"><span class="input-group-text">deg</span>
                                    </div>
                                    <div class="input-group input-group-sm"><span class="input-group-text">ScaleX</span>
                                        <input class="form-control" id="dataScaleX" type="text" placeholder="scaleX">
                                    </div>
                                    <div class="input-group input-group-sm"><span class="input-group-text">ScaleY</span>
                                        <input class="form-control" id="dataScaleY" type="text" placeholder="scaleY">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- image cropper button-->
                <div class="card">
                    <div class="card-body">
                        <div class="row" id="actions">
                            <div class="col-xl-9 col-md-12 docs-buttons">
                                <div class="btn-group">
                                    <button class="btn btn-primary" type="button" data-method="setDragMode"
                                        data-option="move" title="Move"><span class="docs-tooltip"
                                            data-bs-toggle="tooltip"
                                            title="cropper.setDragMode(&quot;move&quot;)"></span><span
                                            class="fa fa-arrows-alt"></span></button>
                                    <button class="btn btn-primary" type="button" data-method="setDragMode"
                                        data-option="crop" title="Crop"><span class="docs-tooltip"
                                            data-bs-toggle="tooltip"
                                            title="cropper.setDragMode(&quot;crop&quot;)"></span><span
                                            class="fa fa-crop-alt"></span></button>
                                </div>
                                <div class="btn-group">
                                    <button class="btn btn-primary" type="button" data-method="zoom" data-option="0.1"
                                        title="Zoom In"><span class="docs-tooltip" data-bs-toggle="tooltip"
                                            title="cropper.zoom(0.1)"></span><span
                                            class="fa fa-search-plus"></span></button>
                                    <button class="btn btn-primary" type="button" data-method="zoom" data-option="-0.1"
                                        title="Zoom Out"><span class="docs-tooltip" data-bs-toggle="tooltip"
                                            title="cropper.zoom(-0.1)"></span><span
                                            class="fa fa-search-minus"></span></button>
                                </div>
                                <div class="btn-group">
                                    <button class="btn btn-light-primary" type="button" data-method="move"
                                        data-option="-10" data-second-option="0" title="Move Left"><span
                                            class="docs-tooltip" data-bs-toggle="tooltip"
                                            title="cropper.move(-10, 0)"></span><span
                                            class="fa fa-arrow-left"></span></button>
                                    <button class="btn btn-light-primary" type="button" data-method="move"
                                        data-option="10" data-second-option="0" title="Move Right"><span
                                            class="docs-tooltip" data-bs-toggle="tooltip"
                                            title="cropper.move(10, 0)"></span><span
                                            class="fa fa-arrow-right"></span></button>
                                    <button class="btn btn-light-primary" type="button" data-method="move"
                                        data-option="0" data-second-option="-10" title="Move Up"><span
                                            class="docs-tooltip" data-bs-toggle="tooltip"
                                            title="cropper.move(0, -10)"></span><span
                                            class="fa fa-arrow-up"></span></button>
                                    <button class="btn btn-light-primary" type="button" data-method="move"
                                        data-option="0" data-second-option="10" title="Move Down"><span
                                            class="docs-tooltip" data-bs-toggle="tooltip"
                                            title="cropper.move(0, 10)"></span><span
                                            class="fa fa-arrow-down"></span></button>
                                </div>
                                <div class="btn-group">
                                    <button class="btn btn-light-secondary" type="button" data-method="rotate"
                                        data-option="-45" title="Rotate Left"><span class="docs-tooltip"
                                            data-bs-toggle="tooltip" title="cropper.rotate(-45)"></span><span
                                            class="fa fa-undo-alt"></span></button>
                                    <button class="btn btn-light-secondary" type="button" data-method="rotate"
                                        data-option="45" title="Rotate Right"><span class="docs-tooltip"
                                            data-bs-toggle="tooltip" title="cropper.rotate(45)"></span><span
                                            class="fa fa-redo-alt"></span></button>
                                </div>
                                <div class="btn-group">
                                    <button class="btn btn-light-secondary" type="button" data-method="scaleX"
                                        data-option="-1" title="Flip Horizontal"><span class="docs-tooltip"
                                            data-bs-toggle="tooltip" title="cropper.scaleX(-1)"></span><span
                                            class="fa fa-arrows-alt-h"></span></button>
                                    <button class="btn btn-light-secondary" type="button" data-method="scaleY"
                                        data-option="-1" title="Flip Vertical"><span class="docs-tooltip"
                                            data-bs-toggle="tooltip" title="cropper.scaleY(-1)"></span><span
                                            class="fa fa-arrows-alt-v"></span></button>
                                </div>
                                <div class="btn-group">
                                    <button class="btn btn-light-tertiary" type="button" data-method="crop"
                                        title="Crop"><span class="docs-tooltip" data-bs-toggle="tooltip"
                                            title="cropper.crop()"></span><span class="fa fa-check"></span></button>
                                    <button class="btn btn-light-tertiary" type="button" data-method="clear"
                                        title="Clear"><span class="docs-tooltip" data-bs-toggle="tooltip"
                                            title="cropper.clear()"></span><span class="fa fa-times"></span></button>
                                </div>
                                <div class="btn-group">
                                    <button class="btn btn-light-tertiary" type="button" data-method="disable"
                                        title="Disable"><span class="docs-tooltip" data-bs-toggle="tooltip"
                                            title="cropper.disable()"></span><span class="fa fa-lock"></span></button>
                                    <button class="btn btn-light-tertiary" type="button" data-method="enable"
                                        title="Enable"><span class="docs-tooltip" data-bs-toggle="tooltip"
                                            title="cropper.enable()"></span><span class="fa fa-unlock"></span></button>
                                </div>
                                <div class="btn-group">
                                    <button class="btn btn-light-info" type="button" data-method="reset"
                                        title="Reset"><span class="docs-tooltip" data-bs-toggle="tooltip"
                                            title="cropper.reset()"></span><span class="fa fa-sync-alt"></span></button>
                                    <label class="btn btn-light-info btn-upload mb-0" for="inputImage"
                                        title="Upload image file">
                                        <input class="sr-only" id="inputImage" type="file" name="file"
                                            accept="image/*"><span class="docs-tooltip" data-bs-toggle="tooltip"
                                            title="Import image with Blob URLs"></span><span class="fa fa-upload"></span>
                                    </label>
                                    <button class="btn btn-light-info" type="button" data-method="destroy"
                                        title="Destroy"><span class="docs-tooltip" data-bs-toggle="tooltip"
                                            title="cropper.destroy()"></span><span
                                            class="fa fa-power-off"></span></button>
                                </div>
                                <!-- Show the cropped image in modal-->
                                <div class="modal fade docs-cropped" id="getCroppedCanvasModal" role="dialog"
                                    aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="getCroppedCanvasTitle">Cropped</h5>
                                                <button class="close" type="button" data-dismiss="modal"
                                                    aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body"></div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button"
                                                    data-dismiss="modal">Close</button><a class="btn btn-primary"
                                                    id="download" href="javascript:void(0);"
                                                    download="cropped.jpg">Download</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-showcase">
                                    <button class="btn btn-outline-primary" type="button" data-method="getData"
                                        data-option="" data-target="#putData"><span class="docs-tooltip"
                                            data-bs-toggle="tooltip" title="cropper.getData()">Get Data</span></button>
                                    <button class="btn btn-outline-primary" type="button" data-method="setData"
                                        data-target="#putData"><span class="docs-tooltip" data-bs-toggle="tooltip"
                                            title="cropper.setData(data)">Set Data</span></button>
                                    <button class="btn btn-outline-primary" type="button" data-method="getContainerData"
                                        data-option="" data-target="#putData"><span class="docs-tooltip"
                                            data-bs-toggle="tooltip" title="cropper.getContainerData()">Get Container
                                            Data</span></button>
                                    <button class="btn btn-outline-secondary" type="button" data-method="getImageData"
                                        data-option="" data-target="#putData"><span class="docs-tooltip"
                                            data-bs-toggle="tooltip" title="cropper.getImageData()">Get Image
                                            Data</span></button>
                                    <button class="btn btn-outline-secondary" type="button" data-method="getCanvasData"
                                        data-option="" data-target="#putData"><span class="docs-tooltip"
                                            data-bs-toggle="tooltip" title="cropper.getCanvasData()">Get Canvas
                                            Data</span></button>
                                    <button class="btn btn-outline-secondary" type="button" data-method="setCanvasData"
                                        data-target="#putData"><span class="docs-tooltip" data-bs-toggle="tooltip"
                                            title="cropper.setCanvasData(data)">Set Canvas Data</span></button>
                                    <button class="btn btn-outline-tertiary" type="button" data-method="getCropBoxData"
                                        data-option="" data-target="#putData"><span class="docs-tooltip"
                                            data-bs-toggle="tooltip" title="cropper.getCropBoxData()">Get Crop Box
                                            Data</span></button>
                                    <button class="btn btn-outline-tertiary" type="button" data-method="setCropBoxData"
                                        data-target="#putData"><span class="docs-tooltip" data-bs-toggle="tooltip"
                                            title="cropper.setCropBoxData(data)">Set Crop Box Data</span></button>
                                    <button class="btn btn-outline-tertiary" type="button" data-method="moveTo"
                                        data-option="0"><span class="docs-tooltip" data-bs-toggle="tooltip"
                                            title="cropper.moveTo(0)">Move to [0,0]</span></button>
                                    <button class="btn btn-outline-success" type="button" data-method="zoomTo"
                                        data-option="1"><span class="docs-tooltip" data-bs-toggle="tooltip"
                                            title="cropper.zoomTo(1)">Zoom to 100%</span></button>
                                    <button class="btn btn-outline-success" type="button" data-method="rotateTo"
                                        data-option="180"><span class="docs-tooltip" data-bs-toggle="tooltip"
                                            title="cropper.rotateTo(180)">Rotate 180&deg;</span></button>
                                    <button class="btn btn-outline-success" type="button" data-method="scale"
                                        data-option="-2" data-second-option="-1"><span class="docs-tooltip"
                                            data-bs-toggle="tooltip" title="cropper.scale(-2, -1)">Scale (-2,
                                            -1)</span></button>
                                    <textarea class="form-control mb-2" id="putData" placeholder="Get data to here or set data with this value"></textarea>
                                </div>
                            </div>
                            <!-- /.docs-buttons-->
                            <div class="col-xl-3 col-md-12 docs-toggles box-col-12">
                                <div class="btn-group d-flex flex-nowrap" data-bs-toggle="buttons">
                                    <label class="btn btn-light-primary">
                                        <input class="sr-only" id="aspectRatio1" type="radio" name="aspectRatio"
                                            value="1.7777777777777777"><span class="docs-tooltip"
                                            data-bs-toggle="tooltip" title="aspectRatio: 16 / 9"></span>16:9
                                    </label>
                                    <label class="btn btn-light-primary">
                                        <input class="sr-only" id="aspectRatio2" type="radio" name="aspectRatio"
                                            value="1.3333333333333333"><span class="docs-tooltip"
                                            data-bs-toggle="tooltip" title="aspectRatio: 4 / 3"></span>4:3
                                    </label>
                                    <label class="btn btn-light-primary">
                                        <input class="sr-only" id="aspectRatio3" type="radio" name="aspectRatio"
                                            value="1"><span class="docs-tooltip" data-bs-toggle="tooltip"
                                            title="aspectRatio: 1 / 1"></span>1:1
                                    </label>
                                    <label class="btn btn-light-primary">
                                        <input class="sr-only" id="aspectRatio4" type="radio" name="aspectRatio"
                                            value="0.6666666666666666"><span class="docs-tooltip"
                                            data-bs-toggle="tooltip" title="aspectRatio: 2 / 3"></span>2:3
                                    </label>
                                    <label class="btn btn-light-primary">
                                        <input class="sr-only" id="aspectRatio5" type="radio" name="aspectRatio"
                                            value="NaN"><span class="docs-tooltip" data-bs-toggle="tooltip"
                                            title="aspectRatio: NaN"></span>Free
                                    </label>
                                </div>
                                <div class="btn-group d-flex flex-nowrap" data-bs-toggle="buttons">
                                    <label class="btn btn-light-secondary">
                                        <input class="sr-only" id="viewMode0" type="radio" name="viewMode"
                                            value="0" checked=""><span class="docs-tooltip"
                                            data-bs-toggle="tooltip" title="View Mode 0"></span>VM0
                                    </label>
                                    <label class="btn btn-light-secondary">
                                        <input class="sr-only" id="viewMode1" type="radio" name="viewMode"
                                            value="1"><span class="docs-tooltip" data-bs-toggle="tooltip"
                                            title="View Mode 1"></span>VM1
                                    </label>
                                    <label class="btn btn-light-secondary">
                                        <input class="sr-only" id="viewMode2" type="radio" name="viewMode"
                                            value="2"><span class="docs-tooltip" data-bs-toggle="tooltip"
                                            title="View Mode 2"></span>VM2
                                    </label>
                                    <label class="btn btn-light-secondary">
                                        <input class="sr-only" id="viewMode3" type="radio" name="viewMode"
                                            value="3"><span class="docs-tooltip" data-bs-toggle="tooltip"
                                            title="View Mode 3"></span>VM3
                                    </label>
                                </div>
                                <div class="dropdown dropup docs-options">
                                    <button class="btn btn-primary btn-block dropdown-toggle" id="toggleOptions"
                                        type="button" data-bs-toggle="dropdown" aria-expanded="true">Toggle Options<span
                                            class="caret"></span></button>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="toggleOptions">
                                        <li class="dropdown-item">
                                            <div class="form-check">
                                                <input class="form-check-input checkbox-primary" id="responsive"
                                                    type="checkbox" name="responsive" checked="">
                                                <label class="form-check-label" for="responsive">responsive</label>
                                            </div>
                                        </li>
                                        <li class="dropdown-item">
                                            <div class="form-check">
                                                <input class="form-check-input checkbox-primary" id="restore"
                                                    type="checkbox" name="restore" checked="">
                                                <label class="form-check-label" for="restore">restore</label>
                                            </div>
                                        </li>
                                        <li class="dropdown-item">
                                            <div class="form-check">
                                                <input class="form-check-input checkbox-primary" id="checkCrossOrigin"
                                                    type="checkbox" name="checkCrossOrigin" checked="">
                                                <label class="form-check-label"
                                                    for="checkCrossOrigin">checkCrossOrigin</label>
                                            </div>
                                        </li>
                                        <li class="dropdown-item">
                                            <div class="form-check">
                                                <input class="form-check-input checkbox-primary" id="checkOrientation"
                                                    type="checkbox" name="checkOrientation" checked="">
                                                <label class="form-check-label"
                                                    for="checkOrientation">checkOrientation</label>
                                            </div>
                                        </li>
                                        <li class="dropdown-item">
                                            <div class="form-check">
                                                <input class="form-check-input checkbox-primary" id="modal"
                                                    type="checkbox" name="modal" checked="">
                                                <label class="form-check-label" for="modal">modal</label>
                                            </div>
                                        </li>
                                        <li class="dropdown-item">
                                            <div class="form-check">
                                                <input class="form-check-input checkbox-primary" id="guides"
                                                    type="checkbox" name="guides" checked="">
                                                <label class="form-check-label" for="guides">guides</label>
                                            </div>
                                        </li>
                                        <li class="dropdown-item">
                                            <div class="form-check">
                                                <input class="form-check-input checkbox-primary" id="center"
                                                    type="checkbox" name="center" checked="">
                                                <label class="form-check-label" for="center">center</label>
                                            </div>
                                        </li>
                                        <li class="dropdown-item">
                                            <div class="form-check">
                                                <input class="form-check-input checkbox-primary" id="highlight"
                                                    type="checkbox" name="highlight" checked="">
                                                <label class="form-check-label" for="highlight">highlight</label>
                                            </div>
                                        </li>
                                        <li class="dropdown-item">
                                            <div class="form-check">
                                                <input class="form-check-input checkbox-primary" id="background"
                                                    type="checkbox" name="background" checked="">
                                                <label class="form-check-label" for="background">background</label>
                                            </div>
                                        </li>
                                        <li class="dropdown-item">
                                            <div class="form-check">
                                                <input class="form-check-input checkbox-primary" id="autoCrop"
                                                    type="checkbox" name="autoCrop" checked="">
                                                <label class="form-check-label" for="autoCrop">autoCrop</label>
                                            </div>
                                        </li>
                                        <li class="dropdown-item">
                                            <div class="form-check">
                                                <input class="form-check-input checkbox-primary" id="movable"
                                                    type="checkbox" name="movable" checked="">
                                                <label class="form-check-label" for="movable">movable</label>
                                            </div>
                                        </li>
                                        <li class="dropdown-item">
                                            <div class="form-check">
                                                <input class="form-check-input checkbox-primary" id="rotatable"
                                                    type="checkbox" name="rotatable" checked="">
                                                <label class="form-check-label" for="rotatable">rotatable</label>
                                            </div>
                                        </li>
                                        <li class="dropdown-item">
                                            <div class="form-check">
                                                <input class="form-check-input checkbox-primary" id="scalable"
                                                    type="checkbox" name="scalable" checked="">
                                                <label class="form-check-label" for="scalable">scalable</label>
                                            </div>
                                        </li>
                                        <li class="dropdown-item">
                                            <div class="form-check">
                                                <input class="form-check-input checkbox-primary" id="zoomable"
                                                    type="checkbox" name="zoomable" checked="">
                                                <label class="form-check-label" for="zoomable">zoomable</label>
                                            </div>
                                        </li>
                                        <li class="dropdown-item">
                                            <div class="form-check">
                                                <input class="form-check-input checkbox-primary" id="zoomOnTouch"
                                                    type="checkbox" name="zoomOnTouch" checked="">
                                                <label class="form-check-label" for="zoomOnTouch">zoomOnTouch</label>
                                            </div>
                                        </li>
                                        <li class="dropdown-item">
                                            <div class="form-check">
                                                <input class="form-check-input checkbox-primary" id="zoomOnWheel"
                                                    type="checkbox" name="zoomOnWheel" checked="">
                                                <label class="form-check-label" for="zoomOnWheel">zoomOnWheel</label>
                                            </div>
                                        </li>
                                        <li class="dropdown-item">
                                            <div class="form-check">
                                                <input class="form-check-input checkbox-primary" id="cropBoxMovable"
                                                    type="checkbox" name="cropBoxMovable" checked="">
                                                <label class="form-check-label"
                                                    for="cropBoxMovable">cropBoxMovable</label>
                                            </div>
                                        </li>
                                        <li class="dropdown-item">
                                            <div class="form-check">
                                                <input class="form-check-input checkbox-primary" id="cropBoxResizable"
                                                    type="checkbox" name="cropBoxResizable" checked="">
                                                <label class="form-check-label"
                                                    for="cropBoxResizable">cropBoxResizable</label>
                                            </div>
                                        </li>
                                        <li class="dropdown-item">
                                            <div class="form-check">
                                                <input class="form-check-input checkbox-primary"
                                                    id="toggleDragModeOnDblclick" type="checkbox"
                                                    name="toggleDragModeOnDblclick" checked="">
                                                <label class="form-check-label"
                                                    for="toggleDragModeOnDblclick">toggleDragModeOnDblclick</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Fixed Cropper</h4>
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>.fixed-crop</code><span>class fixed the
                                image.</span></p>
                    </div>
                    <div class="card-body">
                        <div class="img-container"><img class="fixed-crop img-fluid"
                                src="{{ asset('assets/images/other-images/img-1.jpg') }}" alt=""></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Crop a round image</h4>
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>.circle-img</code><span>class cropped rounded
                                image.</span></p>
                    </div>
                    <div class="card-body">
                        <div class="circle-image text-center"><img class="img-fluid" id="circle-img"
                                src="{{ asset('assets/images/other-images/img-2.jpg') }}" alt="">
                            <button class="btn btn-primary mt-3" id="circle-crop">Crop</button>
                            <div id="result"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Multiple Cropper</h4>
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>..multi-crop</code><span>class through crop
                                multiple images.</span></p>
                    </div>
                    <div class="card-body">
                        <div class="multi-crop common-flex row overflow-hidden">
                            <div class="col-5"><img class="img-fluid"
                                    src="{{ asset('assets/images/other-images/img-3.jpg') }}" alt=""></div>
                            <div class="col-5"><img class="img-fluid ms-2"
                                    src="{{ asset('assets/images/other-images/img-4.jpg') }}" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/vendors/cropperjs/dist/cropper.js') }}"></script>
    <script src="{{ asset('assets/js/img-cropper/img-cropper-custom.js') }}"></script>
@endsection
