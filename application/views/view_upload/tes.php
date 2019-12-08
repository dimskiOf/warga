<!DOCTYPE html>
<html>
    <head>
        <title>Facebook Style Infinite Scroll Pagination in Codeigniter using Ajax</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
        @-webkit-keyframes placeHolderShimmer {
          0% {
            background-position: -468px 0;
          }
          100% {
            background-position: 468px 0;
          }
        }

        @keyframes placeHolderShimmer {
          0% {
            background-position: -468px 0;
          }
          100% {
            background-position: 468px 0;
          }
        }

        .content-placeholder {
          display: inline-block;
          -webkit-animation-duration: 1s;
          animation-duration: 1s;
          -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
          -webkit-animation-iteration-count: infinite;
          animation-iteration-count: infinite;
          -webkit-animation-name: placeHolderShimmer;
          animation-name: placeHolderShimmer;
          -webkit-animation-timing-function: linear;
          animation-timing-function: linear;
          background: #f6f7f8;
          background: -webkit-gradient(linear, left top, right top, color-stop(8%, #eeeeee), color-stop(18%, #dddddd), color-stop(33%, #eeeeee));
          background: -webkit-linear-gradient(left, #eeeeee 8%, #dddddd 18%, #eeeeee 33%);
          background: linear-gradient(to right, #eeeeee 8%, #dddddd 18%, #eeeeee 33%);
          -webkit-background-size: 800px 104px;
          background-size: 800px 104px;
          height: inherit;
          position: relative;
        }

        .post_data
        {
          padding:24px;
          border:1px solid #f9f9f9;
          border-radius: 5px;
          margin-bottom: 24px;
          box-shadow: 10px 10px 5px #eeeeee;
        }
        </style>
    </head>
    <body>
        <div class="container">
            <h2 align="center"><u>Facebook Style Infinite Scroll Pagination in Codeigniter using Ajax</u></h2>
            <br />
            <div class="col-md-8 col-xs-12 konten">

              <!-- Daily Widget-->
              <div id="daily-feeds" class="card updates daily-feeds">
                <div id="feeds-header" class="card-header d-flex justify-content-between align-items-center">
                  <h2 class="h5 display"><a data-toggle="collapse" data-parent="#daily-feeds" href="#feeds-box" aria-expanded="true" aria-controls="feeds-box"><b>Forum Chat</b>&nbsp&nbsp&nbsp<time datetime=""></time></a></h2>
                  <div class="right-column">
                    <div class="badge badge-primary"><font size="3" color="red"><p id="statuss" style="color:yellow"></p></font></div><a data-toggle="collapse" data-parent="#daily-feeds" href="#feeds-box" aria-expanded="true" aria-controls="feeds-box"><i class="fa fa-angle-down"></i></a>
                  </div>
                </div>
                <div id="feeds-box" role="tabpanel" class="collapse show">
                  <div class="feed-box" >
                    <ul class="feed-elements list-unstyled">
                      <!-- List-->
                      <div id="load_data"></div>
                      <div id="load_data_message"></div>
                      <!--end of list -->
                    </ul>
                  </div>
                </div>
                <div class="card-footer1">
              <div class="input-group">
                <div class="input-group-append">
                  <span class="input-group-text attach_btn"><i class="fa fa-paperclip fa-2x"></i></span>
                </div>  
                <textarea name="isinya" id="msgs" class="form-control type_msg" placeholder="Type your message..."></textarea>
                <div class="input-group-append">
                  <span class="input-group-text send_btn"><i id="sendbtn" class="fa fa-location-arrow fa-2x"></i></span>
                </div>
              </div>
            </div>
              </div>
              <!-- Daily Feed Widget End-->
            </div>
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
        </div>
    </body>
</html>
<script>
  $(document).ready(function(){

    var limit = 10;
    var start = 0;
    var action = 'inactive';

    function lazzy_loader(limit)
    {
      var output = '';
      for(var count=0; count<limit; count++)
      {
        output += '<div class="post_data">';
        output += '<p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p>';
        output += '<p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p>';
        output += '</div>';
      }
      $('#load_data_message').html(output);
    }

    lazzy_loader(limit);

    function load_data(limit, start)
    {
       $.ajax({
                url   : '<?php echo base_url(); ?>Boot/getChatkhusus',
                method:"POST",
                data:{limit:limit, start:start},
                cache: false,
                success : function(data){
                    var html = '';
                    var html1 = '';
                    var i;        
                    if(data.length > 0){
                    for(i=0; i<data.length; i++){
                    var idchat1 = data[i].idchat;
                    var chatusr = data[i].chat_usr;
                    var relativtime = data[i].datetime;
                    var idchat ='<?php echo md5($this->session->userdata('id')); ?>';
                    var stats = (idchat == idchat1) ? "You": data[i].nama_usr;
                    var sideof = (idchat == idchat1) ? "<div class='feed-body d-flex justify-content-between'><a href='#' class='feed-profile'><img src='<?php echo base_url(); ?>assets/img/question.png' alt='person' class='img-fluid rounded-circle'></a><div class='content' id='satanic'><strong><font color='green' size='4'><b> "+stats+"</b></font></strong><div class='wb'><small><font id='isi' color='white' size='3'>"+$('<div />').text(data[i].chat_usr).html()+"</font></small></div><div class='full-date'></div></div></div><div class='date'><small>"+relativtime+"</small></div>": "<div class='date'><small>"+relativtime+"</small></div><div class='c'><div class='content'><strong><font color='green' size='4'><b> "+stats+"</b></font></strong><div class='wb'><small><font id='isi' color='white' size='3'>"+$('<div />').text(data[i].chat_usr).html()+"</font></small></div><div class='full-date'></div></div></div><div class='feed-body d-flex justify-content-between'><a href='#' class='feed-profile'><img src='<?php echo base_url(); ?>assets/img/question.png' alt='person' class='img-fluid rounded-circle'></a></div>";

                        html += '<li class="clearfix">'+
                        '<div class="feed d-flex justify-content-between">'+
                         sideof+
                        '</div>'+
                      '</li>';
                    }
                     $('#load_data').html(html);
                     $('#load_data_message').html("");
                      action = 'inactive';
                  } else{
                     html1 += '<tr><td colspan="5">no message</td></tr>';
                     $('#load_data_message').html(html1);
                  }
                    
                }
 
            })
    }

    if(action == 'inactive')
    {
      action = 'active';
      load_data(limit, start);
    }

    $(window).scroll(function(){
      if($(window).scrollTop() + $(window).height() > $("#load_data").height() && action == 'inactive')
      {
        lazzy_loader(limit);
        action = 'active';
        start = start + limit;
        setTimeout(function(){
          load_data(limit, start);
        }, 1000);
      }
    });

  });
</script>