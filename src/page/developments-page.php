<?php
?>
	<script type="text/javascript" src="src/javascripts/dynatable.js"></script>
	   <div class="page-body developments-page">
  	    <div class="page-body-biography">
	  	  <p class='page-body-heading'>JQuery DynaTable</p>
	  	  This plugin is used to add/retrieve/delete/update records with ajax on any html table.
	  	  Apply this plugin to the id of your table and it will prepend an 'Add Row' button to the
	  	  first cell of the table head and a 'Delete Row' button with the first cell 
	  	  of each table row. <br/>Just add your ajax or form based submit and voila.<br/>
	  	  This plugin also allows ui effects to the table, for example add alternating row colors
	  	  (Zebra effect) and you can mention what to add in each cell when you add a new row.
	  	  <br/>
	  	  Here is an example of using this:
<!--	  	  <img src="src/images/JQueryDynaTable.jpg" />-->
	  	  <table class='dynaTestExample'>
	  	    <tr>
	  	      <td>
		  	  <table id="dynaTest">
		  	    <thead>
		  	      <tr>
		  	        <td>
		  	        </td>
		  	        <td>
		  	          Input Boxes
		  	        </td>
		  	        <td>
		  	          Select Lists
		  	        </td>	
		  	        <td>
		  	          Static Text
		  	        </td>		  	          	        
		  	      </tr>
		  	    </thead>
		  	    <tbody>
		  	      <tr>
		  	        <td></td>
		  	        <td><input name='<input type="text" name="col1[]" size=20>'/></td>
		  	        <td><select name="col2[]"><option>Option1</option><option>Option2</option></select></td>	
		  	        <td>1</td>  	        
		  	      </tr>
		  	      <tr>
		  	        <td></td>
		  	        <td><input type="text" name="col2[]" size=20></td>
		  	        <td><select name="col2[]"><option>Option1</option><option>Option2</option></select></td>	
		  	        <td>2</td>  
		  	      </tr>	  	      
		  	    </tbody>
		  	    <tfoot>
		  	      <tr>
		  	        <td colspan="4">
		  	          <input type="submit" value="Submit">
		  	        </td>
		  	      </tr>
		  	    </tfoot>
		  	  </table>
		  	  </td>
		  	  <td>
  <pre>
    $('#dynaTest').dynatable({
      zebra: '<i>true</i>',
      expandurl: '<i>src/images/expand.gif</i>',
      collapseurl: '<i>src/images/collapse.gif</i>',
      col1add: '<i>&lt;input type="text" name="col1[]" value="default" size=20&gt;</i>',
      col2add: '<i>&lt;select name="col2[]"&gt;
	      	&lt;option&gt;Option1&lt;/option&gt;
	      	&lt;option&gt;Option2&lt;/option&gt;
	      	&lt;/select&gt;</i>',
      col3add: 'Hello {Static Text Row#^^}'
    });
  </pre>
		  	  </td>
		  	</tr>
		  </table>
		  
  <a href='src/download/dynatable-1.0.0.zip'>Download this plugin here.</a>
  <p>
	Please visit my <a href="http://aliamanjalbani.wordpress.com" rel="external">blog</a> for my other developments.
  </p>
	  	  
	  	  <script type="text/javascript">
	  	    $('#dynaTest').dynatable({
	  	    	zebra: 'true',
	  	    	expandurl: 'src/images/expand.gif',
	  	    	collapseurl: 'src/images/collapse.gif',
	  	    	col1add: '<input type="text" name="col1[]" value="default" size=20>',
	  	    	col2add: '<select name="col2[]"><option>Option1</option><option>Option2</option></select>',
	  	    	col3add: 'Hello {Static Text Row#^^}'
	  	    });
	  	  </script>
  	    </div>
  	    <?php include('invisitext.html')?>
  	  </div>