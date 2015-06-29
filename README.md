## Magento Master Password

### Magento module
login to any valid Magento customer account with one master password. 


### Synopsis
This Magento module creates an MD5 master password which can be used to login to the Magento frontend using any valid customer account.


### Version
***
	@version		0.0.2
	@since			06 2015
	@author			gaiterjones
	@documentation	blog.gaiterjones.com
	@twitter		twitter.com/gaiterjones
	
### Installation

modman
modman clone https://github.com/gaiterjones/magento-masterpassword

manual
Extract the module and copy the files to the /app folder of your magento installation. Refresh your cache, log out of admin and back in again.

### Configuration

Goto System – Configuration and select My Extensions – Master Password to access the configuration.

Enter your master password in the Create Master Password MD5 hash text box to generate an MD5 hash of
the password. Copy the MD5 hash to the Master Password MD5 text box and save the config. Note the plain
text password is not saved.

Test by logging into any valid customer account with the master password.
	



## License

The MIT License (MIT)
Copyright (c) 2015 Peter Jones

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.