show_sharing();
show_datapengguna();
show_chat();

$('#logout').click(function(){
    var reallyLogout=confirm("Do you really want to log out?");
    if(reallyLogout){
        location.href="logout";
    }
});

  $(document).ready(function(){
    $('#sharings').on('click',function(event){
       event.preventDefault();
       var post_url = "http://127.0.0.1/uploads/share"; //get form action url
       var request_method = $(this).attr("method"); //get form GET/POST methoh
       var button = $(event.target);                 
       var result = button.parents('#btn-share').serialize() 
        + encodeURI(button.attr('name'))
        + '='
        + encodeURI(button.attr('value'))
       ;

    $.ajax({
          url : post_url,
          type: request_method,
          data: result, // serializes the form's elements.
           success: function(data)
           {
               $("#result").html(data);
               show_sharing();
           }
         });
      
    });

})  
      function show_sharing(){
            $.ajax({
                type  : 'ajax',
                url   : 'http://127.0.0.1/uploads/Tabel/getDatasharing',
                async : true,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var html1 = '';
                    var i;
                    if(data.length > 0){
                    for(i=0; i<data.length; i++){

                        html += '<tr>'+
                                '<td>'+data[i].file_name+'</td>'+
                                '<td>'+data[i].status+'</td>'+
                                '<td><button type="submit" name="file" class="btn btn-primary btn-submit" id="btn-share" data-toggle="modal" data-target="#popup" value='+data[i].file_name+'>'+data[i].action+'</button></td>'+
                                '</tr>';
                        
                    }
                     $('#show_data_sharing').html(html);
                  } else{
                     html1 += '<tr><td colspan="5">Tidak ada data</td></tr>';
                     $('#show_data_sharing').html(html1);
                  }
                    
                }
 
            });
        }
    function show_datapengguna(){
            $.ajax({
                type  : 'ajax',
                url   : 'http://127.0.0.1/uploads/Tabel/getDatapengguna',
                async : true,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var html1 = '';
                    var i;
                    if(data.length > 0){
                    for(i=0; i<data.length; i++){

                        html += '<tr>'+
                                '<tr><th>USERNAME</th><th>:</th><td>'+data[i].username+'</td></tr>'+
                                '<tr><th>TGL. DAFTAR</th><th>:</th><td>'+data[i].tglDaftar+'</td></tr>'+
                                '<tr><th>NAMA LENGKAP</th><th>:</th><td>'+data[i].nama+'</td></tr>'+
                                '<tr><th>EMAIL</th><th>:</th><td>'+data[i].email+'</td></tr>'+
                                '<tr><th>FOLDER</th><th>:</th><td>'+data[i].folder+'</td></tr>'+
                                '</tr>'
                                ;
                        
                    }
                     $('#show_data_pengguna').html(html);
                  } else{
                     html1 += '<tr><td colspan="5">Tidak ada data</td></tr>';
                     $('#show_data_pengguna').html(html1);
                  }
                    
                }
 
            });
        }
   function show_chat(){
            $.ajax({
                type  : 'ajax',
                url   : 'http://127.0.0.1/uploads/Tabel/getChatkhusus',
                async : true,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var html1 = '';
                    var i;
                    if(data.length > 0){
                    for(i=0; i<data.length; i++){
                        
                        html += '<li class="clearfix">'+
                        '<div class="feed d-flex justify-content-between">'+
                          '<div class="feed-body d-flex justify-content-between"><a href="#" class="feed-profile"><img src="http://127.0.0.1/uploads/assets/img/question.png" alt="person" class="img-fluid rounded-circle"></a>'+
                            '<div class="content"><strong><font color="green" size="4"><b>'+data[i].nama_usr+'</b></font></strong><small><font color="white" size="3">'+data[i].chat_usr+'</font></small>'+
                              '<div class="full-date"><small>Today 5:60 pm - 12.06.2014</small></div>'+
                            '</div>'+
                          '</div>'+
                          '<div class="date"><small>5min ago</small></div>'+
                        '</div>'+
                      '</li>';
                        
                    }
                     $('.uniqchat').html(html);
                  } else{
                     html1 += '<tr><td colspan="5">no message</td></tr>';
                     $('.uniqchat').html(html1);
                  }
                    
                }
 
            });
        }