<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'header.php' ?>
    <title>Acces</title>
</head>
<body>
    <div class="content">
   
        <div class="head">

        </div>
        <div class="nav">

        </div>
        <div class="container" id="app"> 
        <div class="card">
            <div class="card-header">Header</div>
            <div class="card-body">
                                <div class="main">
                                <a href="edit.php"><button class="btn btn-success btn-lg" style="float: right" >เพิ่ม</button></a>
                                
                                            
                                    <table class="table table-dark" >
                                        <thead>
                                        <tr class="text-success">
                                            <th>ชื่อ</th>
                                            <th>ชื่อย่อ</th>
                                            <th>หมายเลข</th>
                                            <th>ชนิด</th>
                                            <th>ไอคอน</th>
                                            <th>Gallorys</th>
                                            <th>ที่อยู่</th>
                                            <th>Log</th>
                                            <th>แก้ไข</th>
                                            <th>ลบ</th>
                                        </tr>
                                        </thead>
                                        <tbody v-for="(item,index) in  arrayAcess" v-bind:key="index">
                                        <tr >
                                            <td>{{item.name}}</td>
                                            <td id="_name">{{item.name2}}</td>
                                            <td>{{item.number}}</td>
                                            <td>{{item.type}}</td>
                                            <td><i class='fas fa-key' style={{item.icon}></i></td>
                                            <td><a href="#" class="text-white">pic</a></td>
                                            <td>{{item.room}}</td>
                                            <td><a href="#"  class="text-danger">กด</a></td>
                                            <td><a href="edit.php"><button class="btn btn-primary btn-lg"  >แก้ไข</button></a></td>
                                            <td><button class="btn btn-danger">ลบ</button></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>  
                        
                        
                       
            </div> 
        </div>
        </div>
    <div class="footer col-12" >

   </div>
   

</body>
<script>
   var app = new Vue({
  el: '#app',
  data: {
    arrayAcess: [{
        "name" : "ยางลบ",
        "number" : "123",
        "name2" : "ลบ",
        "type" : "ลบไง",
        "icon" : "font-size:48px;color:red",
        "room" : "3784",
    },
    {
        "name" : "ยางลบ",
        "number" : "123",
        "name2" : "ลบ",
        "type" : "ลบไง",
        "icon" : "font-size:48px;color:red",
        "room" : "3784",
    },
    {
        "name" : "ยางลบ",
        "number" : "123",
        "name2" : "ลบ",
        "type" : "ลบไง",
        "icon" : "font-size:48px;color:red",
        "room" : "3784",
    },
    {
        "name" : "ยางลบ",
        "number" : "123",
        "name2" : "ลบ",
        "type" : "ลบไง",
        "icon" : "font-size:48px;color:red",
        "room" : "3784",
    },
    {
        "name" : "ยางลบ",
        "number" : "123",
        "name2" : "ลบ",
        "type" : "ลบไง",
        "icon" : "font-size:48px;color:red",
        "room" : "3784",
    },
    {
        "name" : "ยางลบ",
        "number" : "123",
        "name2" : "ลบ",
        "type" : "ลบไง",
        "icon" : "font-size:48px;color:red",
        "room" : "3784",
    },
    {
        "name" : "ยางลบ",
        "number" : "123",
        "name2" : "ลบ",
        "type" : "ลบไง",
        "icon" : "font-size:48px;color:red",
        "room" : "3784",
    },
    {
    "name" : "ยางลบ",
        "number" : "123",
        "name2" : "ลบ",
        "type" : "ลบไง",
        "icon" : "font-size:48px;color:red",
        "room" : "3784",
    },
    {
    "name" : "ยางลบ",
        "number" : "123",
        "name2" : "ลบ",
        "type" : "ลบไง",
        "icon" : "font-size:48px;color:red",
        "room" : "3784",
    },
    {
    "name" : "ยางลบ",
        "number" : "123",
        "name2" : "ลบ",
        "type" : "ลบไง",
        "icon" : "font-size:48px;color:red",
        "room" : "3784",
    },
    {
    "name" : "ยางลบ",
        "number" : "123",
        "name2" : "ลบ",
        "type" : "ลบไง",
        "icon" : "font-size:48px;color:red",
        "room" : "3784",
    },
    {
    "name" : "ยางลบ",
        "number" : "123",
        "name2" : "ลบ",
        "type" : "ลบไง",
        "icon" : "font-size:48px;color:red",
        "room" : "3784",
    },
     ]}
})

</script>
<script>
  /*  $(document).ready(function(){
    $("#_name").text("ลบ");

})*/
</script>

</html>