# 4archive

> **Please use FoolFuuka/Asagi or Futabilly instead!** *The 4archive engine should not be used to archive 4chan, as it is not well tested, has minimal installation documentation, loses some metadata, and is quite fragile.*

This is the source code of the 4archive, heavily modified by Bloo of 4chanarchives.cu.cc to function with the old database and fix many major bugs.

This source code is only made public for the purpose of viewing the old 4archive database privately. 

4archive was a popular 4chan archiving service founded January 17, 2014. On May 7th, 9:15 PM, 4archive shut down due to personal decisions. At the time of shut down, 4archive 
stored 57,674 threads, 9,754,504 posts, and 3,235,393 images and gained over 26,000,000 page views, and 6,700,000 unique users.

# System
Utilizing selective archiving, users can choose what they want archived from 4chan. All images are stored away on Imgur and Imageshack servers due to storage costs.

The backend system is powered by [Lumen](http://lumen.laravel.com), a micro-framework created by [Laravel](http://laravel.com). Our backend database is MySQL 5.

## Initial Setup ##

> Please see `Bloo_SemiAFK-logs.txt` in this repository for more detailed information about how to install 4archive.

`php composer.phar install`

Make your own `.env` file, using `.env.example` as your base. If you don't know what you're doing, read the Lumen documentation.

`php artisan migrate`

To seed fake data into the threads and posts table, run `php artisan db:seed`

# Known issues
- Board lists is not supported.

# What this source comes with
- Automatic take down requests
- Full archiving process.
- Uploading images to Imgur/Imageshack
- Popular threads listing
- Latest threads listing

# What this source does not come with
- Automatic `view_cache` clearing
- Automatic e-mail notifications for takedown requests
- Donation page. The view is there but needs to be filled out with your own message. (donate.blade.php)
- Terms of service page. Again, the view is there, but you need to fill it out. (terms.blade.php)

## Schema Rollback

The database schema used by this engine has been mostly rolled back to the original 4archive database, though there are some differences (namely, an MD5 field and the restoration of chan_images_fname).

You can find the original SQL dumps [here](http://archive.org/details/4archive).

## Original shutdown message
 
>4archive.org started January 17, 2014 and has since become one of the most popular 4chan archives currently alive. Sadly, today, May 7, 2015, 4archive is shutting down all operations. Since it's arrival, 4archive stored 57,674 threads, 9,754,504 posts, and 3,235,393 images and gained over 26,000,000 page views, and 6,700,000 unique users. 4archive was also the only 4chan archiver that archived /b/.
>
>Today, I am releasing the trove of archived content for the public to archive themselves. These threads should not be lost because 4archive goes down, and I hope the records find a safe home. I will also, in the coming weeks, be releasing code for a new version of 4archive I was working on created in Lumen, a micro-framework in PHP created by the developers who made Laravel. Hopefully, someone can find it useful. I will have 4archive.org redirect to the repository when it is available.
>
>I'm sure a lot of people will want to know the reason why 4archive is going down. The reason 4archive is going down is because frankly I don't want to take care of it anymore. Honestly, I felt a bit of a disgust with what was being archived. I didn't feel good about hosting archived content that actually upset people. Not only that, but I had to pay $50 a month to the hosting provider to keep 4archive up and sometimes had to pay that out-of-pocket, and I don't have that much money :(. With that said, I welcome anyone to take the place of 4archive. Hopefully, the SQL dump can be a good start for you.

>If you plan on reviewing these dumps, try not to judge my column names :( These schemas were made a long time ago, and I've since learned my lesson. Also, I would really appreciate it if someone downloaded this and re-uploaded it somewhere else. 4archive.org will be 100% unavailable starting May 13, 2015. It'd be a shame if this archive was lost.

### But why didn't you release the old code??? ####
Because I didn't want to release code that I am not proud of. This code I am very happy with. It's easy to move from server to server, it's flexible, and it's core framework has great documentation. The original 4archive code was a custom framework I made a long time ago. I'd rather bury it.