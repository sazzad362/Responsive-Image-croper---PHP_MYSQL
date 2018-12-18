<!DOCTYPE html>
<html>
<head>
  <title>Multifunctions Image Uploader</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/cropper.min.css" type="text/css" />
  <link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="assets/css/custom.css" type="text/css" />
</head>
<body>      
<form id="upload_form" name="upload_form" class="saz_form" method="post" action="crop.php" enctype="multipart/form-data" onSubmit="return checkForm()">
  <input type="hidden" id="x1" name="x1" />
  <input type="hidden" id="y1" name="y1" />
  <input type="hidden" id="x2" name="x2" />
  <input type="hidden" id="y2" name="y2" />
  <div>
    <div style="margin: 0 auto;display: block;text-align: center;">
      <input type="file" name="image_file" id="image_file" onChange="fileSelectHandler()" />
    </div>
  </div>
  <div class="error"></div>
  <div class="step2">
    <div class="ccontainer">
        <div>
          <img id="img" src="" alt="" />
        </div>
    </div>
    <div class="btn-group">
      <button type="button" class="btn btn-primary up_image_sn_btn" data-method="zoom" data-option="0.1" title="Zoom In">
        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;zoom&quot;, 0.1)">
          <span class="fa fa-search-plus"></span>
        </span>
      </button>
      <button type="button" class="btn btn-primary" data-method="zoom" data-option="-0.1" title="Zoom Out">
        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;zoom&quot;, -0.1)">
          <span class="fa fa-search-minus"></span>
        </span>
      </button>
   
      <button type="button" class="btn btn-primary" data-method="move" data-option="-10" data-second-option="0" title="Move Left">
        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;move&quot;, -10, 0)">
          <span class="fa fa-arrow-left"></span>
        </span>
      </button>
      <button type="button" class="btn btn-primary" data-method="move" data-option="10" data-second-option="0" title="Move Right">
        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;move&quot;, 10, 0)">

          <span class="fa fa-arrow-right"></span>
        </span>
      </button>
      <button type="button" class="btn btn-primary" data-method="move" data-option="0" data-second-option="-10" title="Move Up">
        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;move&quot;, 0, -10)">
          <span class="fa fa-arrow-up"></span>
        </span>
      </button>
      <button type="button" class="btn btn-primary" data-method="move" data-option="0" data-second-option="10" title="Move Down">
        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;move&quot;, 0, 10)">
          <span class="fa fa-arrow-down"></span>
        </span>
      </button>
    
      <button type="button" class="btn btn-primary" data-method="rotate" data-option="-90" title="Rotate Left">
        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;rotate&quot;, -90)">
          <span class="fa fa-rotate-left"></span>
        </span>
      </button>
      <button type="button" class="btn btn-primary" data-method="rotate" data-option="90" title="Rotate Right">
        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;rotate&quot;, 90)">
          <span class="fa fa-rotate-right"></span>
        </span>
      </button>
    
      <button type="button" class="btn btn-primary" data-method="scaleX" data-option="-1" title="Flip Horizontal">
        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;scaleX&quot;, -1)">
          <span class="fa fa-arrows-h"></span>
        </span>
      </button>
      <button type="button" class="btn btn-primary" data-method="scaleY" data-option="-1" title="Flip Vertical">
        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;scaleY&quot;, -1)">
          <span class="fa fa-arrows-v"></span>
        </span>
      </button>
    </div>
    <div class="infos">
      <input type="hidden" id="filedata" name="filedata" />
      <input type="hidden" id="filesize" name="filesize" />
      <input type="hidden" id="filetype" name="filetype" />
      <input type="hidden" id="filedim" name="filedim" />
      <input type="hidden" id="w" name="w" />
      <input type="hidden" id="h" name="h" />
      <input type="hidden" name="img_data" id="img-data">
    <div class="up_image_sn">
          <button type="submit" class="btn btn-primary" data-method="scaleY" data-option="-1" title="Flip Vertical">
            <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="">Upload
              <span class="fa fa fa-upload"></span>
            </span>
          </button>
      </div>
    </div>
  </div>
  <div class="loading" aria-label="Loading" role="img" tabindex="-1"></div>
</form>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="assets/js/cropper.min.js"></script>
  <script src="assets/js/exif.js"></script>
  <script src="assets/js/ImageUploader.js"></script>
  <script src="assets/js/script.js"></script>
</body>
</html>