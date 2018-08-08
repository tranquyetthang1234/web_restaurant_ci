
$(document).ready(function(){
	$(".thang").slideUp(5000);

	
		$('#check').hide();

		$(".checks").click(function(){
		 var statuss = this.checked ;
			if(statuss ==true){
				
			}else{
				
			}
		});
		$(".checksall").click(function(){
		 var status=this.checked;
				$(".checks").each(function(){this.checked=status;
					if(status ==true){
						$('#check').show();
					}else{
						$('#check').hide();
					}
			});
		});
		var status=this.checked;
		$(".checks").each(function(){this.checked=status;
					if(status ==true){
						alert(1);
					}else{
						$('#check').hide();
					}
			});
});

