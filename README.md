VIBE Living Style Guide
==============================

![Screenshot](http://brettjankord.com/projects/style-guide-boilerplate/style-guide-boilerplate-v3.0.0.jpg)

### Create custom patterns
To create custom patterns like buttons, breadcrumbs, alert messages, etc., create a new .html file and add your HTML markup into the file.

Save the file as `pattern-name.html` into the `markup/patterns` directory inside of your `style-guide` directory.

You should now be able to see the new patterns at `yoursite.com/style-guide/`

### Create personalized documentation
You can use markdown or html to create personalized documentation for your examples. Create a new .md or .html file and name it whatever your markup snippet file is named.

Save the file as `markup-name.md` or `markup-name.html` into the `doc/base` or `doc/patterns` directory inside of your `style-guide` directory.

For example, if you want to create doc for `markup/patterns/breadcrumbs.html`, create a file called `breadcrumbs.md` or `breadcrumbs.html` and save it into `doc/patterns`.

You should now be able to see the new doc at `yoursite.com/style-guide/`

## Running the app
You can run the application with PHP's built in web server. Simply run the following command:

`php -S localhost:8000`

Now, browse to [http://localhost:8000](http://localhost:8000) to see the website.

## Generating static HTML style guide
You can generate a static index.html version of style guide boilerplate by running the following command:

`php index.php > index.html`