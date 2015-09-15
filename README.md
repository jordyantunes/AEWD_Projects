# AEWD Project
## Description

So this is basically a PHP framework that I'll be using in my Advanced Enterprise Web Development class. Since we are going to put all the assignments in the same folder and have the same structure, I thought I could make this proccess a bit easier.

## Some features :

### Easy project creation : 
- You just need to enter a name and a new project will be automatically created for you. That includes the PHP, SCSS and CSS files.
- If you don't want to use this tool, it's fine! You can use the Page.php template file in Templates folder. Just copy it to the Assignments folder and rename it, now you have a new project! 
- The menu will be updated with a new link everytime you create a new file in Asssignments folder. You don't ven have to follow the template file for that (see Hello World project for an example)

### Easy project deletion :
- Just go to the Home page and select the projects you want to delete. A confirmation message will be shown just to make sure that's what you want to do. And that's it!
- If you really wanna delete the project yourself just don't forget that it's made of a few files, not just the PHP in Assignments folder.

### Easy templating :
- The template was created so that every assignment would have a similar appearence without much work.
- Some useful functions are available for you, they can help you with things like getting an array of all the files in a folder or checking if a file already exists.
- Some global variables are defined in the environment, they are very useful if you want to have a better control over your assignments' look or behavior.
      
### Other Features :
- Multi-language support. To add support for a new language, add a language file in XML to the Languages folder. Follow the this structure :

```XML
<Pages>
	<Page_Name>
		<Page_Title>
			This is your content
		</Page_Title>
	</Page_Name>
</Pages> 	  
```
 - To display the contents make sure the language is selected as default and follow the example :
 
 ```php
<h1>
 	<?php echo $data->Page_Name->Page_Title; ?>
</h1>
```

### Global Variables :

As mentioned above, there are a few global variables that you may want to use to customize a page or include files. Here is a list of them:

 - `$is_home` > `boolean` - if set to true, indicates that the page is on the root directory (i.e. not in Assignments or Functions folder).
 - `$base_path` > `String` - based on `$is_home` variable. Is either "../" or "./" . Use it at the beginning of paths when you need to include or load any file.
 - `$title` > `string` - title of the page
 - `$custom_css_files` > `String Array` - this variable is automatically created and set when you create a new project in the Home page. It contains all the custom CSS files that a page may use.
 - `$custom_css_internal` > `String` - write all the internal CSS your page will have. You probably won't need to use this one. 
 - `$data` - `Object` > This one stores all the text in the Languages folder for that specific page.
 - `$body_class` - `String` > if you need to add class definitions to your `<body>` tag in HTML, just write them to this variable.