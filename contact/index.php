<?php 
    require($_SERVER['DOCUMENT_ROOT'].'/includes/upper_header.php'); 
?>
    <title>1294 | Contact Us</title>
    <meta name="description" content="Contact the Team for any Information about Sponsoring or other Information"/>
<?php
    require($_SERVER['DOCUMENT_ROOT'].'/includes/lower_header.php');
?>
<div class="body-container top-container">
    <div class="container">
        <h1>This is the contact page</h1>
        <p>A very nice contact form as well with mailing list sign up, and direct contact information can be found here</p>
        <p>A form similar to the following will be found on this page, but it will look a little bit nicer</p>
        <form class="form-horizontal">
          <fieldset>
            <legend>Legend</legend>
            <div class="form-group">
              <label for="inputEmail" class="col-lg-2 control-label">Email</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" id="inputEmail" placeholder="Email">
              </div>
            </div>
            <div class="form-group">
              <label for="textArea" class="col-lg-2 control-label">Textarea</label>
              <div class="col-lg-10">
                <textarea class="form-control" rows="3" id="textArea"></textarea>
                <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-2 control-label">Radios</label>
              <div class="col-lg-10">
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                    Option one is this
                  </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                    Option two can be something else
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="select" class="col-lg-2 control-label">Selects</label>
              <div class="col-lg-10">
                <select class="form-control" id="select">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
                <br>
                <select multiple="" class="form-control">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-10 col-lg-offset-2">
                <button class="btn btn-danger">Cancel</button>
                <button type="submit" class="btn btn-success">Submit</button>
              </div>
            </div>
          </fieldset>
        </form>
    </div>
</div>
<?php require($_SERVER['DOCUMENT_ROOT'].'/includes/footer.php'); ?>