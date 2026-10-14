

(function($) {

   $(document).ready(function() {
 
      
 
       var $menu = $("#menu").mmenu({
             navbar:{ title:"MSC CREWING SERVICES" },
             wrappers : ["bootstrap 5"],
             extensions: ["border-full"],
           "navbars" : [
             {
                "position": "top",
               
             }
           ]
               },{
           // configuration
                classNames: {
                   fixedElements: {
                      fixed: "fix",
                      sticky: "stick"
                   }
                }
         });
         var $icon = $("#my-icon");
         var API = $menu.data( "mmenu" );
 
         $icon.on( "click", function() {
            API.open();
         });
 
         API.bind( "open:finish", function() {
            setTimeout(function() {
               $icon.addClass( "is-active" );
            }, 100);
         });
         API.bind( "close:finish", function() {
            setTimeout(function() {
               $icon.removeClass( "is-active" );
            }, 100);
         });
 
 
 
  });


  $(document).ready(function() {


   $('.mm-btn_next').each(function() {
      // Find the nearest sibling element
      var nearestSibling = $(this).prev('.mm-listitem__text');
      var sourceHref = $(this).attr('href');
      // Check if a nearest sibling element was found
      if (nearestSibling.length) {
          // Change the attribute of the nearest sibling element
          nearestSibling.attr('href',sourceHref);
      }
   });
   
   });





 
 })(jQuery);


