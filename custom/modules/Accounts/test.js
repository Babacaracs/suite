$('.btnpop').click(function(){
  var w=window.open('index.php?entryPoint=customEntryPoint&id1=id','pop1', 'top=100,left=400,resizable=no, location=no, width=600, height=500, menubar=no, status=no, scrollbars=no, menubar=no');
       w.document.close();
        w.focus();
    });
     
      // dialog = new YAHOO.widget.Dialog('dialog1', {
    //     width: '400px',
    //     height: '400px',
    //     fixedcenter : "contained",
    //     visible : false,
    //     draggable: true,
    //     position: 'absolute',
    //     fixedcenter: true, 
    //     close:false,
    //     centered: true,
    //     // effect:[{effect:YAHOO.widget.ContainerEffect.SLIDE, duration:0.2},
    //        // {effect:YAHOO.widget.ContainerEffect.FADE,duration:0.2}],
    //     modal:true,
    //     });
    //     var bodyHtml='anything you want to show in popup'
    //     dialog.setHeader("blahhhhh");
    //     dialog.setBody(bodyHtml);
///});
