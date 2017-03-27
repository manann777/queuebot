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

$('.btnsend').on('click',function(){
    var msg= $('input[name=msg]').val();
    var strhuman = '<div class="humanchat"><span class="label label-success msghuman">'+msg+'</span></div>'
    
    $('.chatbox').append(strhuman);

    $.post('?r=testchat/humanmsg',{'msg':msg},function(data){
        var strbot = '<span class="label label-info"></span>'
        var strbotchat = '<div class="botchat"></div>'
         if(data.success){
             strbot = $(strbot).append(data.msgbot)
             strbotchat = $(strbotchat).append(strbot.prop('outerHTML'))
            $('.chatbox').append(strbotchat.prop('outerHTML'));
        }

    },'json')
})