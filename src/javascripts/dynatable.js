(function($){
 $.fn.dynatable = function(options) {
  var $table = $(this);
  var defaults = {
   zebra: 'false'
  };
  

    
  var tableid = $(this).attr('id');
  var options = $.extend(defaults, options);
  if (options.col1add !== undefined) $(this).attr('col1add',options.col1add);
  if (options.col2add !== undefined) $(this).attr('col2add',options.col2add);
  if (options.col3add !== undefined) $(this).attr('col3add',options.col3add);
  if (options.col4add !== undefined) $(this).attr('col5add',options.col4add);
  if (options.col5add !== undefined) $(this).attr('col6add',options.col5add);
  if (options.col6add !== undefined) $(this).attr('col7add',options.col6add);
  if (options.col7add !== undefined) $(this).attr('col8add',options.col7add);
  if (options.col8add !== undefined) $(this).attr('col9add',options.col8add);
  if (options.col9add !== undefined) $(this).attr('col9add',options.col9add);
  if (options.col10add !== undefined) $(this).attr('col10add',options.col10add);
  $(this).find('thead')
  	.find('td:first-child')
  	.prepend('<a href="javascript:add(\''+ tableid +'\',\''+ options.collapseurl +'\')"><img src="'+options.expandurl+'"></a>');
  
  var a=1;
	$('tbody', $table).each(function(){
		var $tbody = $(this);
		$('tr',$tbody).each(function(){
			var $tr = $(this);
			$tr.find('td:first-child')
				.prepend('<a id="row'+ a +'" href=\"javascript:collapse(\'row'+ a +'\')\"><img src="'+options.collapseurl+'"></a>');
			a++;
		});
	});
  
  
 };
 
})(jQuery);

function add(tableid,collapseurl,colarray){
	var rowcount = $('#'+tableid).find('tbody tr').length;
	rowcount++;
	var str = '<tr>';
	   str +=  '<td>'+ '<a id="row'+ rowcount +'" href=\"javascript:collapse(\'row'+ rowcount +'\')\"><img src="' + collapseurl + '"></a>' + '</td>';
	   if($('#'+tableid).attr('col1add')!== undefined) str +=  '<td>'+ $('#'+tableid).attr('col1add').replace('^^',rowcount) +'</td>';
	   if($('#'+tableid).attr('col2add')!== undefined) str +=  '<td>'+ $('#'+tableid).attr('col2add').replace('^^',rowcount) +'</td>';
	   if($('#'+tableid).attr('col3add')!== undefined) str +=  '<td>'+ $('#'+tableid).attr('col3add').replace('^^',rowcount) +'</td>';
	   if($('#'+tableid).attr('col4add')!== undefined) str +=  '<td>'+ $('#'+tableid).attr('col4add').replace('^^',rowcount) +'</td>';
	   if($('#'+tableid).attr('col5add')!== undefined) str +=  '<td>'+ $('#'+tableid).attr('col5add').replace('^^',rowcount) +'</td>';
	   if($('#'+tableid).attr('col6add')!== undefined) str +=  '<td>'+ $('#'+tableid).attr('col6add').replace('^^',rowcount) +'</td>';
	   if($('#'+tableid).attr('col7add')!== undefined) str +=  '<td>'+ $('#'+tableid).attr('col7add').replace('^^',rowcount) +'</td>';
	   if($('#'+tableid).attr('col8add')!== undefined) str +=  '<td>'+ $('#'+tableid).attr('col8add').replace('^^',rowcount) +'</td>';
	   if($('#'+tableid).attr('col9add')!== undefined) str +=  '<td>'+ $('#'+tableid).attr('col9add').replace('^^',rowcount) +'</td>';
	   if($('#'+tableid).attr('col10add')!== undefined) str +=  '<td>'+ $('#'+tableid).attr('col10add').replace('^^',rowcount) +'</td>';
	   str += '</tr>';
	
	$('#'+tableid).find('tbody').append(str);
}

function collapse(elemid){
	$('#'+elemid).closest("tr").remove();
}
