$('.timer').on('change',function(){
    var arrayTime ='{';
    var loopcount = 0;
    $('.timer').each(function(index,value){
            var time = $('.timer:eq('+index+')').val();
             
            if(index%2 == 0){
              arrayTime = arrayTime+'{"starttime":"'+$('.timer:eq('+index+')').val()+'",';  
            }else{
                arrayTime = arrayTime+'"endtime":"'+$('.timer:eq('+index+')').val()+'"},';  
                
            } 
                
    }); 

            arrayTime = arrayTime + '}'
            $('#cafetime').val(arrayTime);
   


})
$('.selecter').selectize({
    sortField: 'text',
	selectOnTab:true,
});