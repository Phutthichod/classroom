<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-select.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="bootstrap-select.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="newStyle.css">
    <title>Acces</title>
</head>
<body>
    <div class="content">
   
        <div class="head">

        </div>
        <div class="nav">

        </div>
        <div class="container" > 

            <div class="main">
                <h2 style="font-size: 50px; color : red; margin-bottom: 20px;" >Assessories</h2>
                <form action="/action_page.php">
                    <div class="form-group">
                        <label style="float: left">ชื่ออุปกรณ์</label>
                        <input  class="form-control">
                    </div>
                    <div class="form-group">
                        <label style="float: left">ชื่อย่ออุปกรณ์</label>
                        <input  class="form-control" >
                    </div>
                    <div class="form-group">
                        <label style="float: left">หมายเลขอุปกรณ์</label>
                        <input  class="form-control" >
                    </div>
                    <div class="form-group">
                    <label style="float: left">ชนิดอุปกรณ์  </label>
                    <div style="float: left; margin-left : 50px"> 
                        <select class="selectpicker" data-live-search="true" title="Please select"  >
                            <option>Ant</option>
                            <option>Bat</option>
                            <option>Cat</option>
                            <option>Dog</option>
                            <option>Egg</option>
                        </select>
                    </div>
                    <label style="float: left; margin-left : 50px"" >ชนิดอุปกรณ์  </label>
                    <div style="float: left; margin-left : 50px"> 
                        <select class="selectpicker" data-live-search="true" title="Please select"  >
                            <option>Ant</option>
                            <option>Bat</option>
                            <option>Cat</option>
                            <option>Dog</option>
                            <option>Egg</option>
                        </select>
                    </div>
                    </div>
                    <br><br>
                    <div class="form-group">
                    <button type="button" class="btn btn-secondary" style="height : 100px; width: 200px; float: center;" >อัพโหลดรูปภาพ</button>
                    </div>
                    <form action="upload.php" method="post" enctype="multipart/form-data">
                        Select image to upload:
                        <input type="file" name="fileToUpload" id="fileToUpload">
                        <input type="submit" value="Upload Image" name="submit">
                    </form>
                        <button type="button" class="btn btn-danger" style="float: right; margin: 150px 50px 0px 10px;" >Cancel</button>
                        <button type="button" class="btn btn-primary" style="float: right; margin-top: 150px">Submit</button>
                   
                    
                </form>
            </div>
        </div>  
       
      
    </div>
    <div class="footer col-12" >

   </div>
   

    </div>
  </div>
</div>
</body>

</html>