document.getElementById('openSidebar').onclick = function(e)
{
	e.stopPropagation();
	document.body.classList.add('sidebar-open');
}
document.getElementById('overlay').onclick = function()
{
	document.body.classList.remove('sidebar-open');
}