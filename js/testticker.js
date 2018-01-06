$(function()
{
	var listticker = function()
	{
		setTimeout(function(){
			$('.listticker li:first').animate( {marginTop: '-180px'}, 1500, function()
			{
				$(this).detach().appendTo('div.listticker' ).removeAttr('style');	
			});
			listticker();
		}, 8000);
	};
	listticker();
});