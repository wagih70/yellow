jQuery(document).ready(function ()
{
    jQuery('select[name="inputCity"]').on('change',function()
    {
         var cityId = jQuery(this).val();
         if(cityId)
         {
            jQuery.ajax({
                 url : '/getareas/' + cityId,
                 type : "GET",
                 dataType : "json",
                 success:function(data)
                 {
                    jQuery('select[name="inputArea"]').empty();
                    jQuery.each(data, function(key,value){
                       $('select[name="inputArea"]').append(
                        '<option value="'+ value.id +'">'+ 
                        value.name +'</option>');
                    });
                 }
            });
         }
         else
         {
            $('select[name="inputArea"]').empty();
         }
    });      
});

$('.delete-company').click(function(e){
    e.preventDefault()
    if (confirm('Are you sure?')) {
        $(e.target).closest('form').submit() 
    }
});