    <div id = "load-background">
<div id="load"></div>
</div>

<script src = "js/loading.js" type="text/javascript"></script>




 //Loading time on purpose

document.onreadystatechange = function () {
  var state = document.readyState
  if (state == 'complete') {
      setTimeout(function(){
          document.getElementById('interactive');
         document.getElementById('load').style.visibility="hidden";
         document.getElementById('load-background').style.visibility="hidden";
      },1000);
  }
}

  //Just loaded page
  
  document.onreadystatechange = function () {
  var state = document.readyState
  if (state == 'complete') {
         document.getElementById('interactive');
         document.getElementById('load').style.visibility="hidden";
        document.getElementById('load-background').style.visibility="hidden";
  }
}




/* Loading page */


  #load{
  
    position:fixed;
    z-index:9999;
    background: no-repeat center center rgb(0,0,0,0.60);
      border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 1s linear infinite; /* Safari */
  animation: spin 1s linear infinite;
 position:absolute; /*it can be fixed too*/
        left:0; right:0;
        top:0; bottom:0;
        margin:auto;

        /*this to solve "the content will not be cut when the window is smaller than the content": */
        max-width:100%;
        max-height:100%;
        overflow:auto;

}
#load-background{
   position:fixed;
  background: rgb(0,0,0,0.60);
  z-index: 9999;
  width: 100%;
  height: 100%;
}
/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
/* End of loading page */