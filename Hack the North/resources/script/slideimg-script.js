
		 $(document).ready(function(){
			 var curimg=0;
			 var lastimg=0;
			 $(".pager-item").on("click", function(){
				 var imgId = parseInt($(this).attr("data-btnid"));//get the number of button clicked
					 var btnId = $(this).attr("data-btnid");//get btnId
					 if (btnId === "button-next"){
						 imgId = curimg+1;
					 }
					 else if (btnId=== "button-prev"){
						 imgId = curimg-1;
					 }
				 if(imgId===-1){
					 imgId=4;//change as amount of pic change
				 }//4 to 1
				 if(imgId===5){
					 imgId=0;//change as amount of pic change
				 }//0 to 4
				 if(imgId===curimg){
					 return;
				 }//what to do if click same location
				 var a,b;//variable for calculation
				 $("#img"+curimg).css('position','absolute');//change to get ready for transition
				 $("#img"+imgId).css('position','absolute');//change to get ready for transition
				 for(var i=0;i<=10;i++){
					 a=i/10;
					 b=1-a;
					 $("#img"+imgId).fadeTo(5,a);
					 $("#img"+curimg).fadeTo(5,b);
				 }//cool transition
				 lastimg=curimg;//set last img to cur img
				 $("#btn"+curimg).css('background-color', 'transparent');//change pager item color
				 $("#btn"+imgId).css('background-color', '#c1c1c1');//change pager item color
				 $(".pager-item").css('display', 'none');//refresh pageritem
				 $(".pager-item").css('display', 'inline' );//refresh pageritems
				 if(curimg===imgId){
					 return;
				 }
				 else if(lastimg===0 && imgId===4){
					 //move right
				 $("#imgtxt"+imgId).css({'opacity': '0', 'display': 'inline' ,left: '-=20px'}).animate({left: '+=20px', opacity: '1'});
				 $("#imgtxt"+lastimg).css('display','none');
				 }
				 else if(curimg<imgId || imgId===0 && lastimg===4){
					 //move left
				 $("#imgtxt"+imgId).css({'opacity': '0', 'display': 'inline' ,left: '+=20px'}).animate({left: '-=20px', opacity: '1'});
				 $("#imgtxt"+lastimg).css('display','none');
				 }
				 else if(curimg>imgId){
					 //move right
				 $("#imgtxt"+imgId).css({'opacity': '0', 'display': 'inline' ,left: '-=20px'}).animate({left: '+=20px', opacity: '1'});
				 $("#imgtxt"+lastimg).css('display','none');
				 }
				 curimg=imgId;
			 });
			
		 });