# Linkly (link shortening service)

The working application is deployed at https://links.maxoffsky.com. Feel free to register!

This is a small application that satisfies the requirements of the challenge:

"Create a web application that takes a URL as an input and generates a “short­url” for it (similar
to bitly.com). Output URL should be short, readable and able to be easily copy­pasted by users."

Constraints:
1. URL parameters should be considered part of the URL uniqueness test.
2. A generated short URL should expire if not accessed for 14 or more days
3. Treat this as a real software; eg: persist data in an actual data store, handle error cases
etc




Desired set of features:

New User:
* Insert or paste a URL
* Retrieve a shortened unique URL
* Copy the URL into clipboard
* Share the URL via social networks / email
* See an option to upgrade account

Experienced User:

in addition to the New User functionality:
* Register and Login
* Logout
* See a list of all links I created
* See number of times the links have been clicked by others
* Be able to customize the link / s with a new name that is unique throughout the platform
* Set notification threshold and methods (email, SMS, messenger, etc)
* See an option to upgrade account to business
* Delete account

Business:
* Set custom domain and receive instructions on set up
* See a dashboard of all links shared by the business users
* Create groups of users (marketing, business, HR, etc)
* Be able to tag shortened links with tags unique to the business

Data aggregators:
* Receive batches of data every N minutes

Product / Management:
* See what categories of links are being shared the most
* Check numbers of users / links shared

Product / Technology:
* See status of all systems / APIs
* Check logs of errors / access violations / permissions / etc
* Dig deep into timing of various events 

Product / Research:
* Collect surveys and other user feedback

Product / Business:
* See revenue reports
* See top sharers


From Bitly:
"When you shorten a link with Bitly, you are redirecting a click from Bitly to the destination URL. We issue a "301 redirect": a technique for making a webpage available under many URLs. A 301 redirect is the most efficient and search engine-friendly method for webpage redirection. Because Bitly doesn’t re-use or modify links, we consider our redirects to be permanent."