$(function(){
	$('#my-image-1').imageFitWindow({
		onFit:function(){
			console.log('fit')
		},
		onMaxed: function(){
			console.log('maxed')
		},
		onUnfit: function(){
			console.log('unfit')
		}
	});

	$('#slider').imageFitWindow({
		container: $('.container_b')
	});	
})