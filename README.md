S3 Explorer
===============

A browser for Amazon S3 written in PHP.

## Getting Started

1. Clone this repository

        git clone https://github.com/thalesfp/s3-explorer-php.git

2. Run composer to install the dependencies

        composer install

3. Set your access key and secret key in config.ini
4. Optionally set a specific bucket in config.ini to disable the bucket selection field and list only objects from this bucket

Example of config.ini:
        
        access_key = (your access key)
        secret_key = (your secret key)
        bucket = my_bucket

## License

s3-explorer-php is released under the [MIT License](http://www.opensource.org/licenses/MIT).

The MIT License (MIT)

Copyright (c) 2014 Thales Pereira

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
