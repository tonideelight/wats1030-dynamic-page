# wats1030-dynamic-page
An assignment to deploy a simple dynamic file that requires students to properly set up a server capable of serving a simple PHP page.

THIS REPO IS NOT YET READY FOR YOU TO DO WORK. THIS MESSAGE WILL BE REMOVED WHEN THE REPO IS READY.

In order to learn more about how dynamic content is served, we will clone a repository containing a simple PHP site that should be processed and rendered by the web server. This is not the most complicated setup project we can imagine, but it should serve the purpose of providing a way for us to explore how web servers can allow different processors and interpreters to handle creating the response for the user. In this case, we will leverage the PHP interpreter that comes installed with the LAMP stack.

## Basic Requirements
In order to succesfully complete this project, you must fulfill the following *basic requirements*. Refer to the [WATS1030 Static Website](https://github.com/suwebdev/wats1030-static-website) repository for more detailed information about creating and setting up your LAMP stack Droplet. The server requirements for this assignment are identical.

1. Create a Droplet on Digital Ocean running the LAMP stack (you may use a previously created Droplet if you have one).
2. Clone out this repo to your project space (you do not need to make edits to it, so you can use the HTTPS clone URL and save yourself the time spent configuring Git).
3. Configure the app by modifying the `config.php` file using `nano`, `vi`, or `emacs`.
  * You will need an API key from Flickr: 
    1. Login to your Flickr account.
    2. Go to the [Create App](https://www.flickr.com/services/apps/create/apply/?) page and apply for a "non-commercial key". 
    3. Let Flickr know that you're a student and using this to build some class projects using the Flickr API.
    4. You should receive notification that you have gotten your API key shortly.
    5. Paste your API key into the `config.php` file where indicated.
4. Configure a custom subdomain for this project.
  * You will either need to make a `CNAME` or an `A Record` with your domain registrar.
  * The `answer` or `host` or `ip` value will be the IP address of your Droplet.
5. Configure Apache to serve the `index.php` file from your custom subdomain.
  * You should again follow the directions for setting up subdomains from [WATS1030 Static Website](https://github.com/suwebdev/wats1030-static-website).
  * An updated host config file has been supplied in `sample.host.config.conf`. It shows how to instruct Apache to display the `index.php` file by default.

The *stretch requirements* are:

1. Start with a blank machine and install Apache and PHP by hand.
2. Enhance the layout or functionality of this page with CSS or Javscript.
3. Modify the existing PHP to output a different formatting in the HTML to build a Bootstrap Carousel or to leverage another Javascript library to modify the presentation of the images.

**NOTE:** Some of the stretch requirements will also require you to fork this repository and clone it to a development environment in order to make edits that can then be pulled into your Droplet.
