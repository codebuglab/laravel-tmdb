# ⚡⚡⚡ Laravel Tmdb

Simple integration with TMDB ( The Movie Database ) API to retrieve their data.

![Laravel media removable](logo.png)

## Table of contents
- [⚡⚡⚡ Laravel Tmdb](#-laravel-tmdb)
  - [Table of contents](#table-of-contents)
  - [Setup](#setup)
    - [Installation](#installation)
    - [Publish](#publish)
  - [Instructions](#instructions)
    - [Certifications](#certifications)
      - [Get Movie Certifications](#get-movie-certifications)
      - [Get TV Certifications](#get-tv-certifications)
    - [Changes](#changes)
      - [Get Movie Change List](#get-movie-change-list)
      - [Get TV Change List](#get-tv-change-list)
      - [Get Person Change List](#get-person-change-list)
    - [Collections](#collections)
      - [Get Details](#get-details)
      - [Get Images](#get-images)
      - [Get Transactions](#get-transactions)
    - [Companies](#companies)
      - [Get Details](#get-details-1)
      - [Get Alternative Names](#get-alternative-names)
      - [Get Images](#get-images-1)
    - [Configuration](#configuration)
      - [Get API Configuration](#get-api-configuration)
      - [Get Countries](#get-countries)
      - [Get Jobs](#get-jobs)
      - [Get Languages](#get-languages)
      - [Get Primary Translations](#get-primary-translations)
      - [Get Timezones](#get-timezones)
    - [Credits](#credits)
      - [Get Details](#get-details-2)
    - [Discover](#discover)
      - [Movie Discover](#movie-discover)
      - [TV Discover](#tv-discover)
    - [Genres](#genres)
      - [Get Movie List](#get-movie-list)
      - [Get TV List](#get-tv-list)
    - [Lists](#lists)
      - [Get Details](#get-details-3)
      - [Check Item Status](#check-item-status)
    - [Movies](#movies)
      - [Get Details](#get-details-4)
      - [Get Alternative Titles](#get-alternative-titles)
      - [Get Changes](#get-changes)
      - [Get Credits](#get-credits)
      - [Get External IDs](#get-external-ids)
      - [Get Images](#get-images-2)
      - [Get Keywords](#get-keywords)
      - [Get Lists](#get-lists)
      - [Get Recommendations](#get-recommendations)
      - [Get Release Dates](#get-release-dates)
      - [Get Reviews](#get-reviews)
      - [Get Similar Movies](#get-similar-movies)
      - [Get Translations](#get-translations)
      - [Get Videos](#get-videos)
      - [Get Watch Provider](#get-watch-provider)
      - [Get Latest](#get-latest)
      - [Get Now Playing](#get-now-playing)
      - [Get Popular](#get-popular)
      - [Get Top Rated](#get-top-rated)
      - [Get Upcoming](#get-upcoming)
    - [Networks](#networks)
      - [Get Details](#get-details-5)
      - [Get Alternative Names](#get-alternative-names-1)
      - [Get Images](#get-images-3)
    - [Trending](#trending)
      - [Get Trending](#get-trending)
    - [People](#people)
      - [Get Details](#get-details-6)
      - [Get Changes](#get-changes-1)
      - [Get Movie Credits](#get-movie-credits)
      - [Get TV Credits](#get-tv-credits)
      - [Get Combined Credits](#get-combined-credits)
      - [Get External IDs](#get-external-ids-1)
      - [Get Images](#get-images-4)
      - [Get Tagged Images](#get-tagged-images)
      - [Get Translations](#get-translations-1)
      - [Get Latest](#get-latest-1)
      - [Get Popular](#get-popular-1)
      - [Get Watch Providers](#get-watch-providers)
    - [Reviews](#reviews)
      - [Get Details](#get-details-7)
    - [Search](#search)
      - [Search Companies](#search-companies)
      - [Search Collections](#search-collections)
      - [Search Keywords](#search-keywords)
      - [Search Movies](#search-movies)
      - [multi Search](#multi-search)
      - [Search People](#search-people)
      - [Search TV Show](#search-tv-show)
    - [TV](#tv)
      - [Get Details](#get-details-8)
      - [Get Aggregate Credits](#get-aggregate-credits)
      - [Get Alternative Names](#get-alternative-names-2)
      - [Get Changes](#get-changes-2)
      - [Get Content Ratings](#get-content-ratings)
      - [Get Credits](#get-credits-1)
      - [Get Episode Groups](#get-episode-groups)
      - [Get External IDs](#get-external-ids-2)
      - [Get Images](#get-images-5)
      - [Get Keywords](#get-keywords-1)
      - [Get Recommendations](#get-recommendations-1)
      - [Get Reviews](#get-reviews-1)
      - [Get Screened Theatrically](#get-screened-theatrically)
      - [Get Similar TV Shows](#get-similar-tv-shows)
      - [Get Translations](#get-translations-2)
      - [Get Videos](#get-videos-1)
      - [Get latest](#get-latest-2)
      - [Get TV Airing Today](#get-tv-airing-today)
      - [Get On The Air](#get-on-the-air)
      - [Get Popular](#get-popular-2)
      - [Get Top Rated](#get-top-rated-1)
    - [TV Seasons](#tv-seasons)
      - [Get Details](#get-details-9)
      - [Get Aggregate Credits](#get-aggregate-credits-1)
      - [Get Changes](#get-changes-3)
      - [Get Credits](#get-credits-2)
      - [Get External IDs](#get-external-ids-3)
      - [Get Images](#get-images-6)
      - [Get Transactions](#get-transactions-1)
      - [Get Videos](#get-videos-2)
    - [TV Episode](#tv-episode)
      - [Get Details](#get-details-10)
      - [Get Changes](#get-changes-4)
      - [Get Credits](#get-credits-3)
      - [Get External IDs](#get-external-ids-4)
      - [Get Images](#get-images-7)
      - [Get Transactions](#get-transactions-2)
      - [Get Videos](#get-videos-3)
    - [Watch Providers](#watch-providers)
      - [Get Available Regions](#get-available-regions)
      - [Get Movie Providers](#get-movie-providers)
      - [Get TV Providers](#get-tv-providers)
  - [Options](#options)
    - [Page](#page)
    - [Append To Response](#append-to-response)
    - [Query](#query)
  - [Testing](#testing)
  - [License](#license)
## Setup
### Installation

To install this package through composer run the following command in the terminal

```bash
composer require codebuglab/laravel-tmdb
```
### Publish
You have to publish config file with this artisan command:
```bash
php artisan vendor:publish --provider="CodeBugLab\Tmdb\TmdbServiceProvider"
```
- File `tmdb.php` will be publish in `config` folder after that.
- Then you have to put your tmdb api key in your `env` file like this `TMDB_API_KEY=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx`.
- If the returned data from the API should be in another language, set the TMDB_LANGUAGE key in your `env`, eg. like this: `TMDB_LANGUAGE=da-DK`.

## Instructions
- You can use tmdb api and get information your want, first take a quick look at [official api page](https://developers.themoviedb.org/3/getting-started).
- For all next API requests you have to use Tmdb facade 
```php
use CodeBugLab\Tmdb\Facades\Tmdb;
```
- Every request have it's own information link, you can know required parameters, returned array, different type of responses and optional query string and we take about this in [options](#options) section




### Certifications
#### Get Movie Certifications
```php
$tmdb = Tmdb::certifications()->movieCertifications()->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/certifications/get-movie-certifications).
#### Get TV Certifications
```php
$tmdb = Tmdb::certifications()->tvCertifications()->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/certifications/get-tv-certifications).




### Changes
#### Get Movie Change List
```php
$tmdb = Tmdb::changes()->movieChangeList()->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/changes/get-movie-change-list).
#### Get TV Change List
```php
$tmdb = Tmdb::changes()->tvChangeList()->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/changes/get-tv-change-list).
#### Get Person Change List
```php
$tmdb = Tmdb::changes()->personChangeList()->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/changes/get-person-change-list).




### Collections
#### Get Details
```php
$tmdb = Tmdb::collections()->details($collectionId)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/collections/get-collection-details).
#### Get Images
```php
$tmdb = Tmdb::collections()->images($collectionId)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/collections/get-collection-images).
#### Get Transactions
```php
$tmdb = Tmdb::collections()->transactions($collectionId)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/collections/get-collection-translations).




### Companies
#### Get Details
```php
$tmdb = Tmdb::companies()->details($collectionId)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/companies/get-company-details).
#### Get Alternative Names
```php
$tmdb = Tmdb::companies()->alternativeNames($collectionId)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/companies/get-company-alternative-names).
#### Get Images
```php
$tmdb = Tmdb::companies()->images($collectionId)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/companies/get-company-images).




### Configuration
#### Get API Configuration
```php
$tmdb = Tmdb::configuration()->apiConfiguration()->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/configuration/get-api-configuration).
#### Get Countries
```php
$tmdb = Tmdb::configuration()->countries()->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/configuration/get-countries).
#### Get Jobs
```php
$tmdb = Tmdb::configuration()->jobs()->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/configuration/get-jobs).
#### Get Languages
```php
$tmdb = Tmdb::configuration()->languages()->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/configuration/get-languages).
#### Get Primary Translations
```php
$tmdb = Tmdb::configuration()->primaryTranslations()->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/configuration/get-primary-translations).
#### Get Timezones
```php
$tmdb = Tmdb::configuration()->timezones()->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/configuration/get-timezones).




### Credits
#### Get Details
```php
$tmdb = Tmdb::credits()->details($creditId)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/configuration/get-credit-details).




### Discover
#### Movie Discover
```php
$tmdb = Tmdb::discover()->movieDiscover()->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/discover/movie-discover).
#### TV Discover
```php
$tmdb = Tmdb::discover()->tvDiscover()->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/discover/tv-discover).




### Genres
#### Get Movie List
```php
$tmdb = Tmdb::genres()->movieList()->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/genres/get-movie-list).
#### Get TV List
```php
$tmdb = Tmdb::genres()->tvList()->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/genres/get-tv-list).




### Lists
#### Get Details
```php
$tmdb = Tmdb::lists()->details($listId)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/lists/get-list-details).
#### Check Item Status
```php
$tmdb = Tmdb::lists()->itemStatus($listId)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/lists/check-item-status).




### Movies
#### Get Details
```php
$tmdb = Tmdb::movies()->details($movieId)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/movies/get-movie-details).
#### Get Alternative Titles
```php
$tmdb = Tmdb::movies()->alternativeTitles($movieId)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/movies/get-movie-alternative-titles).
#### Get Changes
```php
$tmdb = Tmdb::movies()->changes($movieId)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/movies/get-movie-changes).
#### Get Credits
```php
$tmdb = Tmdb::movies()->credits($movieId)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/movies/get-movie-credits).
#### Get External IDs
```php
$tmdb = Tmdb::movies()->externalIds($movieId)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/movies/get-movie-external-ids).
#### Get Images
```php
$tmdb = Tmdb::movies()->images($movieId)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/movies/get-movie-images).
#### Get Keywords
```php
$tmdb = Tmdb::movies()->keywords($movieId)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/movies/get-movie-keywords).
#### Get Lists
```php
$tmdb = Tmdb::movies()->lists($movieId)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/movies/get-movie-lists).
#### Get Recommendations
```php
$tmdb = Tmdb::movies()->recommendations($movieId)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/movies/get-movie-recommendations).
#### Get Release Dates
```php
$tmdb = Tmdb::movies()->releaseDates($movieId)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/movies/get-movie-release-dates).
#### Get Reviews
```php
$tmdb = Tmdb::movies()->reviews($movieId)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/movies/get-movie-reviews).
#### Get Similar Movies
```php
$tmdb = Tmdb::movies()->similar($movieId)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/movies/get-similar-movies).
#### Get Translations
```php
$tmdb = Tmdb::movies()->translations($movieId)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/movies/get-movie-translations).
#### Get Videos
```php
$tmdb = Tmdb::movies()->videos($movieId)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/movies/get-movie-videos).
#### Get Watch Provider
```php
$tmdb = Tmdb::movies()->watchProviders($movieId)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/movies/get-movie-watch-providers).
#### Get Latest
```php
$tmdb = Tmdb::movies()->latest()->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/movies/get-movie-latest).
#### Get Now Playing
```php
$tmdb = Tmdb::movies()->nowPlaying()->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/movies/get-now-playing).
#### Get Popular
```php
$tmdb = Tmdb::movies()->popular()->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/movies/get-popular-movies).
#### Get Top Rated
```php
$tmdb = Tmdb::movies()->topRated()->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/movies/get-top-rated-movies).

#### Get Upcoming
```php
$tmdb = Tmdb::movies()->upcoming()->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/movies/get-upcoming).




### Networks
#### Get Details
```php
$tmdb = Tmdb::networks()->details($networkId)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/networks/get-network-details).
#### Get Alternative Names
```php
$tmdb = Tmdb::networks()->alternativeNames($networkId)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/networks/get-network-alternative-names).
#### Get Images
```php
$tmdb = Tmdb::networks()->images($networkId)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/networks/get-network-images).




### Trending
#### Get Trending
```php
$tmdb = Tmdb::trending()->trending($mediaType, $timeWindow)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/trending/get-trending).




### People
#### Get Details
```php
$tmdb = Tmdb::people()->details($personId)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/people/get-person-details).
#### Get Changes
```php
$tmdb = Tmdb::people()->changes($personId)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/people/get-person-changes).
#### Get Movie Credits
```php
$tmdb = Tmdb::people()->movieCredits($personId)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/people/get-person-movie-credits).
#### Get TV Credits
```php
$tmdb = Tmdb::people()->tvCredits($personId)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/people/get-person-tv-credits).
#### Get Combined Credits
```php
$tmdb = Tmdb::people()->combinedCredits($personId)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/people/get-person-combined-credits).
#### Get External IDs
```php
$tmdb = Tmdb::people()->externalIds($personId)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/people/get-person-external-ids).
#### Get Images
```php
$tmdb = Tmdb::people()->images($personId)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/people/get-person-images).
#### Get Tagged Images
```php
$tmdb = Tmdb::people()->taggedImages($personId)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/people/get-tagged-images).
#### Get Translations
```php
$tmdb = Tmdb::people()->translations($personId)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/people/get-person-translations).
#### Get Latest
```php
$tmdb = Tmdb::people()->latest()->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/people/get-latest-person).
#### Get Popular
```php
$tmdb = Tmdb::people()->popular()->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/people/get-popular-people).
#### Get Watch Providers
```php
$tmdb = Tmdb::people()->popular()->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/people/get-popular-people).



### Reviews
#### Get Details
```php
$tmdb = Tmdb::reviews()->details($reviewId)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/people/get-reviews-details).




### Search
- Query option is required for this query and you put the search parameter instead of `$query` variable.
- For more [Information](#query)
#### Search Companies
```php
$tmdb = Tmdb::search()->companies()->query($query)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/search/search-companies).
#### Search Collections
```php
$tmdb = Tmdb::search()->collections()->query($query)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/search/search-collections).
#### Search Keywords
```php
$tmdb = Tmdb::search()->keywords()->query($query)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/search/search-keywords).
#### Search Movies
```php
$tmdb = Tmdb::search()->movies()->query($query)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/search/search-movies).
#### multi Search
```php
$tmdb = Tmdb::search()->multi()->query($query)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/search/multi-search).
#### Search People
```php
$tmdb = Tmdb::search()->people()->query($query)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/search/search-people).
#### Search TV Show
```php
$tmdb = Tmdb::search()->tvShows()->query($query)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/search/search-tv-shows).




### TV
#### Get Details
```php
$tmdb = Tmdb::tv()->details($tvId)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/tv/get-tv-translations).
#### Get Aggregate Credits
```php
$tmdb = Tmdb::tv()->aggregateCredits($tvId)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/tv/get-tv-aggregate-credits).
#### Get Alternative Names
```php
$tmdb = Tmdb::tv()->alternativeTitles($tvId)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/tv/get-tv-alternative-titles).
#### Get Changes
```php
$tmdb = Tmdb::tv()->changes($tvId)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/tv/get-tv-changes).
#### Get Content Ratings
```php
$tmdb = Tmdb::tv()->contentRatings($tvId)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/tv/get-tv-content-ratings).
#### Get Credits
```php
$tmdb = Tmdb::tv()->credits($tvId)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/tv/get-tv-credits).
#### Get Episode Groups
```php
$tmdb = Tmdb::tv()->episodeGroups($tvId)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/tv/get-tv-episode-groups).
#### Get External IDs
```php
$tmdb = Tmdb::tv()->externalIds($tvId)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/tv/get-tv-external-ids).

#### Get Images
```php
$tmdb = Tmdb::tv()->images($tvId)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/tv/get-tv-images).
#### Get Keywords
```php
$tmdb = Tmdb::tv()->keywords($tvId)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/tv/get-tv-keywords).
#### Get Recommendations
```php
$tmdb = Tmdb::tv()->recommendations($tvId)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/tv/get-tv-recommendations).
#### Get Reviews
```php
$tmdb = Tmdb::tv()->reviews($tvId)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/tv/get-tv-reviews).
#### Get Screened Theatrically
```php
$tmdb = Tmdb::tv()->screenedTheatrically($tvId)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/tv/get-screened-theatrically).

#### Get Similar TV Shows
```php
$tmdb = Tmdb::tv()->similar($tvId)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/tv/get-similar-tv-shows).
#### Get Translations
```php
$tmdb = Tmdb::tv()->translations($tvId)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/tv/get-tv-translations).

#### Get Videos
```php
$tmdb = Tmdb::tv()->watchProviders($tvId)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/tv/get-tv-watch-providers).
#### Get latest
```php
$tmdb = Tmdb::tv()->latest()->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/tv/get-latest-tv).
#### Get TV Airing Today
```php
$tmdb = Tmdb::tv()->airingToday()->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/tv/get-tv-airing-today).
#### Get On The Air
```php
$tmdb = Tmdb::tv()->onTheAir()->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/tv/get-tv-on-the-air).
#### Get Popular
```php
$tmdb = Tmdb::tv()->popular()->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/tv/get-popular-tv-shows).
#### Get Top Rated
```php
$tmdb = Tmdb::tv()->topRated()->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/tv/get-top-rated-tv).




### TV Seasons
#### Get Details
```php
$tmdb = Tmdb::tvSeasons()->details($tvId, $seasonNumber)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/tv-seasons/get-tv-season-details).
#### Get Aggregate Credits
```php
$tmdb = Tmdb::tvSeasons()->aggregateCredits($tvId, $seasonNumber)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/tv-seasons/get-tv-season-aggregate-credits).
#### Get Changes
```php
$tmdb = Tmdb::tvSeasons()->changes($tvId, $seasonNumber)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/tv-seasons/get-tv-season-changes).
#### Get Credits
```php
$tmdb = Tmdb::tvSeasons()->credits($tvId, $seasonNumber)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/tv-seasons/get-tv-season-credits).
#### Get External IDs
```php
$tmdb = Tmdb::tvSeasons()->externalIds($tvId, $seasonNumber)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/tv-seasons/get-tv-season-external-ids).
#### Get Images
```php
$tmdb = Tmdb::tvSeasons()->images($tvId, $seasonNumber)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/tv-seasons/get-tv-season-images).
#### Get Transactions
```php
$tmdb = Tmdb::tvSeasons()->transactions($tvId, $seasonNumber)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/tv-seasons/get-tv-season-transactions).
#### Get Videos
```php
$tmdb = Tmdb::tvSeasons()->videos($tvId, $seasonNumber)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/tv-seasons/get-tv-season-videos).




### TV Episode
#### Get Details
```php
$tmdb = Tmdb::tvEpisodes()->details($tvId, $seasonNumber, $episodeNumber)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/tv-episodes/get-tv-episode-details).
#### Get Changes
```php
$tmdb = Tmdb::tvEpisodes()->changes($tvId, $seasonNumber, $episodeNumber)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/tv-episodes/get-tv-episode-changes).
#### Get Credits
```php
$tmdb = Tmdb::tvEpisodes()->credits($episodeNumber)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/tv-episodes/get-tv-episode-credits).
#### Get External IDs
```php
$tmdb = Tmdb::tvEpisodes()->externalIds($tvId, $seasonNumber, $episodeNumber)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/tv-episodes/get-tv-episode-external-ids).
#### Get Images
```php
$tmdb = Tmdb::tvEpisodes()->images($tvId, $seasonNumber, $episodeNumber)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/tv-episodes/get-tv-episode-images).
#### Get Transactions
```php
$tmdb = Tmdb::tvEpisodes()->transactions($tvId, $seasonNumber, $episodeNumber)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/tv-episodes/get-tv-episode-transactions).
#### Get Videos
```php
$tmdb = Tmdb::tvEpisodes()->videos($tvId, $seasonNumber, $episodeNumber)->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/tv-episodes/get-tv-episode-videos).




### Watch Providers
#### Get Available Regions
```php
$tmdb = Tmdb::watchProviders()->availableRegions()->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/watch-providers/get-available-regions).
#### Get Movie Providers
```php
$tmdb = Tmdb::watchProviders()->movieProviders()->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/watch-providers/get-movie-providers).
#### Get TV Providers
```php
$tmdb = Tmdb::watchProviders()->tvProviders()->get(); // return array
```
- For more [information](https://developers.themoviedb.org/3/watch-providers/get-tv-providers).




## Options
- tmdb api provides some options in some requests to provide more flexibility during request, and we add some of them here.
- You will find supported options with explanation of every option we have in **Query String** section in every information page Like the one [here](https://developers.themoviedb.org/3/movies/get-popular-movies) and as you can see languages, page, and region supported by tmdb.
![options](options.png)
- We don't support all options yet but will add more by time.
- You have to read the of tmdb carefully to avoid using unsupported option.
- Here is some options which supported in this packages with explanation.


### Page
- If you want to get most popular movies from tmdb api you will get only 20 records will you can get about 800 record so instead or returning the whole records they give you only first 20 records and you can get the next 20 by using page option.
- So instead of using the request like that
```php
$tmdb = Tmdb::movies()->popular()->get(); // return array
```
and that will return the first page, you can specify the page you wanted to get for example if you want to get second page you will write the request like that.
```php
$tmdb = Tmdb::movies()->popular()->page(2)->get(); // return array
```


### Append To Response
- The option equivalent of query parameter append_to_response, for more [Information](https://developers.themoviedb.org/3/getting-started/append-to-response)
- This option can take multiple parameters like **videos, posters and casts**.
- For example you can append more information about movie casts buy using this query.
```php
$tmdb = Tmdb::movies()->details($movieId)->appendToResponse(['casts'])->get(); // return array
```


### Query
- This option used when you want to use tmdb search.
- For example if you want to search for tv show you have to get it by this way.
```php
$tmdb = Tmdb::search()->tvShows()->query($query)->get();
```
where `$query` is a string you want to search for and it will be a tv show in this example.




## Testing

To run test use this command `vendor/bin/phpunit`

## License

This package is a free software distributed under the terms of the MIT license.
