$(function(){
  
    var $container = $('#container2')
    var $checkboxes = $('#filters2 input')
    
    $container.isotope({
      itemSelector: '.item'
    });
    
    $checkboxes.change(function(){
      var filters = [];
      // get checked checkboxes values
      $checkboxes.filter(':checked').each(function(){
        filters.push( this.value );
      });
      // ['.red', '.blue'] -> '.red, .blue'
      filters = filters.join(', ');
      $container.isotope({ filter: filters });
    });
    
  });