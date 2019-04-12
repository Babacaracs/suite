(function(){
    SUGAR.util.doWhen("typeof $ != 'undefined'", function(){
        a= (document.getElementById("seg2_c").offsetParent).previousElementSibling;  
        b= (document.getElementById("chiffre_affaire_c"));  
    
        a.style.visibility="hidden";
        $("#seg2_c").css('visibility','hidden');
        $("#seg1_c").change(function() {
  
            if($("#seg1_c").val()=="b2b")
     {
         a.style.visibility="hidden";
        //  console.log($("#seg1_c").val());
         $("#seg2_c").css('visibility','hidden');
         $("#chiffre_affaire_c").val("");
         $("#nombre_emp_c").val("");
 
        // $('div:contains("sous-segment de marché:")').css('color','white'); 
     }
     else if($("#seg1_c").val()=="operateur")
     {
        $("#chiffre_affaire_c").val("300");
        $("#nombre_emp_c").val("2");
        console.log($("#chiffre_affaire_c").val());
        console.log("operateur selectionner");
        
 
        // $('div:contains("sous-segment de marché:")').css('color','white'); 
     }

  
     else
  
     {
        $("#chiffre_affaire_c").val("");
        $("#nombre_emp_c").val("");
        a.style.visibility="visible";
        $("#seg2_c").css('visibility','visible');
        // $('div:contains("sous-segment de marché:")').css('color','black');   
     }
     
    });
 
 //$('("b2b")').css('color','blue'); 
 
// }
}); 
 
    
})();


