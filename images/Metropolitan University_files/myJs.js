function sendFrmRequest(url,frm,div,message)
{
	if(message!='')
	{
		
		if(window.confirm(message))
		{
			//sendFromRequest(url,param,frm,div);
		$.post(url,$('#'+frm).serialize(),function(data){
				if(data.length >0)
				{
                
					$('#'+div).html(data);
				}
			});
		}else
		{
			return false;
		}
	}
	else
	{
		//sendFromRequest(url,param,frm,div);
		$.post(url,$('#'+frm).serialize(),function(data){
				if(data.length >0)
				{
                
					$('#'+div).html(data);
				}
			});
	}  
}




function muContent(id,cid)
{
		var div="muContent";
		url="index.php?id="+id+"&cid="+cid+"";
		
		 $.post(url, function(data){
				
				if(data.length >0)
				{
                
					$('#'+div).html(data);
				}
		});	 
}


function sendRequest(url,div,message)
{
	
	
	
	
		getPage(url,div);
	
  
}

function getPage(url,div) {
	
	//generate the parameter for the php script

	$.ajax({
		url: url,	
		type: "POST",				
		cache: false,
		success: function (html) {	
		
			//hide the progress bar
			$('#loading').hide();	
			$('#'+div).show();
			//add the content retrieved from ajax and put it in the #content div
			$('#'+div).html(html);
			
			
			//display the body with fadeIn transition
			$('#'+div).fadeIn('slow');	
			
			init();	
		}		
	});
}

function init()
    {
    	$('li[rel=linkMain]').click(function () {
		
		//clear the selected class and add the class class to the selected link
	 		$('li[rel=linkMain]').removeClass('selected');
	 		$(this).addClass('selected');
	 	
		});
    	
    	$('li[rel=linkSub]').click(function () {
			
		//clear the selected class and add the class class to the selected link
	 		$('li[rel=linkSub]').removeClass('selected');
	 		$(this).addClass('selected');
	 	
		});
		
	$('li[rel=link]').click(function () {
		
		//clear the selected class and add the class class to the selected link
	 		$('li[rel=link]').removeClass('selected');
	 		$(this).addClass('selected');
	 	
		});
		
		
		
		$('#journal a.title').click(function(){
			//get collapse content selector
                        
                       var selector = $(this).attr('rel');					
                       
                       $('#journal p.abstruct').each(function(index) {
                              
                              //alert($(this).attr('id'));alert(selector);
                              if ($(this).attr('id') == selector) {
                                   $(this).show(600);
                              }
                              else {
                                   $(this).hide(600);
                              }
                         });
		  });
    }






$(document).ready(function() {
    	/*
      	$('#utilitybar #q')
        .bind("click", function() {
          if (this.value == "Search Queen's...") { this.value=""; }
        });
    	*/
        
        
        $('#events').newsticker(8000);	
     
       
    	 $('#gallery a').lightBox(); 
        
    	
	

		init();
        
        
    });
    
  
    
