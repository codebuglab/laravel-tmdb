<?php

namespace CodeBugLab\Tmdb\Tests\Mocks\Response;

trait PersonResponse
{
    public function mockGetDetailsResponse(): array
    {
        return json_decode('{
            "birthday": "1963-12-18",
            "known_for_department": "Acting",
            "deathday": null,
            "id": 287,
            "name": "Brad Pitt",
            "also_known_as": [
              "برد پیت",
              "Бред Питт",
              "Бред Пітт",
              "Buratto Pitto",
              "Брэд Питт",
              "畢·彼特",
              "ブラッド・ピット",
              "브래드 피트",
              "براد بيت",
              "แบรด พิตต์"
            ],
            "gender": 2,
            "biography": "William Bradley \"Brad\" Pitt (born December 18, 1963) is an American actor and film producer. Pitt has received two Academy Award nominations and four Golden Globe Award nominations, winning one. He has been described as one of the world is most attractive men, a label for which he has received substantial media attention. Pitt began his acting career with television guest appearances, including a role on the CBS prime-time soap opera Dallas in 1987. He later gained recognition as the cowboy hitchhiker who seduces Geena Davis is character in the 1991 road movie Thelma & Louise. Pitt is first leading roles in big-budget productions came with A River Runs Through It (1992) and Interview with the Vampire (1994). He was cast opposite Anthony Hopkins in the 1994 drama Legends of the Fall, which earned him his first Golden Globe nomination. In 1995 he gave critically acclaimed performances in the crime thriller Seven and the science fiction film 12 Monkeys, the latter securing him a Golden Globe Award for Best Supporting Actor and an Academy Award nomination.\n\nFour years later, in 1999, Pitt starred in the cult hit Fight Club. He then starred in the major international hit as Rusty Ryan in Ocean is Eleven (2001) and its sequels, Ocean is Twelve (2004) and Ocean is Thirteen (2007). His greatest commercial successes have been Troy (2004) and Mr. & Mrs. Smith (2005).\n\nPitt received his second Academy Award nomination for his title role performance in the 2008 film The Curious Case of Benjamin Button. Following a high-profile relationship with actress Gwyneth Paltrow, Pitt was married to actress Jennifer Aniston for five years. Pitt lives with actress Angelina Jolie in a relationship that has generated wide publicity. He and Jolie have six children—Maddox, Pax, Zahara, Shiloh, Knox, and Vivienne.\n\nSince beginning his relationship with Jolie, he has become increasingly involved in social issues both in the United States and internationally. Pitt owns a production company named Plan B Entertainment, whose productions include the 2007 Academy Award winning Best Picture, The Departed.",
            "popularity": 10.647,
            "place_of_birth": "Shawnee, Oklahoma, USA",
            "profile_path": "/kU3B75TyRiCgE270EyZnHjfivoq.jpg",
            "adult": false,
            "imdb_id": "nm0000093",
            "homepage": null
          }', true);
    }

    public function mockGetChangesResponse(): array
    {
        return json_decode('{
            "changes": [
              {
                "key": "images",
                "items": [
                  {
                    "id": "5696d98292514154c9000291",
                    "action": "deleted",
                    "time": "2016-01-13 23:10:58 UTC",
                    "original_value": {
                      "profile": {
                        "file_path": "/wywUfSkVggWhUnXE4qucoIe1EcA.jpg"
                      }
                    }
                  }
                ]
              }
            ]
          }', true);
    }

    public function mockGetMovieCreditsResponse(): array
    {
        return json_decode('{
            "cast": [
              {
                "character": "Tristan Ludlow",
                "credit_id": "52fe43c4c3a36847f806e20d",
                "release_date": "1994-12-16",
                "vote_count": 568,
                "video": false,
                "adult": false,
                "vote_average": 7.2,
                "title": "Legends of the Fall",
                "genre_ids": [
                  12,
                  18,
                  10749,
                  10752
                ],
                "original_language": "en",
                "original_title": "Legends of the Fall",
                "popularity": 2.356929,
                "id": 4476,
                "backdrop_path": "/jet7PQMY8aVzxBvkpG4P0eQI2n6.jpg",
                "overview": "An epic tale of three brothers and their father living in the remote wilderness of 1900s USA and how their lives are affected by nature, history, war, and love.",
                "poster_path": "/uh0sJcx3SLtclJSuKAXl6Tt6AV0.jpg"
              },
              {
                "character": "Jesse James",
                "credit_id": "52fe43c7c3a36847f806eed5",
                "release_date": "2007-09-02",
                "vote_count": 717,
                "video": false,
                "adult": false,
                "vote_average": 7,
                "title": "The Assassination of Jesse James by the Coward Robert Ford",
                "genre_ids": [
                  28,
                  18,
                  37
                ],
                "original_language": "en",
                "original_title": "The Assassination of Jesse James by the Coward Robert Ford",
                "popularity": 3.294203,
                "id": 4512,
                "backdrop_path": "/zAh7HC8Tk2D0q3VdMOP6boqNG9N.jpg",
                "overview": "Outlaw Jesse James is rumored be the fastest gun in the West. An eager recruit into James notorious gang, Robert Ford eventually grows jealous of the famed outlaw and, when Robert and his brother sense an opportunity to kill James, their murderous action elevates their target to near mythical status.",
                "poster_path": "/lSFYLoaL4eW7Q5VQ7SZQP4EHRCt.jpg"
              },
              {
                "character": "Early Grayce",
                "credit_id": "52fe43ce9251416c7501ef13",
                "release_date": "1993-09-01",
                "vote_count": 188,
                "video": false,
                "adult": false,
                "vote_average": 6.5,
                "title": "Kalifornia",
                "genre_ids": [
                  80,
                  53
                ],
                "original_language": "en",
                "original_title": "Kalifornia",
                "popularity": 1.72238,
                "id": 10909,
                "backdrop_path": "/ucfWS1l0mVHKOtgL8ew5Y10IZMM.jpg",
                "overview": "A journalist duo go on a tour of serial killer murder sites with two companions, unaware that one of them is a serial killer himself.",
                "poster_path": "/2mKtsNtQ2yMZPrBL1wXWzolvxaZ.jpg"
              },
              {
                "character": "Billy Canton",
                "credit_id": "52fe43d09251416c7501f331",
                "release_date": "1990-02-26",
                "vote_count": 16,
                "video": false,
                "adult": false,
                "vote_average": 4.8,
                "title": "Too Young to Die?",
                "genre_ids": [
                  80,
                  18
                ],
                "original_language": "en",
                "original_title": "Too Young to Die?",
                "popularity": 2.37927,
                "id": 10917,
                "backdrop_path": "/2Xcj58udZcOQt8rQMNpvFDB8hCa.jpg",
                "overview": "An abused 15 year old is charged with a murder that carries the death penalty in this fact-based story.",
                "poster_path": "/4L0BapEctIHvneJurG6pUqwF2y2.jpg"
              },
              {
                "character": "Brad, 1st Bachelor",
                "credit_id": "52fe43e2c3a36847f807610f",
                "release_date": "2002-12-30",
                "vote_count": 256,
                "video": false,
                "adult": false,
                "vote_average": 6.6,
                "title": "Confessions of a Dangerous Mind",
                "genre_ids": [
                  35,
                  80,
                  18,
                  53,
                  10749
                ],
                "original_language": "en",
                "original_title": "Confessions of a Dangerous Mind",
                "popularity": 1.716458,
                "id": 4912,
                "backdrop_path": "/z2BIvPHuaDeT5udGoVuV8ZmlbY3.jpg",
                "overview": "Television made him famous, but his biggest hits happened off screen. Television producer by day, CIA assassin by night, Chuck Barris was recruited by the CIA at the height of his TV career and trained to become a covert operative. Or so Barris said.",
                "poster_path": "/o3Im9nPLAgtlw1j2LtpMebAotSe.jpg"
              },
              {
                "character": "Benjamin Button",
                "credit_id": "52fe43e2c3a36847f807632f",
                "release_date": "2008-11-24",
                "vote_count": 2896,
                "video": false,
                "adult": false,
                "vote_average": 7.3,
                "title": "The Curious Case of Benjamin Button",
                "genre_ids": [
                  18,
                  14,
                  9648,
                  53,
                  10749
                ],
                "original_language": "en",
                "original_title": "The Curious Case of Benjamin Button",
                "popularity": 5.502265,
                "id": 4922,
                "backdrop_path": "/u4izHlsHk8jwalt5m7E2uzP8q9E.jpg",
                "overview": "Tells the story of Benjamin Button, a man who starts aging backwards with bizarre consequences.",
                "poster_path": "/4O4INOPtWTfHq3dd5vYTPV0TCwa.jpg"
              },
              {
                "character": "Chad Feldheimer",
                "credit_id": "52fe43e6c3a36847f8076fe7",
                "release_date": "2008-09-05",
                "vote_count": 1117,
                "video": false,
                "adult": false,
                "vote_average": 6.5,
                "title": "Burn After Reading",
                "genre_ids": [
                  35,
                  18
                ],
                "original_language": "en",
                "original_title": "Burn After Reading",
                "popularity": 2.775904,
                "id": 4944,
                "backdrop_path": "/r9BCMru6cPtuXeIRKGGkf4NNRrU.jpg",
                "overview": "When a disc containing memoirs of a former CIA analyst falls into the hands of Linda Litzke and Chad Feldheimer, the two gym employees see a chance to make enough money for her to have life-changing cosmetic surgery. Predictably, events whirl out of control for the duo doofuses and those in their orbit.",
                "poster_path": "/cbuPko7d87rhGEzMVIdHgW4mfob.jpg"
              },
              {
                "character": "Himself",
                "credit_id": "52fe44259251416c91006683",
                "release_date": "1997-01-01",
                "vote_count": 9,
                "video": false,
                "adult": false,
                "vote_average": 6.1,
                "title": "The Hamster Factor and Other Tales of Twelve Monkeys",
                "genre_ids": [
                  99
                ],
                "original_language": "en",
                "original_title": "The Hamster Factor and Other Tales of Twelve Monkeys",
                "popularity": 1.382514,
                "id": 30565,
                "backdrop_path": null,
                "overview": "A documentary following Terry Gilliam through the creation of \"12 Monkeys\"",
                "poster_path": "/sfPxX29hVdBq8cP5839Dx91cCW9.jpg"
              },
              {
                "character": "Dwight Ingalls",
                "credit_id": "52fe4428c3a368484e012c37",
                "release_date": "1989-07-01",
                "vote_count": 12,
                "video": false,
                "adult": false,
                "vote_average": 5.2,
                "title": "Cutting Class",
                "genre_ids": [
                  35,
                  27,
                  9648,
                  53
                ],
                "original_language": "en",
                "original_title": "Cutting Class",
                "popularity": 1.562028,
                "id": 21799,
                "backdrop_path": "/7JCSyQ7PrvZEDJkkSBOLCjRJABx.jpg",
                "overview": "High school student Paula Carson is affections are being sought after by two of her classmates: Dwight, the \"bad boy\", and Brian, a disturbed young man who has just been released from a mental hospital where he was committed following the suspicious death of his father. Soon after being released, more murders start happening. Is Brian back to his old tricks, or is Dwight just trying to eliminate the competition?",
                "poster_path": "/IBJPz5Hhj5IfoOWXvLbqcSyWlG.jpg"
              },
              {
                "character": "Jerry Welbach",
                "credit_id": "52fe443bc3a36847f8089dd5",
                "release_date": "2001-03-01",
                "vote_count": 399,
                "video": false,
                "adult": false,
                "vote_average": 5.8,
                "title": "The Mexican",
                "genre_ids": [
                  28,
                  35,
                  80,
                  10749
                ],
                "original_language": "en",
                "original_title": "The Mexican",
                "popularity": 1.756791,
                "id": 6073,
                "backdrop_path": "/bouDJhpLW26RnBl76V9BHlEafdU.jpg",
                "overview": "Jerry Welbach, a reluctant bagman, has been given two ultimatums: The first is from his mob boss to travel to Mexico and retrieve a priceless antique pistol, known as \"the Mexican\"... or suffer the consequences. The second is from his girlfriend Samantha to end his association with the mob. Jerry figures alive and in trouble with Samantha is better than the more permanent alternative, so he heads south of the border.",
                "poster_path": "/a7PuqWv0ENFg8dt9k51AID6P1kh.jpg"
              },
              {
                "character": "Mr. OBrien",
                "credit_id": "52fe44ccc3a36847f80aa95b",
                "release_date": "2011-05-18",
                "vote_count": 896,
                "video": false,
                "adult": false,
                "vote_average": 6.5,
                "title": "The Tree of Life",
                "genre_ids": [
                  18,
                  14
                ],
                "original_language": "en",
                "original_title": "The Tree of Life",
                "popularity": 3.161888,
                "id": 8967,
                "backdrop_path": "/tBs9alJ2weUkOW83RkuBlz8Nlw6.jpg",
                "overview": "The impressionistic story of a Texas family in the 1950s. The film follows the life journey of the eldest son, Jack, through the innocence of childhood to his disillusioned adult years as he tries to reconcile a complicated relationship with his father. Jack finds himself a lost soul in the modern world, seeking answers to the origins and meaning of life while questioning the existence of faith.",
                "poster_path": "/ptDOdfOg0srtk4TGdeYbLqxv2nd.jpg"
              },
              {
                "character": "Rick",
                "credit_id": "52fe4510c3a368484e0467cb",
                "release_date": "1988-12-21",
                "vote_count": 13,
                "video": false,
                "adult": false,
                "vote_average": 4.6,
                "title": "The Dark Side of the Sun",
                "genre_ids": [
                  18,
                  10749
                ],
                "original_language": "en",
                "original_title": "The Dark Side of the Sun",
                "popularity": 1.566133,
                "id": 26642,
                "backdrop_path": "/yyCfo5JLb9Q89aiGiICuUgTLMQW.jpg",
                "overview": "He risks it all for the love of a lifetime!",
                "poster_path": "/5AYjzKYtCwWxmeP3TkvBukXpPmw.jpg"
              },
              {
                "character": "Detective Frank Harris",
                "credit_id": "52fe45dd9251416c75065151",
                "release_date": "1992-07-10",
                "vote_count": 120,
                "video": false,
                "adult": false,
                "vote_average": 4.9,
                "title": "Cool World",
                "genre_ids": [
                  16,
                  35,
                  14
                ],
                "original_language": "en",
                "original_title": "Cool World",
                "popularity": 2.237416,
                "id": 14239,
                "backdrop_path": "/1NhXEkwCxO7tZ6dJ5lX7OhDX4Hr.jpg",
                "overview": "Jack Deebs is a cartoonist who is due to be released from jail. His comic book \"Cool World\" describes a zany world populated by \"doodles\" (cartoon characters) and \"noids\" (humanoids). What Jack did not realize is that Cool World really does exist, and a \"doodle\" scientist has just perfected a machine which links Cool World with our world. Intrigued at seeing his creating come to life, Jack is nonetheless wary as he knows that not everything in Cool World is exactly friendly.",
                "poster_path": "/eSR3vFpgGQfYQYI2fMbwIZp70lp.jpg"
              },
              {
                "character": "Sinbad (voice)",
                "credit_id": "52fe45f09251416c75067ad5",
                "release_date": "2003-07-02",
                "vote_count": 312,
                "video": false,
                "adult": false,
                "vote_average": 6.5,
                "title": "Sinbad: Legend of the Seven Seas",
                "genre_ids": [
                  12,
                  16,
                  10751
                ],
                "original_language": "en",
                "original_title": "Sinbad: Legend of the Seven Seas",
                "popularity": 2.025559,
                "id": 14411,
                "backdrop_path": "/5y2X4JqClXGa82O4YkvRfGbaOFe.jpg",
                "overview": "The sailor of legend is framed by the goddess Eris for the theft of the Book of Peace, and must travel to her realm at the end of the world to retrieve it and save the life of his childhood friend Prince Proteus.",
                "poster_path": "/6LELf4ZzVBJwR9mNq86Mf5QVERS.jpg"
              },
              {
                "character": "Billy Beane",
                "credit_id": "52fe461fc3a368484e0800bd",
                "release_date": "2011-09-22",
                "vote_count": 1272,
                "video": false,
                "adult": false,
                "vote_average": 7,
                "title": "Moneyball",
                "genre_ids": [
                  18
                ],
                "original_language": "en",
                "original_title": "Moneyball",
                "popularity": 3.796399,
                "id": 60308,
                "backdrop_path": "/pxlaSPleGSNI8jJZYGhXH5LdI1B.jpg",
                "overview": "The story of Oakland Athletics general manager Billy Beane is successful attempt to put together a baseball team on a budget, by employing computer-generated analysis to draft his players.",
                "poster_path": "/3oAa8mJJ97CH9AeGEY6vjAxqcvZ.jpg"
              },
              {
                "character": "Metro Man (voice)",
                "credit_id": "52fe468e9251416c910583cd",
                "release_date": "2010-10-28",
                "vote_count": 1689,
                "video": false,
                "adult": false,
                "vote_average": 6.6,
                "title": "Megamind",
                "genre_ids": [
                  28,
                  16,
                  35,
                  878,
                  10751
                ],
                "original_language": "en",
                "original_title": "Megamind",
                "popularity": 5.329891,
                "id": 38055,
                "backdrop_path": "/o6anuGPog9853CPiaPQEMmdBVT0.jpg",
                "overview": "Bumbling supervillain Megamind finally defeats his nemesis, the superhero Metro Man. But without a hero, he loses all purpose and must find new meaning to his life.",
                "poster_path": "/amXAUSAUrnGuLGEyc1ZNhBvgbnF.jpg"
              },
              {
                "character": "Himself",
                "credit_id": "52fe46acc3a368484e09d959",
                "release_date": "2011-03-04",
                "vote_count": 2,
                "video": false,
                "adult": false,
                "vote_average": 6,
                "title": "His Way",
                "genre_ids": [
                  99
                ],
                "original_language": "en",
                "original_title": "His Way",
                "popularity": 1.085254,
                "id": 63472,
                "backdrop_path": null,
                "overview": "A look at the professional, political and personal life of legendary movie producer Jerry Weintraub featuring interviews with friends, family and colleagues.",
                "poster_path": "/mkjOiYcHSZrQqW2OHFL0graOjfq.jpg"
              },
              {
                "character": "Johnny Suede",
                "credit_id": "52fe46b2c3a36847f810d153",
                "release_date": "1991-08-18",
                "vote_count": 13,
                "video": false,
                "adult": false,
                "vote_average": 4.7,
                "title": "Johnny Suede",
                "genre_ids": [
                  35,
                  10749
                ],
                "original_language": "en",
                "original_title": "Johnny Suede",
                "popularity": 1.193731,
                "id": 45145,
                "backdrop_path": "/sHEkz7JG0b9SmFey50jFBxaL9NF.jpg",
                "overview": "A struggling young musician and devoted fan of Ricky Nelson wants to be just like his idol and become a rock star.",
                "poster_path": "/u2k59Sp3cBhlWqe8m6zkSQ5jMJi.jpg"
              },
              {
                "character": "Jackie Cogan",
                "credit_id": "52fe46e4c3a368484e0a9a51",
                "release_date": "2012-09-20",
                "vote_count": 695,
                "video": false,
                "adult": false,
                "vote_average": 5.8,
                "title": "Killing Them Softly",
                "genre_ids": [
                  80,
                  53
                ],
                "original_language": "en",
                "original_title": "Killing Them Softly",
                "popularity": 2.22385,
                "id": 64689,
                "backdrop_path": "/jikIWGfMFq8YxYziXVFyqBI7e3o.jpg",
                "overview": "Jackie Cogan is an enforcer hired to restore order after three dumb guys rob a Mob protected card game, causing the local criminal economy to collapse.",
                "poster_path": "/3WPa43edrQeLRFgXdiLiWnWV34a.jpg"
              },
              {
                "character": "Will the Krill (voice)",
                "credit_id": "52fe4718c3a368484e0b4d23",
                "release_date": "2011-11-17",
                "vote_count": 326,
                "video": false,
                "adult": false,
                "vote_average": 5.8,
                "title": "Happy Feet Two",
                "genre_ids": [
                  16,
                  35,
                  10751
                ],
                "original_language": "en",
                "original_title": "Happy Feet Two",
                "popularity": 1.735241,
                "id": 65759,
                "backdrop_path": "/4MnCCfVAvLx7pP9ZvMQyvkb5awB.jpg",
                "overview": "Mumble the penguin has a problem: his son Erik, who is reluctant to dance, encounters The Mighty Sven, a penguin who can fly! Things get worse for Mumble when the world is shaken by powerful forces, causing him to brings together the penguin nations and their allies to set things right.",
                "poster_path": "/gY8lWCObaGvcDsmeM8QHBF4AZVk.jpg"
              },
              {
                "character": "Joe Maloney",
                "credit_id": "52fe4766c3a36847f81338e5",
                "release_date": "1991-02-14",
                "vote_count": 15,
                "video": false,
                "adult": false,
                "vote_average": 5.6,
                "title": "Across the Tracks",
                "genre_ids": [
                  18
                ],
                "original_language": "en",
                "original_title": "Across the Tracks",
                "popularity": 1.615322,
                "id": 48448,
                "backdrop_path": "/j7yy6uYbF2HJl77fAbSPhaVb0t7.jpg",
                "overview": "When Billy returns from reform school he has to attend a different high school at the other side of town. He tries to start with a clean slate but his old rival does not make it easy on him and his buddy Louie tries to make him go astray again. His brother Joe, quite the opposite of Billy, is a good runner and determined to win a track scholarship. He suggests Billy to join his school is track team, which pits the two brothers against each other.",
                "poster_path": "/wYD5x1jahZja2gCrRWKOp9U2kUc.jpg"
              },
              {
                "character": "Mickey ONeil (Snatch) (archive footage)",
                "credit_id": "52fe47b4c3a368484e0d520b",
                "release_date": "2002-04-16",
                "vote_count": 3,
                "video": true,
                "adult": false,
                "vote_average": 4.7,
                "title": "Ultimate Fights from the Movies",
                "genre_ids": [
                  28,
                  99
                ],
                "original_language": "en",
                "original_title": "Ultimate Fights from the Movies",
                "popularity": 1.943325,
                "id": 68996,
                "backdrop_path": "/4mXCNKn56BJ1QIjeJPIsxYX8kTt.jpg",
                "overview": "In their second film compilation following their Boogeymen:The Killer Compilation series, FlixMix takes you into the history of action movies from Hollywood to Hong Kong cinema that spans a 20-year period. This one features action scenes from 16 action-packed movies featuring action gurus, Jet Li, Michelle Yeoh, Chow Yun-Fat, Jackie Chan, Jean-Claude Van Damme and many more.",
                "poster_path": "/2KIKXjKoNTmpi22gsU3KUMv6wKA.jpg"
              },
              {
                "character": "Elliott Fowler",
                "credit_id": "52fe47c8c3a36847f8147ff5",
                "release_date": "1994-04-29",
                "vote_count": 4,
                "video": false,
                "adult": false,
                "vote_average": 3.3,
                "title": "The Favor",
                "genre_ids": [
                  35,
                  18,
                  10749
                ],
                "original_language": "en",
                "original_title": "The Favor",
                "popularity": 1.155511,
                "id": 50463,
                "backdrop_path": null,
                "overview": "Kathy is married to Peter. Now she ca not help but wonder how things could have been if she got together with her old boyfriend, Tom. Being married prevents from doing that so she asks her friend, Emily to go to him and see if she can sleep with him then tell Kathy how it was. When Emily tells Kathy that things were awesome, their friendship suffers, at the same so does Kathy is marriage. Things get even more complicated when Emily learns she is pregnant, and she is not certain if it is Tom is or her boyfriend, Elliot.",
                "poster_path": "/eKpxCQllaktjfqR11ITbYstcHmD.jpg"
              },
              {
                "character": "Gerry Lane",
                "credit_id": "52fe485dc3a368484e0f5061",
                "release_date": "2013-06-20",
                "vote_count": 5045,
                "video": false,
                "adult": false,
                "vote_average": 6.7,
                "title": "World War Z",
                "genre_ids": [
                  28,
                  18,
                  27,
                  878,
                  53
                ],
                "original_language": "en",
                "original_title": "World War Z",
                "popularity": 7.710324,
                "id": 72190,
                "backdrop_path": "/xMOQVYLeIKBXenJ9KMeasj7S64y.jpg",
                "overview": "Life for former United Nations investigator Gerry Lane and his family seems content. Suddenly, the world is plagued by a mysterious infection turning whole human populations into rampaging mindless zombies. After barely escaping the chaos, Lane is persuaded to go on a mission to investigate this disease. What follows is a perilous trek around the world where Lane must brave horrific dangers and long odds to find answers before human civilization falls.",
                "poster_path": "/Ha5t0J21eyiq6Az1EXzx0iwsGH.jpg"
              },
              {
                "character": "Brian",
                "credit_id": "52fe48b9c3a36847f81761cb",
                "release_date": "1989-05-04",
                "vote_count": 11,
                "video": false,
                "adult": false,
                "vote_average": 5.3,
                "title": "Happy Together",
                "genre_ids": [
                  35,
                  10749
                ],
                "original_language": "en",
                "original_title": "Happy Together",
                "popularity": 1.584697,
                "id": 55059,
                "backdrop_path": "/yY8iwnPW2cV1TDAob9Xq3yIUqMn.jpg",
                "overview": "Christopher is an ambitious college freshman, striving to become a writer. Through a computer fault he is assigned the same room as Alex, a real party freak and... a girl! He is annoyed and tries to get a different room as soon as possible, but when he learns to know her, he also starts to like her. She not only improves his sexual life, but also his writing skills",
                "poster_path": "/3MBKlSPTEt4FAds8hPawcCDoXyd.jpg"
              },
              {
                "character": "Steve Black",
                "credit_id": "52fe4900c3a368484e115b63",
                "release_date": "1990-01-27",
                "vote_count": 1,
                "video": false,
                "adult": false,
                "vote_average": 2,
                "title": "The Image",
                "genre_ids": [
                  18
                ],
                "original_language": "en",
                "original_title": "The Image",
                "popularity": 1.024845,
                "id": 75451,
                "backdrop_path": null,
                "overview": "Albert Finney stars as a TV-news anchorman who wrongly implicates a good friend in a savings-and-loan scandal; when the friend commits suicide, Finney must question his ethics and obsession with high Nielsen ratings.",
                "poster_path": "/xfiHVr42KCIu2FvKd5uD2iPbeie.jpg"
              },
              {
                "character": "Samuel Bass",
                "credit_id": "52fe492cc3a368484e11dfa3",
                "release_date": "2013-10-18",
                "vote_count": 3284,
                "video": false,
                "adult": false,
                "vote_average": 7.9,
                "title": "12 Years a Slave",
                "genre_ids": [
                  18,
                  36
                ],
                "original_language": "en",
                "original_title": "12 Years a Slave",
                "popularity": 6.62674,
                "id": 76203,
                "backdrop_path": "/xnRPoFI7wzOYviw3PmoG94X2Lnc.jpg",
                "overview": "In the pre-Civil War United States, Solomon Northup, a free black man from upstate New York, is abducted and sold into slavery. Facing cruelty as well as unexpected kindnesses Solomon struggles not only to stay alive, but to retain his dignity. In the twelfth year of his unforgettable odyssey, Solomon’s chance meeting with a Canadian abolitionist will forever alter his life.",
                "poster_path": "/kb3X943WMIJYVg4SOAyK0pmWL5D.jpg"
              },
              {
                "character": "Westray",
                "credit_id": "52fe4aaac3a36847f81db47d",
                "release_date": "2013-10-25",
                "vote_count": 661,
                "video": false,
                "adult": false,
                "vote_average": 5,
                "title": "The Counselor",
                "genre_ids": [
                  80,
                  18,
                  53
                ],
                "original_language": "en",
                "original_title": "The Counselor",
                "popularity": 3.597124,
                "id": 109091,
                "backdrop_path": "/62xHmGnxMi0wV40BS3iKnDru0nO.jpg",
                "overview": "A rich and successful lawyer named Counselor is about to get married to his fiancée but soon meets up with the middle-man known as Westray who tells him his drug trafficking plan has taken a horrible twist and now he must protect himself and his soon bride-to-be lover as the truth of the drug business uncovers and targets become chosen.",
                "poster_path": "/uxp6rHVBzUqZCyTaUI8xzUP5sOf.jpg"
              },
              {
                "character": "Chief Judge Vaughn R. Walker",
                "credit_id": "52fe4ab2c3a36847f81dcd13",
                "release_date": "2012-03-03",
                "vote_count": 0,
                "video": false,
                "adult": false,
                "vote_average": 0,
                "title": "8",
                "genre_ids": [],
                "original_language": "en",
                "original_title": "8",
                "popularity": 1.209511,
                "id": 109404,
                "backdrop_path": null,
                "overview": "\"8\"—a new play by Academy-award winning screenwriter Dustin Lance Black (Milk, J. Edgar)—demystifies the debate around marriage equality by chronicling the landmark trial of Perry v. Schwarzenegger. A one time show was done live on youtube with a superstar cast",
                "poster_path": "/28fDtVBr6PyHsFFqyKJCeN3ysBP.jpg"
              },
              {
                "character": "Mickey ONeil",
                "credit_id": "52fe4218c3a36847f8003be5",
                "release_date": "2000-09-01",
                "vote_count": 2681,
                "video": false,
                "adult": false,
                "vote_average": 7.6,
                "title": "Snatch",
                "genre_ids": [
                  80,
                  53
                ],
                "original_language": "en",
                "original_title": "Snatch",
                "popularity": 4.065815,
                "id": 107,
                "backdrop_path": "/cNLZ7YGRikb4IsLblrzu86ndZPw.jpg",
                "overview": "The second film from British director Guy Ritchie. Snatch tells an obscure story similar to his first fast-paced crazy character-colliding filled film “Lock, Stock and Two Smoking Barrels.” There are two overlapping stories here – one is the search for a stolen diamond, and the other about a boxing promoter who’s having trouble with a psychotic gangster.",
                "poster_path": "/on9JlbGEccLsYkjeEph2Whm1DIp.jpg"
              },
              {
                "character": "Rusty Ryan",
                "credit_id": "52fe4220c3a36847f800616b",
                "release_date": "2001-12-07",
                "vote_count": 3491,
                "video": false,
                "adult": false,
                "vote_average": 7.1,
                "title": "Ocean is Eleven",
                "genre_ids": [
                  80,
                  53
                ],
                "original_language": "en",
                "original_title": "Ocean is Eleven",
                "popularity": 4.10939,
                "id": 161,
                "backdrop_path": "/z2fiN0tgkgOcAFl5gxvQlYXCn3l.jpg",
                "overview": "Less than 24 hours into his parole, charismatic thief Danny Ocean is already rolling out his next plan: In one night, Danny is hand-picked crew of specialists will attempt to steal more than $150 million from three Las Vegas casinos. But to score the cash, Danny risks his chances of reconciling with ex-wife, Tess.",
                "poster_path": "/o0h76DVXvk5OKjmNez5YY0GODC2.jpg"
              },
              {
                "character": "Rusty Ryan",
                "credit_id": "52fe4221c3a36847f80062e5",
                "release_date": "2004-12-09",
                "vote_count": 1925,
                "video": false,
                "adult": false,
                "vote_average": 6.4,
                "title": "Ocean is Twelve",
                "genre_ids": [
                  80,
                  53
                ],
                "original_language": "en",
                "original_title": "Ocean is Twelve",
                "popularity": 2.985544,
                "id": 163,
                "backdrop_path": "/5AZ8fm3SZ6ANigK1NtfbhPy6mbm.jpg",
                "overview": "Danny Ocean reunites with his old flame and the rest of his merry band of thieves in carrying out three huge heists in Rome, Paris and Amsterdam – but a Europol agent is hot on their heels.",
                "poster_path": "/nS3iDLQuy13XY1JH58NNl1rCuNN.jpg"
              },
              {
                "character": "Paul Maclean",
                "credit_id": "52fe4233c3a36847f800bb79",
                "release_date": "1992-10-09",
                "vote_count": 214,
                "video": false,
                "adult": false,
                "vote_average": 7,
                "title": "A River Runs Through It",
                "genre_ids": [
                  18
                ],
                "original_language": "en",
                "original_title": "A River Runs Through It",
                "popularity": 2.356041,
                "id": 293,
                "backdrop_path": "/v7oMYppOdYNlMHD3TYKW3TyvLRX.jpg",
                "overview": "A River Runs Through is a cinematographically stunning true story of Norman Maclean. The story follows Norman and his brother Paul through the experiences of life and growing up, and how their love of fly fishing keeps them together despite varying life circumstances in the untamed west of Montana in the 1920 is.",
                "poster_path": "/xX4H1hZG9IgSRkC0LANbPQ0StJi.jpg"
              },
              {
                "character": "Joe Black",
                "credit_id": "52fe4234c3a36847f800bdbb",
                "release_date": "1998-11-12",
                "vote_count": 1033,
                "video": false,
                "adult": false,
                "vote_average": 6.9,
                "title": "Meet Joe Black",
                "genre_ids": [
                  18,
                  14,
                  9648
                ],
                "original_language": "en",
                "original_title": "Meet Joe Black",
                "popularity": 3.295568,
                "id": 297,
                "backdrop_path": "/4iDp0J3bZOqIpwyOU3nvj1FOIXW.jpg",
                "overview": "When the grim reaper comes to collect the soul of megamogul Bill Parrish, he arrives with a proposition: Host him for a \"vacation\" among the living in trade for a few more days of existence. Parrish agrees, and using the pseudonym Joe Black, Death begins taking part in Parrish is daily agenda and falls in love with the man is daughter. Yet when Black is holiday is over, so is Parrish is life.",
                "poster_path": "/nlxPnkZY3vY1iehJriKMQcT6eua.jpg"
              },
              {
                "character": "Robert “Rusty” Charles Ryan",
                "credit_id": "52fe4234c3a36847f800bf0f",
                "release_date": "2007-06-07",
                "vote_count": 1840,
                "video": false,
                "adult": false,
                "vote_average": 6.5,
                "title": "Ocean is Thirteen",
                "genre_ids": [
                  80,
                  53
                ],
                "original_language": "en",
                "original_title": "Ocean is Thirteen",
                "popularity": 3.552988,
                "id": 298,
                "backdrop_path": "/7ytb78OyijteFpFKKoZsYSvPw2u.jpg",
                "overview": "Danny Ocean is team of criminals are back and are composing a plan more personal than ever. When ruthless casino owner Willy Bank double-crosses Reuben Tishkoff, causing a heart attack, Danny Ocean vows that him and his team will do anything to bring Willy Bank and everything he is got down. Even if it includes hiring help from one of their own enemies, Terry Benedict.",
                "poster_path": "/uDUebdX0SFqpjBrdC4ANxub3zjy.jpg"
              },
              {
                "character": "Floyd",
                "credit_id": "52fe4237c3a36847f800cdd3",
                "release_date": "1993-09-09",
                "vote_count": 694,
                "video": false,
                "adult": false,
                "vote_average": 7.5,
                "title": "True Romance",
                "genre_ids": [
                  28,
                  80,
                  53,
                  10749
                ],
                "original_language": "en",
                "original_title": "True Romance",
                "popularity": 2.660968,
                "id": 319,
                "backdrop_path": "/f7EbIN1bMf8tOtoSmiqd6mO5p4P.jpg",
                "overview": "Clarence marries hooker Alabama, steals cocaine from her pimp, and tries to sell it in Hollywood, while the owners of the coke try to reclaim it.",
                "poster_path": "/xBO8R3CZfrJ9rrwrZoJ68PgJyAR.jpg"
              },
              {
                "character": "Tyler Durden",
                "credit_id": "52fe4250c3a36847f80149f7",
                "release_date": "1999-10-15",
                "vote_count": 8349,
                "video": false,
                "adult": false,
                "vote_average": 8.2,
                "title": "Fight Club",
                "genre_ids": [
                  18
                ],
                "original_language": "en",
                "original_title": "Fight Club",
                "popularity": 11.703928,
                "id": 550,
                "backdrop_path": "/87hTDiay2N2qWyX4Ds7ybXi9h8I.jpg",
                "overview": "A ticking-time-bomb insomniac and a slippery soap salesman channel primal male aggression into a shocking new form of therapy. Their concept catches on, with underground \"fight clubs\" forming in every town, until an eccentric gets in the way and ignites an out-of-control spiral toward oblivion.",
                "poster_path": "/adw6Lq9FiC9zjYEpOqfq03ituwp.jpg"
              },
              {
                "character": "Louis de Pointe du Lac",
                "credit_id": "52fe4260c3a36847f80199f9",
                "release_date": "1994-11-11",
                "vote_count": 1338,
                "video": false,
                "adult": false,
                "vote_average": 7.2,
                "title": "Interview with the Vampire",
                "genre_ids": [
                  27,
                  10749
                ],
                "original_language": "en",
                "original_title": "Interview with the Vampire",
                "popularity": 3.554484,
                "id": 628,
                "backdrop_path": "/GRyynLqafMrLFMHqvfGdUweavA.jpg",
                "overview": "A vampire relates his epic life story of love, betrayal, loneliness, and dark hunger to an over-curious reporter.",
                "poster_path": "/hldXwwViSfHJS0kIJr07KBGmHJI.jpg"
              },
              {
                "character": "Achilles",
                "credit_id": "52fe4264c3a36847f801b083",
                "release_date": "2004-05-13",
                "vote_count": 2415,
                "video": false,
                "adult": false,
                "vote_average": 6.8,
                "title": "Troy",
                "genre_ids": [
                  12,
                  18,
                  10752
                ],
                "original_language": "en",
                "original_title": "Troy",
                "popularity": 5.315127,
                "id": 652,
                "backdrop_path": "/lIyNUZbIeEwWpaWXAO5gnciB8Dq.jpg",
                "overview": "In year 1250 B.C. during the late Bronze age, two emerging nations begin to clash. Paris, the Trojan prince, convinces Helen, Queen of Sparta, to leave her husband Menelaus, and sail with him back to Troy. After Menelaus finds out that his wife was taken by the Trojans, he asks his brother Agamemnom to help him get her back. Agamemnon sees this as an opportunity for power. So they set off with 1,000 ships holding 50,000 Greeks to Troy. With the help of Achilles, the Greeks are able to fight the never before defeated Trojans.",
                "poster_path": "/edMlij7nw2NMla32xskDnzMCFBM.jpg"
              },
              {
                "character": "John Smith",
                "credit_id": "52fe4276c3a36847f80208cb",
                "release_date": "2005-06-07",
                "vote_count": 2570,
                "video": false,
                "adult": false,
                "vote_average": 6.5,
                "title": "Mr. & Mrs. Smith",
                "genre_ids": [
                  28,
                  35,
                  18,
                  53
                ],
                "original_language": "en",
                "original_title": "Mr. & Mrs. Smith",
                "popularity": 5.850512,
                "id": 787,
                "backdrop_path": "/n4GhKs24bQK2XsdlZ5bZFljzlsK.jpg",
                "overview": "After five (or six) years of vanilla-wedded bliss, ordinary suburbanites John and Jane Smith are stuck in a huge rut. Unbeknownst to each other, they are both coolly lethal, highly-paid assassins working for rival organisations. When they discover they are each other is next target, their secret lives collide in a spicy, explosive mix of wicked comedy, pent-up passion, nonstop action and high-tech weaponry.",
                "poster_path": "/dqs5BmwSULtB28Kls3IB6khTQwp.jpg"
              },
              {
                "character": "Detective David Mills",
                "credit_id": "52fe4279c3a36847f802178b",
                "release_date": "1995-09-22",
                "vote_count": 5114,
                "video": false,
                "adult": false,
                "vote_average": 8.1,
                "title": "Se7en",
                "genre_ids": [
                  80,
                  9648,
                  53
                ],
                "original_language": "en",
                "original_title": "Se7en",
                "popularity": 7.60737,
                "id": 807,
                "backdrop_path": "/ba4CpvnaxvAgff2jHiaqJrVpZJ5.jpg",
                "overview": "Two homicide detectives are on a desperate hunt for a serial killer whose crimes are based on the \"seven deadly sins\" in this dark and haunting film that takes viewers from the tortured remains of one victim to the next. The seasoned Det. Sommerset researches each sin in an effort to get inside the killer is mind, while his novice partner, Mills, scoffs at his efforts to unravel the case.",
                "poster_path": "/8zw8IL4zEPjkh8Aysdcd0FwGMb0.jpg"
              },
              {
                "character": "Michael Sullivan",
                "credit_id": "52fe427bc3a36847f80222a7",
                "release_date": "1996-10-18",
                "vote_count": 635,
                "video": false,
                "adult": false,
                "vote_average": 7.3,
                "title": "Sleepers",
                "genre_ids": [
                  80,
                  18,
                  53
                ],
                "original_language": "en",
                "original_title": "Sleepers",
                "popularity": 2.280319,
                "id": 819,
                "backdrop_path": "/ie40d2IO3iFADzWs4KLV3mvBtl5.jpg",
                "overview": "Two gangsters seek revenge on the state jail worker who during their stay at a youth prison sexually abused them. A sensational court hearing takes place to charge him for the crimes. A moving drama from director Barry Levinson.",
                "poster_path": "/cDqEv4Fw4JZh2zCfecqw3z09L8z.jpg"
              },
              {
                "character": "Heinrich Harrer",
                "credit_id": "52fe4295c3a36847f802a10d",
                "release_date": "1997-09-12",
                "vote_count": 560,
                "video": false,
                "adult": false,
                "vote_average": 6.9,
                "title": "Seven Years in Tibet",
                "genre_ids": [
                  12,
                  18,
                  36
                ],
                "original_language": "en",
                "original_title": "Seven Years in Tibet",
                "popularity": 2.852491,
                "id": 978,
                "backdrop_path": "/6HjYM1vgqWpFTr01tOBrskfvxcu.jpg",
                "overview": "Austrian mountaineer, Heinrich Harrer journeys to the Himalayas without his family to head an expedition in 1939. But when World War II breaks out, the arrogant Harrer falls into Allied forces hands as a prisoner of war. He escapes with a fellow detainee and makes his way to Llaso, Tibet, where he meets the 14-year-old Dalai Lama, whose friendship ultimately transforms his outlook on life.",
                "poster_path": "/cflSeFUVDCf73Tzh5sB204JbQ6j.jpg"
              },
              {
                "character": "Richard",
                "credit_id": "52fe42e9c3a36847f802c221",
                "release_date": "2006-09-08",
                "vote_count": 947,
                "video": false,
                "adult": false,
                "vote_average": 6.9,
                "title": "Babel",
                "genre_ids": [
                  18
                ],
                "original_language": "en",
                "original_title": "Babel",
                "popularity": 2.642871,
                "id": 1164,
                "backdrop_path": "/uHx9E9xqSgOBoRvL4shmMNu8Ojc.jpg",
                "overview": "Tragedy strikes a married couple on vacation in the Moroccan desert, touching off an interlocking story involving four different families.",
                "poster_path": "/oyOviwBr6VEDz6pauvdgsLhRHck.jpg"
              },
              {
                "character": "Tom Bishop",
                "credit_id": "52fe42fbc3a36847f8031727",
                "release_date": "2001-11-18",
                "vote_count": 529,
                "video": false,
                "adult": false,
                "vote_average": 6.8,
                "title": "Spy Game",
                "genre_ids": [
                  28,
                  80,
                  53
                ],
                "original_language": "en",
                "original_title": "Spy Game",
                "popularity": 2.889623,
                "id": 1535,
                "backdrop_path": "/ncF0ozvDnIVFzKF0J5iqwEIezRJ.jpg",
                "overview": "Veteran spy Nathan Muir is on the verge of retiring from the CIA when he learns that his one-time protégé and close friend, Tom Bishop, is a political prisoner sentenced to die in Beijing. Although their friendship has been marred by bad blood and resentment, Muir agrees to take on the most dangerous mission of his career and rescue Bishop.",
                "poster_path": "/hsb8hBeU3tkTX8SUYW6YYw6JPYD.jpg"
              },
              {
                "character": "J.D.",
                "credit_id": "52fe42fbc3a36847f8031a6d",
                "release_date": "1991-05-24",
                "vote_count": 654,
                "video": false,
                "adult": false,
                "vote_average": 7.2,
                "title": "Thelma & Louise",
                "genre_ids": [
                  12,
                  80,
                  18,
                  53
                ],
                "original_language": "en",
                "original_title": "Thelma & Louise",
                "popularity": 3.440349,
                "id": 1541,
                "backdrop_path": "/9X0Ebv8wWOH7OlWmJOc5iucqkBm.jpg",
                "overview": "Whilst on a short weekend getaway, Louise shoots a man who had tried to rape Thelma. Due to the incriminating circumstances, they make a run for it and thus a cross country chase ensues for the two fugitives. Along the way, both women rediscover the strength of their friendship and surprising aspects of their personalities and self-strengths in the trying times.",
                "poster_path": "/pnzuLoE52EiTfjfqRex2uTkH7LB.jpg"
              },
              {
                "character": "Jeffrey Goines",
                "credit_id": "52fe4212c3a36847f8001b39",
                "release_date": "1995-12-29",
                "vote_count": 2169,
                "video": false,
                "adult": false,
                "vote_average": 7.4,
                "title": "Twelve Monkeys",
                "genre_ids": [
                  9648,
                  878,
                  53
                ],
                "original_language": "en",
                "original_title": "Twelve Monkeys",
                "popularity": 2.773768,
                "id": 63,
                "backdrop_path": "/6KXbhaxkgExC5EdDqAzRinhmoZ8.jpg",
                "overview": "In the year 2035, convict James Cole reluctantly volunteers to be sent back in time to discover the origin of a deadly virus that wiped out nearly all of the earth is population and forced the survivors into underground communities. But when Cole is mistakenly sent to 1990 instead of 1996, he is arrested and locked up in a mental hospital. There he meets psychiatrist Dr. Kathryn Railly, and patient Jeffrey Goines, the son of a famous virus expert, who may hold the key to the mysterious rogue group, the Army of the 12 Monkeys, thought to be responsible for unleashing the killer disease.",
                "poster_path": "/6Sj9wDu3YugthXsU0Vry5XFAZGg.jpg"
              },
              {
                "character": "",
                "credit_id": "52fe4ef6c3a36847f82b3c95",
                "release_date": "1992-01-01",
                "vote_count": 2,
                "video": false,
                "adult": false,
                "vote_average": 9,
                "title": "Contact",
                "genre_ids": [],
                "original_language": "en",
                "original_title": "Contact",
                "popularity": 1.426005,
                "id": 244743,
                "backdrop_path": null,
                "overview": "An American soldier and an Arab soldier confront each other during wartime in the desert, each hoping to kill the other. But in order to survive, they must lay down their arms and cooperate.",
                "poster_path": "/gAmyqdAlwzB8Et34ESMrl7tosn4.jpg"
              },
              {
                "character": "Don Wardaddy Collier",
                "credit_id": "52fe4ec09251416c7516126f",
                "release_date": "2014-10-15",
                "vote_count": 3570,
                "video": false,
                "adult": false,
                "vote_average": 7.4,
                "title": "Fury",
                "genre_ids": [
                  28,
                  18,
                  10752
                ],
                "original_language": "en",
                "original_title": "Fury",
                "popularity": 17.802127,
                "id": 228150,
                "backdrop_path": "/pKawqrtCBMmxarft7o1LbEynys7.jpg",
                "overview": "Last months of World War II in April 1945. As the Allies make their final push in the European Theater, a battle-hardened U.S. Army sergeant in the 2nd Armored Division named Wardaddy commands a Sherman tank called \"Fury\" and its five-man crew on a deadly mission behind enemy lines. Outnumbered and outgunned, Wardaddy and his men face overwhelming odds in their heroic attempts to strike at the heart of Nazi Germany.",
                "poster_path": "/pfte7wdMobMF4CVHuOxyu6oqeeA.jpg"
              },
              {
                "character": "Roland",
                "credit_id": "54a1c3c7c3a3680b2700ba58",
                "release_date": "2015-11-12",
                "vote_count": 138,
                "video": false,
                "adult": false,
                "vote_average": 5.4,
                "title": "By the Sea",
                "genre_ids": [
                  18,
                  10749
                ],
                "original_language": "en",
                "original_title": "By the Sea",
                "popularity": 2.778817,
                "id": 314385,
                "backdrop_path": "/a2WCcsvWPZcqemlyKbbFEcxjfn0.jpg",
                "overview": "Set in France during the mid-1970s, Vanessa, a former dancer, and her husband Roland, an American writer, travel the country together. They seem to be growing apart, but when they linger in one quiet, seaside town they begin to draw close to some of its more vibrant inhabitants, such as a local bar/café-keeper and a hotel owner.",
                "poster_path": "/vctzmTinuLACl2PIFuPhTNkTc62.jpg"
              },
              {
                "character": "Richard Leakey (rumored)",
                "credit_id": "54ef5d9c925141795f0066e9",
                "release_date": "2017-07-14",
                "vote_count": 1,
                "video": false,
                "adult": false,
                "vote_average": 10,
                "title": "Africa",
                "genre_ids": [
                  18
                ],
                "original_language": "en",
                "original_title": "Africa",
                "popularity": 1.315861,
                "id": 327437,
                "backdrop_path": null,
                "overview": "The fight of Richard Leakey is late 80s battle with ivory poachers in Kenya that threatened the existence of the African elephant population.",
                "poster_path": null
              },
              {
                "character": "Himself",
                "credit_id": "54f2c5d49251416b41003a02",
                "release_date": "2003-02-04",
                "vote_count": 3,
                "video": false,
                "adult": false,
                "vote_average": 8,
                "title": "Thelma & Louise: The Last Journey",
                "genre_ids": [
                  99
                ],
                "original_language": "en",
                "original_title": "Thelma & Louise: The Last Journey",
                "popularity": 1.405723,
                "id": 327962,
                "backdrop_path": null,
                "overview": "Nearly every major element of making the film Thelma &amp; Louise (1991) is examined here from how the script was written to how Ridley Scott got involved, to how the big tanker explosion was pulled off. Some funny stories are shared and some great trivia as to what was improvised on set and actually left in the film. - Written by Rhyl Donnelly",
                "poster_path": null
              },
              {
                "character": "Guy at Beach with Drink",
                "credit_id": "555a3ee0c3a368777200cbe8",
                "release_date": "1987-03-06",
                "vote_count": 2,
                "video": false,
                "adult": false,
                "vote_average": 7,
                "title": "Hunk",
                "genre_ids": [
                  35,
                  14
                ],
                "original_language": "en",
                "original_title": "Hunk",
                "popularity": 1.562983,
                "id": 32227,
                "backdrop_path": "/fDy6RvRvi5LynR1KXc4rMCynfV9.jpg",
                "overview": "A \"devilish\" tale about an ordinary guy who is visited by a beautiful apparition promising him popularity and drop-dead good looks in exchange for his soul. Transformed overnight into a \"hunk,\" he soon discovers there may be hell to pay for his new lifestyle!",
                "poster_path": "/e1GjhehrHFLay7DKHxw0ReQxHPI.jpg"
              },
              {
                "character": "Ben Rickert",
                "credit_id": "55187d59c3a36862f6004854",
                "release_date": "2015-12-11",
                "vote_count": 2357,
                "video": false,
                "adult": false,
                "vote_average": 7.3,
                "title": "The Big Short",
                "genre_ids": [
                  35,
                  18
                ],
                "original_language": "en",
                "original_title": "The Big Short",
                "popularity": 4.832312,
                "id": 318846,
                "backdrop_path": "/jmlMLYEsYY1kRc5qHIyTdxCeVmZ.jpg",
                "overview": "The men who made millions from a global economic meltdown.",
                "poster_path": "/p11Ftd4VposrAzthkhF53ifYZRl.jpg"
              },
              {
                "character": "Himself",
                "credit_id": "557df105c3a36821a600046d",
                "release_date": "2002-08-02",
                "vote_count": 22,
                "video": false,
                "adult": false,
                "vote_average": 4.8,
                "title": "Full Frontal",
                "genre_ids": [
                  35,
                  18,
                  10749
                ],
                "original_language": "en",
                "original_title": "Full Frontal",
                "popularity": 1.894413,
                "id": 15186,
                "backdrop_path": "/iisihHxbCJDH9W2DimDgX9End2z.jpg",
                "overview": "A contemporary comedy set in Los Angeles, Full Frontal traces the complicated relationship among seven friends as they deal with the fragile connections that bind them together. Full Frontal takes place during a twenty-four hour period - a day in the life of missed connections.",
                "poster_path": "/ma4W9xh6FNAKKE4eM6cIIMwwJDc.jpg"
              },
              {
                "character": "Gerry Lane",
                "credit_id": "5590ba8292514164890030a9",
                "release_date": "2019-12-31",
                "vote_count": 4,
                "video": false,
                "adult": false,
                "vote_average": 0,
                "title": "World War Z 2",
                "genre_ids": [
                  28,
                  27,
                  53
                ],
                "original_language": "en",
                "original_title": "World War Z 2",
                "popularity": 1.52883,
                "id": 336002,
                "backdrop_path": null,
                "overview": "The plot is currently unknown.",
                "poster_path": null
              },
              {
                "character": "Himself",
                "credit_id": "5591282992514175860008b2",
                "release_date": "2008-01-01",
                "vote_count": 29,
                "video": false,
                "adult": false,
                "vote_average": 6.2,
                "title": "The Assassination of Jesse James: Death Of An Outlaw",
                "genre_ids": [
                  99
                ],
                "original_language": "en",
                "original_title": "The Assassination of Jesse James: Death Of An Outlaw",
                "popularity": 1.371496,
                "id": 17171,
                "backdrop_path": null,
                "overview": "Explores the true story of the notorious Jesse James, how the myth developed during his lifetime, and how the legends have persisted over 100 years after his death at the hands of his former friend, Robert Ford.",
                "poster_path": "/4CMvkPQYYkO9ZENhdQbIxRVWsc2.jpg"
              },
              {
                "character": "Himself",
                "credit_id": "55e77bc99251413e450000fb",
                "release_date": "2001-07-03",
                "vote_count": 0,
                "video": false,
                "adult": false,
                "vote_average": 0,
                "title": "Making Snatch",
                "genre_ids": [
                  99
                ],
                "original_language": "en",
                "original_title": "Making Snatch",
                "popularity": 1.162587,
                "id": 357659,
                "backdrop_path": null,
                "overview": "The making of Guy Ritchie is Snatch.",
                "poster_path": null
              },
              {
                "character": "Narrator (voice)",
                "credit_id": "55e786c39251413e4500020a",
                "release_date": "2015-09-02",
                "vote_count": 18,
                "video": false,
                "adult": false,
                "vote_average": 8.3,
                "title": "Hitting the Apex",
                "genre_ids": [
                  99
                ],
                "original_language": "en",
                "original_title": "Hitting the Apex",
                "popularity": 1.233615,
                "id": 357681,
                "backdrop_path": "/htyN1EfbSsPbODZcgDfdScKgwRB.jpg",
                "overview": "Hitting the Apex is the inside story of six fighters – six of the fastest motorcycle racers of all time – and of the fates that awaited them at the peak of the sport. It’s the story of what is at stake for all of them: all that can be won, and all that can be lost, when you go chasing glory at over two hundred miles an hour – on a motorcycle.",
                "poster_path": "/8KW3fARQ2CYs7ra4obWCIsUdXtB.jpg"
              },
              {
                "character": "Himself (uncredited)",
                "credit_id": "55f5eb119251413ed9000665",
                "release_date": "2008-09-20",
                "vote_count": 0,
                "video": false,
                "adult": false,
                "vote_average": 0,
                "title": "His Highness Hollywood",
                "genre_ids": [],
                "original_language": "en",
                "original_title": "His Highness Hollywood",
                "popularity": 1.361954,
                "id": 319714,
                "backdrop_path": null,
                "overview": "Ian Halperin poses as a gay wannabe actor and member of the Israeli royal family to get an inside look at the Hollywood industry in this companion film to his well-received book, Hollywood Undercover: Revealing the Sordid Secrets of Tinseltown. Along the way, he receives a promise from the Church of Scientology to cure his homosexuality and gets the inside scoop from numerous luminaries -- including Brad Pitt, Jay Leno and Leonardo DiCaprio.",
                "poster_path": null
              },
              {
                "character": "Himself",
                "credit_id": "5630ca08c3a3681b4d011675",
                "release_date": "2015-10-03",
                "vote_count": 18,
                "video": false,
                "adult": false,
                "vote_average": 6.2,
                "title": "The Audition",
                "genre_ids": [
                  35
                ],
                "original_language": "en",
                "original_title": "The Audition",
                "popularity": 1.368371,
                "id": 365717,
                "backdrop_path": null,
                "overview": "A short film promoting the opening of Melco-Crown is movie-themed resort and casino in Macau.",
                "poster_path": "/t1PDIeDpJGgI9JPqIRMuG7WDdId.jpg"
              },
              {
                "character": "Rory Devaney / Francis Austin McGuire",
                "credit_id": "52fe43c4c3a36847f806e2b9",
                "release_date": "1997-03-12",
                "vote_count": 255,
                "video": false,
                "adult": false,
                "vote_average": 5.8,
                "title": "The Devil is Own",
                "genre_ids": [
                  80,
                  18,
                  53
                ],
                "original_language": "en",
                "original_title": "The Devil is Own",
                "popularity": 2.412252,
                "id": 4477,
                "backdrop_path": "/xRYvkp0EQyUzDti2m8PKgD5cZDS.jpg",
                "overview": "Frankie McGuire, one of the IRA is deadliest assassins, draws an American family into the crossfire of terrorism. But when he is sent to the U.S. to buy weapons, Frankie is housed with the family of Tom OMeara, a New York cop who knows nothing about Frankie is real identity. Their surprising friendship, and Tom is growing suspicions, forces Frankie to choose between the promise of peace or a lifetime of murder.",
                "poster_path": "/7XIxdjhaoDIiv7slEiOhBEzMtqu.jpg"
              },
              {
                "character": "Sinbad",
                "credit_id": "56b82551c3a36806fc00e0f1",
                "release_date": "2003-11-18",
                "vote_count": 3,
                "video": false,
                "adult": false,
                "vote_average": 6.7,
                "title": "Cyclops Island",
                "genre_ids": [],
                "original_language": "en",
                "original_title": "Cyclops Island",
                "popularity": 1.032389,
                "id": 381690,
                "backdrop_path": null,
                "overview": "Marina, Sinbad and his crew are resting on a small island. They soon find out they are not alone.",
                "poster_path": "/dNGICcAcklEseadvjK3VBSkHABp.jpg"
              },
              {
                "character": "The Madman",
                "credit_id": "567ae7ebc3a3684bcc0001be",
                "release_date": "2011-12-06",
                "vote_count": 2,
                "video": false,
                "adult": false,
                "vote_average": 8,
                "title": "Touch of Evil",
                "genre_ids": [],
                "original_language": "en",
                "original_title": "Touch of Evil",
                "popularity": 1.1878,
                "id": 373929,
                "backdrop_path": "/wFzp50KscYSuimMTm7oj8keiPAt.jpg",
                "overview": "Some of 2011 is stand-out film actors appear in \"a video gallery of cinematic villainy\" for New York Times Magazine.",
                "poster_path": "/aB4kg0tTEH56DwqmzCPR3Nlzx4E.jpg"
              },
              {
                "character": "Lieutenant Aldo \"The Apache\" Raine",
                "credit_id": "52fe46f29251416c75088c69",
                "release_date": "2009-08-18",
                "vote_count": 5682,
                "video": false,
                "adult": false,
                "vote_average": 7.8,
                "title": "Inglourious Basterds",
                "genre_ids": [
                  28,
                  18,
                  53,
                  10752
                ],
                "original_language": "en",
                "original_title": "Inglourious Basterds",
                "popularity": 8.152189,
                "id": 16869,
                "backdrop_path": "/7nF6B9yCEq1ZCT82sGJVtNxOcl5.jpg",
                "overview": "In Nazi-occupied France during World War II, a group of Jewish-American soldiers known as \"The Basterds\" are chosen specifically to spread fear throughout the Third Reich by scalping and brutally killing Nazis. The Basterds, lead by Lt. Aldo Raine soon cross paths with a French-Jewish teenage girl who runs a movie theater in Paris which is targeted by the soldiers.",
                "poster_path": "/ai0LXkzVM3hMjDhvFdKMUemoBe.jpg"
              },
              {
                "character": "Max Vatan",
                "credit_id": "5789f699c3a36841e3001936",
                "release_date": "2016-11-17",
                "vote_count": 1124,
                "video": false,
                "adult": false,
                "vote_average": 6.5,
                "title": "Allied",
                "genre_ids": [
                  28,
                  18,
                  53,
                  10749,
                  10752
                ],
                "original_language": "en",
                "original_title": "Allied",
                "popularity": 3.517962,
                "id": 369885,
                "backdrop_path": "/tC0tVH5KQhCwMlddnyA3iWOSuBA.jpg",
                "overview": "In 1942, an intelligence officer in North Africa encounters a female French Resistance fighter on a deadly mission behind enemy lines. When they reunite in London, their relationship is tested by the pressures of war.",
                "poster_path": "/nzXzLFTnd0Zb3ExfhOxlQgizgSu.jpg"
              },
              {
                "character": "Narrator (voice)",
                "credit_id": "57e2a101c3a3683a6c0002a5",
                "release_date": "2016-10-07",
                "vote_count": 4,
                "video": false,
                "adult": false,
                "vote_average": 5.5,
                "title": "Voyage of Time: The IMAX Experience",
                "genre_ids": [
                  99
                ],
                "original_language": "en",
                "original_title": "Voyage of Time: The IMAX Experience",
                "popularity": 1.15656,
                "id": 417198,
                "backdrop_path": null,
                "overview": "A celebration of the universe, displaying the whole of time, from its start to its final collapse. This film examines all that occurred to prepare the world that stands before us now: science and spirit, birth and death, the grand cosmos and the minute life systems of our planet. (Limited release IMAX version with narration by Brad Pitt.)",
                "poster_path": "/nnjUMLtG2ifo3f9kYWgTeDNObfL.jpg"
              },
              {
                "character": "Gen. Glen McMahon",
                "credit_id": "55cc4e9b925141764800222d",
                "release_date": "2017-05-26",
                "vote_count": 155,
                "video": false,
                "adult": false,
                "vote_average": 6.1,
                "title": "War Machine",
                "genre_ids": [
                  35,
                  18,
                  10752
                ],
                "original_language": "en",
                "original_title": "War Machine",
                "popularity": 4.096339,
                "id": 354287,
                "backdrop_path": "/eQsellX1IeGaIjv1w4JBzoOrvmf.jpg",
                "overview": "A rock star general bent on winning the “impossible” war in Afghanistan takes us inside the complex machinery of modern war. Inspired by the true story of General Stanley McChrystal.",
                "poster_path": "/eEy3AYVAUFLaRqCOV95zYTDkNKL.jpg"
              },
              {
                "character": "Teddy Johnson",
                "credit_id": "57f2dee39251410c280034d9",
                "release_date": "1988-10-24",
                "vote_count": 1,
                "video": false,
                "adult": false,
                "vote_average": 0,
                "title": "A Stoning in Fulham County",
                "genre_ids": [
                  80,
                  18,
                  53
                ],
                "original_language": "en",
                "original_title": "A Stoning in Fulham County",
                "popularity": 1.381674,
                "id": 209340,
                "backdrop_path": null,
                "overview": "Religious beliefs clash with the law when an Amish infant is killed in a rural community.",
                "poster_path": "/aOun7weNkxTn9ZOPTyFZOdaWIkd.jpg"
              },
              {
                "character": "Billy",
                "credit_id": "566b1da79251412dbc000476",
                "release_date": "1992-01-18",
                "vote_count": 0,
                "video": false,
                "adult": false,
                "vote_average": 0,
                "title": "Two-Fisted Tales",
                "genre_ids": [
                  37,
                  10752,
                  10770
                ],
                "original_language": "en",
                "original_title": "Two-Fisted Tales",
                "popularity": 1.375146,
                "id": 213503,
                "backdrop_path": null,
                "overview": "The foul-mouthed, wheelchair-bound Mr. Rush introduces three adventure tales based on the EC comics of the 1950 is. A 1992 star-studded made-for-tv film which was an attempt to launch a second series in the mold of Tales From The Crypt. When this failed to launch, the three tales were re-edited and shown as Crypt episodes.",
                "poster_path": "/walRAzpkYoAtm90FKIpIzD7Px1a.jpg"
              },
              {
                "character": "Waiter (uncredited)",
                "credit_id": "58d4c1ea92514103d200fea2",
                "release_date": "1987-10-23",
                "vote_count": 25,
                "video": false,
                "adult": false,
                "vote_average": 6,
                "title": "No Man is Land",
                "genre_ids": [
                  28,
                  18,
                  53
                ],
                "original_language": "en",
                "original_title": "No Man is Land",
                "popularity": 2.56362,
                "id": 34379,
                "backdrop_path": "/dpwWoZhd1pjBdQedgW92EjI7p6h.jpg",
                "overview": "A rookie cop goes undercover to infiltrate a gang of car thieves led by smooth and charming Ted. The rookie becomes too involved and starts to enjoy the thrill and lifestyle of the game, and becomes romanticly involved with the leaders sister.",
                "poster_path": "/eIkBNUmHLAe1rtn9lPXGgBYSaOC.jpg"
              },
              {
                "character": "Roy McBride",
                "credit_id": "58ebe95d9251413ce4030cd7",
                "release_date": "2018-12-31",
                "vote_count": 0,
                "video": false,
                "adult": false,
                "vote_average": 0,
                "title": "Ad Astra",
                "genre_ids": [
                  878,
                  53
                ],
                "original_language": "en",
                "original_title": "Ad Astra",
                "popularity": 1.220077,
                "id": 419704,
                "backdrop_path": null,
                "overview": "Army Corps engineer Roy McBride embarks on a mission across the galaxy to discover the truth about his father, who disappeared in space 20 years ago while searching for signs of alien life. Though he was once presumed dead, new evidence suggests Roy is father may still be alive, hiding within an abandoned power plant on a distant planet - and that he could potentially pose a dangerous threat to the entire universe.",
                "poster_path": null
              },
              {
                "character": "Himself",
                "credit_id": "593210729251417ddc002525",
                "release_date": "2014-02-11",
                "vote_count": 1,
                "video": false,
                "adult": false,
                "vote_average": 7,
                "title": "Truth of the Situation: Making The Counselor",
                "genre_ids": [
                  99
                ],
                "original_language": "en",
                "original_title": "Truth of the Situation: Making The Counselor",
                "popularity": 1.071912,
                "id": 460224,
                "backdrop_path": null,
                "overview": "A 13-segment documentary examining production aspects of \"The Counselor\" (2013):\r Tragic Consequences\r A Different Southwest\r The Counselor\r Pool Party\r Reiner\r Laura\r Malkina\r Polo Club\r Lensing the Dark World\r Westray\r Downward Spiral\r The Cheetahs\r The Bolito",
                "poster_path": null
              },
              {
                "character": "Brad Pitt (uncredited)",
                "credit_id": "593e5891c3a3680f1402babb",
                "release_date": "1999-09-30",
                "vote_count": 997,
                "video": false,
                "adult": false,
                "vote_average": 7.3,
                "title": "Being John Malkovich",
                "genre_ids": [
                  35,
                  18,
                  14
                ],
                "original_language": "en",
                "original_title": "Being John Malkovich",
                "popularity": 2.509429,
                "id": 492,
                "backdrop_path": "/86xWKTTGM0Bq4PIlRgIo5gxRcr5.jpg",
                "overview": "Spike Jonze’s debut feature film is a love story mix of comedy and fantasy. The story is about an unsuccessful puppeteer named Craig, who one day at work finds a portal into the head of actor John Malkovich. The portal soon becomes a passion for anybody who enters it’s mad and controlling world of overtaking another human body.",
                "poster_path": "/gLhl4MBEC6yHTInwV7TxV1D3FLp.jpg"
              },
              {
                "character": "Partygoer / Preppie Kid at Fight (uncredited)",
                "credit_id": "5953d01192514168bf00bf4b",
                "release_date": "1987-11-06",
                "vote_count": 69,
                "video": false,
                "adult": false,
                "vote_average": 6,
                "title": "Less Than Zero",
                "genre_ids": [
                  80,
                  18,
                  10749
                ],
                "original_language": "en",
                "original_title": "Less Than Zero",
                "popularity": 1.22054,
                "id": 13703,
                "backdrop_path": "/zRdK2OQ0BquK3mTrCu6AODiBtxi.jpg",
                "overview": "A college freshman returns to Los Angeles for the holidays at his ex-girlfriend is request, but discovers that his former best friend has an out-of-control drug habit.",
                "poster_path": "/8lgZSFuymoSMW3oDil135YU8Whq.jpg"
              },
              {
                "character": "background extra (uncredited)",
                "credit_id": "5953d22fc3a368352601e078",
                "release_date": "1987-08-14",
                "vote_count": 134,
                "video": false,
                "adult": false,
                "vote_average": 7,
                "title": "No Way Out",
                "genre_ids": [
                  28,
                  18,
                  53
                ],
                "original_language": "en",
                "original_title": "No Way Out",
                "popularity": 1.918446,
                "id": 10083,
                "backdrop_path": "/8UlhYT3vwoj9q2bcD8KshJqzXff.jpg",
                "overview": "Navy Lt. Tom Farrell meets a young woman, Susan Atwell , and they share a passionate fling. Farrell then finds out that his superior, Defense Secretary David Brice, is also romantically involved with Atwell. When the young woman turns up dead, Farrell is put in charge of the murder investigation. He begins to uncover shocking clues about the case, but when details of his encounter with Susan surface, he becomes a suspect as well.",
                "poster_path": "/6XoG37a4U7Jum8ChYoMHq6l5NQQ.jpg"
              },
              {
                "character": "",
                "credit_id": "5967b06392514132e1005850",
                "release_date": "2019-12-31",
                "vote_count": 0,
                "video": false,
                "adult": false,
                "vote_average": 0,
                "title": "Untitled Manson Murders Project",
                "genre_ids": [
                  80,
                  18
                ],
                "original_language": "en",
                "original_title": "Untitled Manson Murders Project",
                "popularity": 1.1521,
                "id": 466272,
                "backdrop_path": null,
                "overview": "Plot unknown. The film will focus on the Manson murders that took place in California in 1969.",
                "poster_path": null
              }
            ],
            "crew": [
              {
                "id": 76203,
                "department": "Production",
                "original_language": "en",
                "original_title": "12 Years a Slave",
                "job": "Producer",
                "overview": "In the pre-Civil War United States, Solomon Northup, a free black man from upstate New York, is abducted and sold into slavery. Facing cruelty as well as unexpected kindnesses Solomon struggles not only to stay alive, but to retain his dignity. In the twelfth year of his unforgettable odyssey, Solomon’s chance meeting with a Canadian abolitionist will forever alter his life.",
                "vote_count": 3284,
                "video": false,
                "poster_path": "/kb3X943WMIJYVg4SOAyK0pmWL5D.jpg",
                "backdrop_path": "/xnRPoFI7wzOYviw3PmoG94X2Lnc.jpg",
                "title": "12 Years a Slave",
                "popularity": 6.62674,
                "genre_ids": [
                  18,
                  36
                ],
                "vote_average": 7.9,
                "adult": false,
                "release_date": "2013-10-18",
                "credit_id": "52fe492cc3a368484e11dfe1"
              },
              {
                "id": 113833,
                "department": "Production",
                "original_language": "en",
                "original_title": "The Normal Heart",
                "job": "Producer",
                "overview": "The story of the onset of the HIV-AIDS crisis in New York City in the early 1980s, taking an unflinching look at the nation is sexual politics as gay activists and their allies in the medical community fight to expose the truth about the burgeoning epidemic to a city and nation in denial.",
                "vote_count": 278,
                "video": false,
                "poster_path": "/fIf4nLpWHK8BsbH76fPgMbLSjuU.jpg",
                "backdrop_path": "/i5r9aTDKo1y6paUX1PHsPhZstZk.jpg",
                "title": "The Normal Heart",
                "popularity": 1.469766,
                "genre_ids": [
                  18
                ],
                "vote_average": 7.8,
                "adult": false,
                "release_date": "2014-05-25",
                "credit_id": "52fe4b3fc3a36847f81f9f89"
              },
              {
                "id": 174349,
                "department": "Production",
                "original_language": "en",
                "original_title": "Big Men",
                "job": "Executive Producer",
                "overview": "For her latest industrial exposé, Rachel Boynton (Our Brand Is Crisis) gained unprecedented access to Africa is oil companies. The result is a gripping account of the costly personal tolls levied when American corporate interests pursue oil in places like Ghana and the Niger River Delta. Executive produced by Steven Shainberg and Brad Pitt, Big Men investigates the caustic blend of ambition, corruption and greed that threatens to exacerbate Africa’s resource curse.",
                "vote_count": 7,
                "video": false,
                "poster_path": "/q5uKDMl1PXIeMoD10CTbXST7XoN.jpg",
                "backdrop_path": "/ieWzXfEx3AU9QANrGkbqeXgLeNH.jpg",
                "title": "Big Men",
                "popularity": 1.214663,
                "genre_ids": [
                  99
                ],
                "vote_average": 6.4,
                "adult": false,
                "release_date": "2014-03-14",
                "credit_id": "52fe4d49c3a36847f8258cf3"
              },
              {
                "id": 218277,
                "department": "Production",
                "original_language": "en",
                "original_title": "Pretty/Handsome",
                "job": "Executive Producer",
                "overview": "A married father of two tells his wife and teenage sons that he is transsexual.",
                "vote_count": 0,
                "video": false,
                "poster_path": "/hiASAaSle8sjUZ9BHs4XrA30shS.jpg",
                "backdrop_path": null,
                "title": "Pretty/Handsome",
                "popularity": 1.418899,
                "genre_ids": [
                  18
                ],
                "vote_average": 0,
                "adult": false,
                "release_date": "2008-06-01",
                "credit_id": "52fe4e48c3a368484e2183d1"
              },
              {
                "id": 60308,
                "department": "Production",
                "original_language": "en",
                "original_title": "Moneyball",
                "job": "Producer",
                "overview": "The story of Oakland Athletics general manager Billy Beane is successful attempt to put together a baseball team on a budget, by employing computer-generated analysis to draft his players.",
                "vote_count": 1272,
                "video": false,
                "poster_path": "/3oAa8mJJ97CH9AeGEY6vjAxqcvZ.jpg",
                "backdrop_path": "/pxlaSPleGSNI8jJZYGhXH5LdI1B.jpg",
                "title": "Moneyball",
                "popularity": 3.796399,
                "genre_ids": [
                  18
                ],
                "vote_average": 7,
                "adult": false,
                "release_date": "2011-09-22",
                "credit_id": "5383b2540e0a2624bd00d335"
              },
              {
                "id": 1422,
                "department": "Production",
                "original_language": "en",
                "original_title": "The Departed",
                "job": "Producer",
                "overview": "To take down South Boston is Irish Mafia, the police send in one of their own to infiltrate the underworld, not realizing the syndicate has done likewise. While an undercover cop curries favor with the mob kingpin, a career criminal rises through the police ranks. But both sides soon discover there is a mole among them.",
                "vote_count": 3895,
                "video": false,
                "poster_path": "/tGLO9zw5ZtCeyyEWgbYGgsFxC6i.jpg",
                "backdrop_path": "/8Od5zV7Q7zNOX0y9tyNgpTmoiGA.jpg",
                "title": "The Departed",
                "popularity": 5.68531,
                "genre_ids": [
                  80,
                  18,
                  53
                ],
                "vote_average": 7.9,
                "adult": false,
                "release_date": "2006-10-05",
                "credit_id": "52fe42f5c3a36847f802ff41"
              },
              {
                "id": 1988,
                "department": "Production",
                "original_language": "en",
                "original_title": "A Mighty Heart",
                "job": "Producer",
                "overview": "Based on Mariane Pearl is account of the terrifying and unforgettable story of her husband, Wall Street Journal reporter Danny Pearl is life and death.",
                "vote_count": 89,
                "video": false,
                "poster_path": "/eFhsNdOjLk5sAEaEMcvRpnKc19c.jpg",
                "backdrop_path": "/iAiiTbxkTdpxlc1FHLzGQXnYHP9.jpg",
                "title": "A Mighty Heart",
                "popularity": 2.099608,
                "genre_ids": [
                  18,
                  53
                ],
                "vote_average": 6.7,
                "adult": false,
                "release_date": "2007-01-01",
                "credit_id": "52fe4329c3a36847f803ee3b"
              },
              {
                "id": 4512,
                "department": "Production",
                "original_language": "en",
                "original_title": "The Assassination of Jesse James by the Coward Robert Ford",
                "job": "Producer",
                "overview": "Outlaw Jesse James is rumored be the fastest gun in the West. An eager recruit into James notorious gang, Robert Ford eventually grows jealous of the famed outlaw and, when Robert and his brother sense an opportunity to kill James, their murderous action elevates their target to near mythical status.",
                "vote_count": 717,
                "video": false,
                "poster_path": "/lSFYLoaL4eW7Q5VQ7SZQP4EHRCt.jpg",
                "backdrop_path": "/zAh7HC8Tk2D0q3VdMOP6boqNG9N.jpg",
                "title": "The Assassination of Jesse James by the Coward Robert Ford",
                "popularity": 3.294203,
                "genre_ids": [
                  28,
                  18,
                  37
                ],
                "vote_average": 7,
                "adult": false,
                "release_date": "2007-09-02",
                "credit_id": "52fe43c7c3a36847f806ef0b"
              },
              {
                "id": 23483,
                "department": "Production",
                "original_language": "en",
                "original_title": "Kick-Ass",
                "job": "Producer",
                "overview": "Dave Lizewski is an unnoticed high school student and comic book fan who one day decides to become a super-hero, even though he has no powers, training or meaningful reason to do so.",
                "vote_count": 4202,
                "video": false,
                "poster_path": "/yZFrniO6qSwjTCosStXweYtczGT.jpg",
                "backdrop_path": "/qf59pVUHbY9z0Ke9Jg6HQghNJhM.jpg",
                "title": "Kick-Ass",
                "popularity": 3.916197,
                "genre_ids": [
                  28,
                  80
                ],
                "vote_average": 7,
                "adult": false,
                "release_date": "2010-03-22",
                "credit_id": "52fe446ac3a368484e021e13"
              },
              {
                "id": 7510,
                "department": "Production",
                "original_language": "en",
                "original_title": "Running with Scissors",
                "job": "Producer",
                "overview": "Young Augusten Burroughs absorbs experiences that could make for a shocking memoir: the son of an alcoholic father and an unstable mother, he is handed off to his mother is therapist, Dr. Finch, and spends his adolescent years as a member of Finch is bizarre extended family.",
                "vote_count": 72,
                "video": false,
                "poster_path": "/pYFF3iMWDPcwXKpRM0GLIsnPf22.jpg",
                "backdrop_path": "/avrYhsVr9MoFaCNCfPcj9sQfC6n.jpg",
                "title": "Running with Scissors",
                "popularity": 1.549846,
                "genre_ids": [
                  35,
                  18
                ],
                "vote_average": 5.7,
                "adult": false,
                "release_date": "2006-10-27",
                "credit_id": "52fe4481c3a36847f809a065"
              },
              {
                "id": 24420,
                "department": "Production",
                "original_language": "en",
                "original_title": "The Time Traveler is Wife",
                "job": "Executive Producer",
                "overview": "Due to a genetic disorder, handsome librarian Henry DeTamble involuntarily zips through time, appearing at various moments in the life of his true love, the beautiful artist Clare Abshire.",
                "vote_count": 717,
                "video": false,
                "poster_path": "/ayGp00uS6XRrNfbR59XWrJh9jpC.jpg",
                "backdrop_path": "/2Po4fvS46AAshzDZGDdjkrVxPo8.jpg",
                "title": "The Time Traveler is Wife",
                "popularity": 3.201308,
                "genre_ids": [
                  18,
                  14,
                  10749
                ],
                "vote_average": 6.7,
                "adult": false,
                "release_date": "2009-08-14",
                "credit_id": "52fe4495c3a368484e02af99"
              },
              {
                "id": 38167,
                "department": "Production",
                "original_language": "en",
                "original_title": "Eat Pray Love",
                "job": "Executive Producer",
                "overview": "Liz Gilbert had everything a modern woman is supposed to dream of having – a husband, a house and a successful career – yet like so many others, she found herself lost, confused and searching for what she really wanted in life. Newly divorced and at a crossroads, Gilbert steps out of her comfort zone, risking everything to change her life, embarking on a journey around the world that becomes a quest for self-discovery. In her travels, she discovers the true pleasure of nourishment by eating in Italy, the power of prayer in India and, finally and unexpectedly, the inner peace and balance of true love in Bali.",
                "vote_count": 568,
                "video": false,
                "poster_path": "/s57E4AfPIU1fxwpGGRahk6A0DUl.jpg",
                "backdrop_path": "/2fwHVLvh6kdwCujsMwtNmwRJAf1.jpg",
                "title": "Eat Pray Love",
                "popularity": 2.400653,
                "genre_ids": [
                  18
                ],
                "vote_average": 5.8,
                "adult": false,
                "release_date": "2010-08-12",
                "credit_id": "52fe469c9251416c91059ecf"
              },
              {
                "id": 64689,
                "department": "Production",
                "original_language": "en",
                "original_title": "Killing Them Softly",
                "job": "Producer",
                "overview": "Jackie Cogan is an enforcer hired to restore order after three dumb guys rob a Mob protected card game, causing the local criminal economy to collapse.",
                "vote_count": 695,
                "video": false,
                "poster_path": "/3WPa43edrQeLRFgXdiLiWnWV34a.jpg",
                "backdrop_path": "/jikIWGfMFq8YxYziXVFyqBI7e3o.jpg",
                "title": "Killing Them Softly",
                "popularity": 2.22385,
                "genre_ids": [
                  80,
                  53
                ],
                "vote_average": 5.8,
                "adult": false,
                "release_date": "2012-09-20",
                "credit_id": "52fe46e4c3a368484e0a9aa7"
              },
              {
                "id": 72190,
                "department": "Production",
                "original_language": "en",
                "original_title": "World War Z",
                "job": "Producer",
                "overview": "Life for former United Nations investigator Gerry Lane and his family seems content. Suddenly, the world is plagued by a mysterious infection turning whole human populations into rampaging mindless zombies. After barely escaping the chaos, Lane is persuaded to go on a mission to investigate this disease. What follows is a perilous trek around the world where Lane must brave horrific dangers and long odds to find answers before human civilization falls.",
                "vote_count": 5045,
                "video": false,
                "poster_path": "/Ha5t0J21eyiq6Az1EXzx0iwsGH.jpg",
                "backdrop_path": "/xMOQVYLeIKBXenJ9KMeasj7S64y.jpg",
                "title": "World War Z",
                "popularity": 7.710324,
                "genre_ids": [
                  28,
                  18,
                  27,
                  878,
                  53
                ],
                "vote_average": 6.7,
                "adult": false,
                "release_date": "2013-06-20",
                "credit_id": "52fe485dc3a368484e0f50f9"
              },
              {
                "id": 301502,
                "department": "Production",
                "original_language": "en",
                "original_title": "Blonde",
                "job": "Producer",
                "overview": "A chronicle of the inner life of Marilyn Monroe.",
                "vote_count": 0,
                "video": false,
                "poster_path": null,
                "backdrop_path": null,
                "title": "Blonde",
                "popularity": 1.285297,
                "genre_ids": [
                  18
                ],
                "vote_average": 0,
                "adult": false,
                "release_date": "2018-01-01",
                "credit_id": "545c379ec3a368536b002903"
              },
              {
                "id": 228150,
                "department": "Production",
                "original_language": "en",
                "original_title": "Fury",
                "job": "Executive Producer",
                "overview": "Last months of World War II in April 1945. As the Allies make their final push in the European Theater, a battle-hardened U.S. Army sergeant in the 2nd Armored Division named Wardaddy commands a Sherman tank called \"Fury\" and its five-man crew on a deadly mission behind enemy lines. Outnumbered and outgunned, Wardaddy and his men face overwhelming odds in their heroic attempts to strike at the heart of Nazi Germany.",
                "vote_count": 3570,
                "video": false,
                "poster_path": "/pfte7wdMobMF4CVHuOxyu6oqeeA.jpg",
                "backdrop_path": "/pKawqrtCBMmxarft7o1LbEynys7.jpg",
                "title": "Fury",
                "popularity": 17.802127,
                "genre_ids": [
                  28,
                  18,
                  10752
                ],
                "vote_average": 7.4,
                "adult": false,
                "release_date": "2014-10-15",
                "credit_id": "5477f63d92514103b80010c0"
              },
              {
                "id": 273895,
                "department": "Production",
                "original_language": "en",
                "original_title": "Selma",
                "job": "Executive Producer",
                "overview": "\"Selma,\" as in Alabama, the place where segregation in the South was at its worst, leading to a march that ended in violence, forcing a famous statement by President Lyndon B. Johnson that ultimately led to the signing of the Civil Rights Act.",
                "vote_count": 773,
                "video": false,
                "poster_path": "/9FK5Jc3uIRXOmMWT6GmRAp9JyQ2.jpg",
                "backdrop_path": "/dMKslph3Qw0tPvCHjwSvIdivf0V.jpg",
                "title": "Selma",
                "popularity": 3.031758,
                "genre_ids": [
                  18,
                  36
                ],
                "vote_average": 7.4,
                "adult": false,
                "release_date": "2014-12-25",
                "credit_id": "54aeb6ac9251417aa7000998"
              },
              {
                "id": 344025,
                "department": "Production",
                "original_language": "en",
                "original_title": "Americanah",
                "job": "Producer",
                "overview": "Two Nigerian teenagers, Ifemelu and Obinze, fall in love at a young age but get separated when Ifemelu goes to America for school and Obinze, in a post 9/11 world, gets stuck in London.",
                "vote_count": 0,
                "video": false,
                "poster_path": null,
                "backdrop_path": null,
                "title": "Americanah",
                "popularity": 1.08788,
                "genre_ids": [
                  18,
                  10749
                ],
                "vote_average": 0,
                "adult": false,
                "release_date": "2017-07-14",
                "credit_id": "5590e8bd925141757a0003a7"
              },
              {
                "id": 245706,
                "department": "Production",
                "original_language": "en",
                "original_title": "True Story",
                "job": "Executive Producer",
                "overview": "A drama centered around the relationship between journalist Michael Finkel and Christian Longo, an FBI Most Wanted List murderer who for years lived outside the U.S. under Finkel is name.",
                "vote_count": 464,
                "video": false,
                "poster_path": "/2kJCtB5FPfNH3LDYv2vINrtgCRD.jpg",
                "backdrop_path": "/cZmWjJ9V6tJc12Hxq4Utp42u08V.jpg",
                "title": "True Story",
                "popularity": 2.712028,
                "genre_ids": [
                  80,
                  18,
                  9648
                ],
                "vote_average": 6,
                "adult": false,
                "release_date": "2015-04-17",
                "credit_id": "55a5c16a9251410996000596"
              },
              {
                "id": 15325,
                "department": "Production",
                "original_language": "en",
                "original_title": "God Grew Tired of Us",
                "job": "Executive Producer",
                "overview": "GOD GREW TIRED OF US explores the indomitable spirit of three “Lost Boys” from the Sudan who leave their homeland, triumph over seemingly insurmountable adversities and move to America, where they build active and fulfilling new lives but remain deeply committed to helping the friends and family they have left behind.",
                "vote_count": 10,
                "video": false,
                "poster_path": "/3L6lIJWdlc9FKjlWZw6NeVgNV6H.jpg",
                "backdrop_path": "/iGoCheUeBtv116TWbKnyWpaXBIB.jpg",
                "title": "God Grew Tired of Us",
                "popularity": 1.388883,
                "genre_ids": [
                  99
                ],
                "vote_average": 7.4,
                "adult": false,
                "release_date": "2007-01-12",
                "credit_id": "58d06e1f92514159d10013f3"
              },
              {
                "id": 13574,
                "department": "Production",
                "original_language": "en",
                "original_title": "Year of the Dog",
                "job": "Executive Producer",
                "overview": "A secretary is life changes in unexpected ways after her dog dies.",
                "vote_count": 21,
                "video": false,
                "poster_path": "/e50H8OEShMbIJwqHdbSvP0Gcb9J.jpg",
                "backdrop_path": "/9f7cNLWRL8ookzUZYWvyhueboF1.jpg",
                "title": "Year of the Dog",
                "popularity": 1.850182,
                "genre_ids": [
                  35,
                  18,
                  10749
                ],
                "vote_average": 5.1,
                "adult": false,
                "release_date": "2007-04-13",
                "credit_id": "58d06caa92514159d6001183"
              },
              {
                "id": 354287,
                "department": "Production",
                "original_language": "en",
                "original_title": "War Machine",
                "job": "Producer",
                "overview": "A rock star general bent on winning the “impossible” war in Afghanistan takes us inside the complex machinery of modern war. Inspired by the true story of General Stanley McChrystal.",
                "vote_count": 155,
                "video": false,
                "poster_path": "/eEy3AYVAUFLaRqCOV95zYTDkNKL.jpg",
                "backdrop_path": "/eQsellX1IeGaIjv1w4JBzoOrvmf.jpg",
                "title": "War Machine",
                "popularity": 4.096339,
                "genre_ids": [
                  35,
                  18,
                  10752
                ],
                "vote_average": 6.1,
                "adult": false,
                "release_date": "2017-05-26",
                "credit_id": "58cf9164c3a36850e902fabe"
              },
              {
                "id": 425980,
                "department": "Production",
                "original_language": "en",
                "original_title": "Brad is Status",
                "job": "Producer",
                "overview": "A father takes his son to tour colleges on the East Coast and meets up with an old friend who makes him feel inferior about his life is choices.",
                "vote_count": 0,
                "video": false,
                "poster_path": null,
                "backdrop_path": null,
                "title": "Brad is Status",
                "popularity": 1.301739,
                "genre_ids": [],
                "vote_average": 0,
                "adult": false,
                "release_date": "2017-10-26",
                "credit_id": "58cf91c09251415a41032db7"
              },
              {
                "id": 336002,
                "department": "Production",
                "original_language": "en",
                "original_title": "World War Z 2",
                "job": "Producer",
                "overview": "The plot is currently unknown.",
                "vote_count": 4,
                "video": false,
                "poster_path": null,
                "backdrop_path": null,
                "title": "World War Z 2",
                "popularity": 1.52883,
                "genre_ids": [
                  28,
                  27,
                  53
                ],
                "vote_average": 0,
                "adult": false,
                "release_date": "2019-12-31",
                "credit_id": "58cf92069251415a61034a5b"
              },
              {
                "id": 314095,
                "department": "Production",
                "original_language": "en",
                "original_title": "The Lost City of Z",
                "job": "Executive Producer",
                "overview": "At the dawn of the 20th century, British explorer Percy Fawcett journeys into the Amazon, where he discovers evidence of a previously unknown, advanced civilization that may have once inhabited the region. Despite being ridiculed by the scientific establishment, which views indigenous populations as savages, the determined Fawcett, supported by his devoted wife, son, and aide-de-camp, returns to his beloved jungle in an attempt to prove his case.",
                "vote_count": 315,
                "video": false,
                "poster_path": "/uLHorVHuWQZ1HugTp0bbD19jef7.jpg",
                "backdrop_path": "/dAQzSsITJVxyk9ChqPLyBEwtGuC.jpg",
                "title": "The Lost City of Z",
                "popularity": 13.940931,
                "genre_ids": [
                  28,
                  12,
                  18,
                  36
                ],
                "vote_average": 6.1,
                "adult": false,
                "release_date": "2017-03-15",
                "credit_id": "58cf92ffc3a36850e902fc08"
              },
              {
                "id": 86822,
                "department": "Production",
                "original_language": "en",
                "original_title": "Voyage of Time: Life is Journey",
                "job": "Producer",
                "overview": "A celebration of the universe, displaying the whole of time, from its start to its final collapse. This film examines all that occurred to prepare the world that stands before us now: science and spirit, birth and death, the grand cosmos and the minute life systems of our planet. (Wide release version with narration by Cate Blanchett.)",
                "vote_count": 21,
                "video": false,
                "poster_path": "/lfdinlGEkAwZGa4FOxKN6kMAt61.jpg",
                "backdrop_path": "/ysTRZL56VFtvAIeFG9iXelm1Ywf.jpg",
                "title": "Voyage of Time: Life is Journey",
                "popularity": 1.612537,
                "genre_ids": [
                  99,
                  18
                ],
                "vote_average": 5.5,
                "adult": false,
                "release_date": "2017-04-13",
                "credit_id": "58cf933ac3a36811ce002515"
              },
              {
                "id": 376867,
                "department": "Production",
                "original_language": "en",
                "original_title": "Moonlight",
                "job": "Executive Producer",
                "overview": "The tender, heartbreaking story of a young man’s struggle to find himself, told across three defining chapters in his life as he experiences the ecstasy, pain, and beauty of falling in love, while grappling with his own sexuality.",
                "vote_count": 1482,
                "video": false,
                "poster_path": "/qAwFbszz0kRyTuXmMeKQZCX3Q2O.jpg",
                "backdrop_path": "/1ytaxWeVHDYtb7KPkrn3GNtDJdF.jpg",
                "title": "Moonlight",
                "popularity": 5.737014,
                "genre_ids": [
                  18
                ],
                "vote_average": 7.3,
                "adult": false,
                "release_date": "2016-10-21",
                "credit_id": "58cf93e19251415a74033ed4"
              },
              {
                "id": 417198,
                "department": "Production",
                "original_language": "en",
                "original_title": "Voyage of Time: The IMAX Experience",
                "job": "Producer",
                "overview": "A celebration of the universe, displaying the whole of time, from its start to its final collapse. This film examines all that occurred to prepare the world that stands before us now: science and spirit, birth and death, the grand cosmos and the minute life systems of our planet. (Limited release IMAX version with narration by Brad Pitt.)",
                "vote_count": 4,
                "video": false,
                "poster_path": "/nnjUMLtG2ifo3f9kYWgTeDNObfL.jpg",
                "backdrop_path": null,
                "title": "Voyage of Time: The IMAX Experience",
                "popularity": 1.15656,
                "genre_ids": [
                  99
                ],
                "vote_average": 5.5,
                "adult": false,
                "release_date": "2016-10-07",
                "credit_id": "58cf94f1c3a36851040304c9"
              },
              {
                "id": 59859,
                "department": "Production",
                "original_language": "en",
                "original_title": "Kick-Ass 2",
                "job": "Producer",
                "overview": "After Kick-Ass’ insane bravery inspires a new wave of self-made masked crusaders, he joins a patrol led by the Colonel Stars and Stripes. When these amateur superheroes are hunted down by Red Mist — reborn as The Mother Fucker — only the blade-wielding Hit-Girl can prevent their annihilation.",
                "vote_count": 2025,
                "video": false,
                "poster_path": "/pmdvrKYRdw7QxkLDaJzr6xMEqEZ.jpg",
                "backdrop_path": "/fGuoOLZeM4elFV8CBcPCLMc1fwj.jpg",
                "title": "Kick-Ass 2",
                "popularity": 3.635202,
                "genre_ids": [
                  28,
                  12,
                  80
                ],
                "vote_average": 6.3,
                "adult": false,
                "release_date": "2013-07-17",
                "credit_id": "58cf95a0c3a368508c0317d5"
              },
              {
                "id": 357681,
                "department": "Production",
                "original_language": "en",
                "original_title": "Hitting the Apex",
                "job": "Producer",
                "overview": "Hitting the Apex is the inside story of six fighters – six of the fastest motorcycle racers of all time – and of the fates that awaited them at the peak of the sport. It’s the story of what is at stake for all of them: all that can be won, and all that can be lost, when you go chasing glory at over two hundred miles an hour – on a motorcycle.",
                "vote_count": 18,
                "video": false,
                "poster_path": "/8KW3fARQ2CYs7ra4obWCIsUdXtB.jpg",
                "backdrop_path": "/htyN1EfbSsPbODZcgDfdScKgwRB.jpg",
                "title": "Hitting the Apex",
                "popularity": 1.233615,
                "genre_ids": [
                  99
                ],
                "vote_average": 8.3,
                "adult": false,
                "release_date": "2015-09-02",
                "credit_id": "58cf95e19251415a8b033147"
              },
              {
                "id": 277662,
                "department": "Production",
                "original_language": "en",
                "original_title": "Nightingale",
                "job": "Executive Producer",
                "overview": "A lonely war veteran psychologically unravels ahead of an old friend is impending visit.",
                "vote_count": 16,
                "video": false,
                "poster_path": "/9wQMUOCU253RzJ90ruZOFBlLkS3.jpg",
                "backdrop_path": "/yVtTGeyiR51MV35t48Pbs0exWsH.jpg",
                "title": "Nightingale",
                "popularity": 2.06242,
                "genre_ids": [
                  18
                ],
                "vote_average": 6.1,
                "adult": false,
                "release_date": "2015-05-29",
                "credit_id": "58cf963fc3a36850fb030af7"
              },
              {
                "id": 84284,
                "department": "Production",
                "original_language": "en",
                "original_title": "The House I Live In",
                "job": "Executive Producer",
                "overview": "In the past 40 years, the War on Drugs has accounted for 45 million arrests, made America the world is largest jailer, and destroyed impoverished communities at home and abroad. Yet drugs are cheaper, purer, and more available today than ever. Where did we go wrong, and what can be done?",
                "vote_count": 31,
                "video": false,
                "poster_path": "/9M0F27OnjPuJ2yiu6NCa1o4mkun.jpg",
                "backdrop_path": "/SxMEljSnWV896ORubNDAblGVpI.jpg",
                "title": "The House I Live In",
                "popularity": 1.202993,
                "genre_ids": [
                  99
                ],
                "vote_average": 7.4,
                "adult": false,
                "release_date": "2012-10-05",
                "credit_id": "58cf969bc3a36850c002c632"
              },
              {
                "id": 4475,
                "department": "Production",
                "original_language": "en",
                "original_title": "The Private Lives of Pippa Lee",
                "job": "Executive Producer",
                "overview": "The life you love may be your own.... The wife of a much older man finds herself attracted to their neighbour is son, who is closer to her age.",
                "vote_count": 48,
                "video": false,
                "poster_path": "/fVrYHI3YMPVk77DVdltDSxgL0Ew.jpg",
                "backdrop_path": "/6Q4Jrn2XCmhRYiid29Olu1BWovU.jpg",
                "title": "The Private Lives of Pippa Lee",
                "popularity": 2.031831,
                "genre_ids": [
                  35,
                  18,
                  10749
                ],
                "vote_average": 6,
                "adult": false,
                "release_date": "2009-07-07",
                "credit_id": "58d06c0592514159f6000ff0"
              },
              {
                "id": 8967,
                "department": "Production",
                "original_language": "en",
                "original_title": "The Tree of Life",
                "job": "Producer",
                "overview": "The impressionistic story of a Texas family in the 1950s. The film follows the life journey of the eldest son, Jack, through the innocence of childhood to his disillusioned adult years as he tries to reconcile a complicated relationship with his father. Jack finds himself a lost soul in the modern world, seeking answers to the origins and meaning of life while questioning the existence of faith.",
                "vote_count": 896,
                "video": false,
                "poster_path": "/ptDOdfOg0srtk4TGdeYbLqxv2nd.jpg",
                "backdrop_path": "/tBs9alJ2weUkOW83RkuBlz8Nlw6.jpg",
                "title": "The Tree of Life",
                "popularity": 3.161888,
                "genre_ids": [
                  18,
                  14
                ],
                "vote_average": 6.5,
                "adult": false,
                "release_date": "2011-05-18",
                "credit_id": "56392e8892514129fe0122e5"
              },
              {
                "id": 318846,
                "department": "Production",
                "original_language": "en",
                "original_title": "The Big Short",
                "job": "Producer",
                "overview": "The men who made millions from a global economic meltdown.",
                "vote_count": 2357,
                "video": false,
                "poster_path": "/p11Ftd4VposrAzthkhF53ifYZRl.jpg",
                "backdrop_path": "/jmlMLYEsYY1kRc5qHIyTdxCeVmZ.jpg",
                "title": "The Big Short",
                "popularity": 4.832312,
                "genre_ids": [
                  35,
                  18
                ],
                "vote_average": 7.3,
                "adult": false,
                "release_date": "2015-12-11",
                "credit_id": "568349e09251414f6300f7b7"
              },
              {
                "id": 314385,
                "department": "Production",
                "original_language": "en",
                "original_title": "By the Sea",
                "job": "Producer",
                "overview": "Set in France during the mid-1970s, Vanessa, a former dancer, and her husband Roland, an American writer, travel the country together. They seem to be growing apart, but when they linger in one quiet, seaside town they begin to draw close to some of its more vibrant inhabitants, such as a local bar/café-keeper and a hotel owner.",
                "vote_count": 138,
                "video": false,
                "poster_path": "/vctzmTinuLACl2PIFuPhTNkTc62.jpg",
                "backdrop_path": "/a2WCcsvWPZcqemlyKbbFEcxjfn0.jpg",
                "title": "By the Sea",
                "popularity": 2.778817,
                "genre_ids": [
                  18,
                  10749
                ],
                "vote_average": 5.4,
                "adult": false,
                "release_date": "2015-11-12",
                "credit_id": "56c309759251414b850017e4"
              },
              {
                "id": 384678,
                "department": "Production",
                "original_language": "en",
                "original_title": "He Wanted the Moon",
                "job": "Producer",
                "overview": "In the 1920s, Dr. Perry Baird, who was born in Texas and educated at Harvard, begins his career ascent in the field of medicine.",
                "vote_count": 0,
                "video": false,
                "poster_path": null,
                "backdrop_path": null,
                "title": "He Wanted the Moon",
                "popularity": 1.000411,
                "genre_ids": [
                  18
                ],
                "vote_average": 0,
                "adult": false,
                "release_date": "2017-07-14",
                "credit_id": "56d042d59251413e590059a3"
              },
              {
                "id": 387426,
                "department": "Production",
                "original_language": "en",
                "original_title": "Okja",
                "job": "Executive Producer",
                "overview": "A young girl named Mija risks everything to prevent a powerful, multi-national company from kidnapping her best friend - a massive animal named Okja.",
                "vote_count": 370,
                "video": false,
                "poster_path": "/pHlRr2MfjK77VIIAO7p0R4jhsJI.jpg",
                "backdrop_path": "/qkLZoJ1h998eJEmbuHGPCKZF0y7.jpg",
                "title": "Okja",
                "popularity": 11.218333,
                "genre_ids": [
                  12,
                  18,
                  14,
                  878
                ],
                "vote_average": 7.9,
                "adult": false,
                "release_date": "2017-05-19",
                "credit_id": "57cbb037c3a3685c250098f9"
              }
            ],
            "id": 287
          }', true);
    }

    public function mockGetTvCreditsResponse(): array
    {
        return json_decode('{
            "cast": [
              {
                "credit_id": "525333fb19c295794002c720",
                "original_name": "Growing Pains",
                "id": 54,
                "genre_ids": [
                  35
                ],
                "character": "",
                "name": "Growing Pains",
                "poster_path": "/eKyeUFwjc0LhPSp129IHpXniJVR.jpg",
                "vote_count": 25,
                "vote_average": 6.2,
                "popularity": 2.883124,
                "episode_count": 2,
                "original_language": "en",
                "first_air_date": "1985-09-24",
                "backdrop_path": "/xYpXcp7S8pStWihcksTQQue3jlV.jpg",
                "overview": "Growing Pains is an American television sitcom about an affluent family, residing in Huntington, Long Island, New York, with a working mother and a stay-at-home psychiatrist father raising three children together, which aired on ABC from September 24, 1985, to April 25, 1992.",
                "origin_country": [
                  "US"
                ]
              },
              {
                "credit_id": "5257157c760ee3776a132ba8",
                "original_name": "Jackass",
                "id": 1795,
                "genre_ids": [
                  35,
                  10759,
                  10764
                ],
                "character": "",
                "name": "Jackass",
                "poster_path": "/mz9PZo93dnIYHp1udcYsnBSLYTS.jpg",
                "vote_count": 35,
                "vote_average": 5.5,
                "popularity": 2.395655,
                "episode_count": 2,
                "original_language": "en",
                "first_air_date": "2000-04-12",
                "backdrop_path": "/vnoNQSzH8VjYs44y7EYawXxxUUN.jpg",
                "overview": "Jackass is an American reality series, originally shown on MTV from 2000 to 2002, featuring people performing various dangerous, crude self-injuring stunts and pranks. The show served as a launchpad for the television and acting careers of Bam Margera, Steve-O, and also Johnny Knoxville, who previously had only a few minor acting roles.\n\nSince 2002, three Jackass films have been produced and released by MTV corporate sibling Paramount Pictures, continuing the franchise after its run on television. The show sparked several spin-offs including Viva La Bam, Wildboyz, Homewrecker, Dr. Steve-O and Blastazoid.\n\nThe show placed #68 on Entertainment Weekly is \"New TV Classics\" list.",
                "origin_country": [
                  "US"
                ]
              },
              {
                "credit_id": "52571af119c29571140d5eda",
                "original_name": "Live with Regis and Kathie Lee",
                "id": 1900,
                "genre_ids": [],
                "character": "",
                "name": "Live with Regis and Kathie Lee",
                "poster_path": "/nuwhsprEgH31SROiJtIk0mxF82M.jpg",
                "vote_count": 4,
                "vote_average": 4.9,
                "popularity": 2.04483,
                "episode_count": 1,
                "original_language": "en",
                "first_air_date": "1983-04-04",
                "backdrop_path": "/zttJnnfyDVx7DmjTYfkBE85N7Gm.jpg",
                "overview": "Live! with Kelly and Michael is an American syndicated morning talk show, hosted by Kelly Ripa and Michael Strahan. Executive-produced by Michael Gelman, the show has aired since 1983 locally on WABC-TV in New York City and 1988 nationwide. With roots in A.M. Los Angeles and A.M. New York, Live! began as The Morning Show, hosted by Regis Philbin and Cyndy Garvey; the show rose to national prominence as Live with Regis and Kathie Lee, which ran for 12 years and continuing as Live! with Regis and Kelly for another decade before Ripa, after hosting with guest co-hosts for nearly a year, was paired with former NFL defensive end Michael Strahan.\n\nThe franchise has had longstanding success and has won the Daytime Emmy Award for Outstanding Talk Show and Outstanding Talk Show Hosts.",
                "origin_country": [
                  "US"
                ]
              },
              {
                "credit_id": "52572302760ee3776a22dc59",
                "original_name": "King of the Hill",
                "id": 2122,
                "genre_ids": [
                  16,
                  35,
                  18
                ],
                "character": "",
                "name": "King of the Hill",
                "poster_path": "/83LbPNL1NZ2czbRlN5vNSfi47Fj.jpg",
                "vote_count": 112,
                "vote_average": 7.1,
                "popularity": 6.107571,
                "episode_count": 1,
                "original_language": "en",
                "first_air_date": "1997-01-12",
                "backdrop_path": "/oIvmTOy6mPxw6nGGpRvsmB4rKDK.jpg",
                "overview": "Set in Texas, this animated series follows the life of propane salesman Hank Hill, who lives with his overly confident substitute Spanish teacher wife Peggy, wannabe comedian son Bobby, and naive niece Luanne. Hank has conservative views about God, family, and country, but his values and ethics are often challenged by the situations he, his family, and his beer-drinking neighbors/buddies find themselves in.",
                "origin_country": [
                  "US"
                ]
              },
              {
                "credit_id": "525763be760ee36aaa33f8e7",
                "original_name": "Pet Star",
                "id": 4325,
                "genre_ids": [
                  99
                ],
                "character": "",
                "name": "Pet Star",
                "poster_path": null,
                "vote_count": 0,
                "vote_average": 0,
                "popularity": 2.039139,
                "episode_count": 1,
                "original_language": "en",
                "first_air_date": "2002-08-09",
                "backdrop_path": null,
                "overview": "Pet Star was a show on Animal Planet hosted by Mario Lopez. The show is a contest between owners and their trained pets who perform tricks. The tricks are graded by three celebrity judges on a scale of one to 10. In the end, the three pets with the highest score come out as finalists, and the audience votes on who is the episode is Pet Star. Then, at the end of the season, the winners compete to be the year is ULTIMATE PET STAR. The winner of a regular show gets $2,500, while the winner of the finals gets $25,000.\n\nThere were many celebrity judges, including Gena Lee Nolin, Virginia Madsen, Will Estes, Lindsay Wagner, Matt Gallant, Mackenzie Phillips, Billy West, James Avery, George Wallace, Melissa Peterman, Christopher Rich, John OHurley, Vanessa Lengies, Dom Irrera, Carol Leifer, Andy Kindler, Melissa Rivers, Meshach Taylor, Kaley Cuoco, Rosa Blasi, Jeff Cesario, Karri Turner, Peter Scolari, Bruce Jenner, Fred Willard, Shari Belafonte, Josh Meyers, Lori Petty, Ben Stein, Richard Jeni, Ken Howard, Paul Gilmartin, Maria Menounos, Tempestt Bledsoe, David Brenner and Amy Davidson.\n\nPet Star is based on the show Star Search. It is shown in the United Kingdom on Challenge.",
                "origin_country": [
                  "US"
                ]
              },
              {
                "credit_id": "525764f9760ee36aaa357d18",
                "original_name": "Freddy is Nightmares",
                "id": 4346,
                "genre_ids": [
                  18
                ],
                "character": "",
                "name": "Freddy is Nightmares",
                "poster_path": "/sMYfjEjK6rEF6FeiGum6g67Wor6.jpg",
                "vote_count": 7,
                "vote_average": 6.9,
                "popularity": 2.010143,
                "episode_count": 1,
                "original_language": "en",
                "first_air_date": "1988-10-08",
                "backdrop_path": "/aquGVS5Dr90Q5dzx3awOkfKE1e3.jpg",
                "overview": "Freddy is Nightmares is an American horror anthology series, which aired in syndication from October 1988 until March 1990. A spin-off from the Nightmare on Elm Street series, each story was introduced by Freddy Krueger. This format is essentially the same as that employed by Alfred Hitchcock Presents, Tales from the Crypt, or The Twilight Zone. The pilot episode was directed by Tobe Hooper, and begins with Freddy Krueger is acquittal of the child-murdering charges due to his officer is lack of reviewing the Miranda warning at the time of Freddy is arrest. A mob of parents eventually corners Freddy in a power plant, leading to him being torched by the police officer, dying and gaining his familiar visage.\n\nThe series was produced by New Line Television, producers of the film series. It was originally distributed by Lorimar-Telepictures. However, Warner Bros. Television would assume syndication rights after acquiring Lorimar-Telepictures.",
                "origin_country": [
                  "US"
                ]
              },
              {
                "credit_id": "5257713f760ee36aaa496071",
                "original_name": "Late Night with Conan OBrien",
                "id": 4573,
                "genre_ids": [
                  10767
                ],
                "character": "",
                "name": "Late Night with Conan OBrien",
                "poster_path": "/v4N5l6JooObhXbjXoFaKbx92wB9.jpg",
                "vote_count": 34,
                "vote_average": 7.1,
                "popularity": 1.600719,
                "episode_count": 1,
                "original_language": "en",
                "first_air_date": "1993-09-13",
                "backdrop_path": "/tuE4KMxACmbgNSbHIDDHXwETS6z.jpg",
                "overview": "Late Night with Conan OBrien is an American late-night talk show hosted by Conan OBrien that aired 2,725 episodes on NBC between 1993 and 2009. The show featured varied comedic material, celebrity interviews, and musical and comedy performances. Late Night aired weeknights at 12:37 am Eastern/11:37 pm Central and 12:37 am Mountain in the United States. From 1993 until 2000, Andy Richter served as OBrien is sidekick; following his departure, OBrien was the show is sole featured performer. The show is house musical act was The Max Weinberg 7, led by E Street Band drummer Max Weinberg.\n\nThe second incarnation of NBC is Late Night franchise, OBrien is debuted in 1993 after David Letterman, who hosted the first incarnation of Late Night, moved to CBS to host Late Show opposite The Tonight Show. In 2004, as part of a deal to secure a new contract, NBC announced that OBrien would leave Late Night in 2009 to succeed Jay Leno as the host of The Tonight Show. Jimmy Fallon began hosting his version of Late Night on March 2, 2009.",
                "origin_country": [
                  "US"
                ]
              },
              {
                "credit_id": "525782e7760ee36aaa605ae7",
                "original_name": "Freedom: A History of Us",
                "id": 5741,
                "genre_ids": [],
                "character": "Albigence Waldo",
                "name": "Freedom: A History of Us",
                "poster_path": null,
                "vote_count": 0,
                "vote_average": 0,
                "popularity": 1.35489,
                "episode_count": 0,
                "original_language": "en",
                "first_air_date": "",
                "backdrop_path": null,
                "overview": "",
                "origin_country": []
              },
              {
                "credit_id": "525782e7760ee36aaa605b0f",
                "original_name": "Freedom: A History of Us",
                "id": 5741,
                "genre_ids": [],
                "character": "James K. Polk",
                "name": "Freedom: A History of Us",
                "poster_path": null,
                "vote_count": 0,
                "vote_average": 0,
                "popularity": 1.35489,
                "episode_count": 0,
                "original_language": "en",
                "first_air_date": "",
                "backdrop_path": null,
                "overview": "",
                "origin_country": []
              },
              {
                "credit_id": "525782e7760ee36aaa605b19",
                "original_name": "Freedom: A History of Us",
                "id": 5741,
                "genre_ids": [],
                "character": "William Lloyd Garrison",
                "name": "Freedom: A History of Us",
                "poster_path": null,
                "vote_count": 0,
                "vote_average": 0,
                "popularity": 1.35489,
                "episode_count": 0,
                "original_language": "en",
                "first_air_date": "",
                "backdrop_path": null,
                "overview": "",
                "origin_country": []
              },
              {
                "credit_id": "525782e7760ee36aaa605b23",
                "original_name": "Freedom: A History of Us",
                "id": 5741,
                "genre_ids": [],
                "character": "George Hewes",
                "name": "Freedom: A History of Us",
                "poster_path": null,
                "vote_count": 0,
                "vote_average": 0,
                "popularity": 1.35489,
                "episode_count": 0,
                "original_language": "en",
                "first_air_date": "",
                "backdrop_path": null,
                "overview": "",
                "origin_country": []
              },
              {
                "credit_id": "525782e7760ee36aaa605b2d",
                "original_name": "Freedom: A History of Us",
                "id": 5741,
                "genre_ids": [],
                "character": "John Russell Young",
                "name": "Freedom: A History of Us",
                "poster_path": null,
                "vote_count": 0,
                "vote_average": 0,
                "popularity": 1.35489,
                "episode_count": 0,
                "original_language": "en",
                "first_air_date": "",
                "backdrop_path": null,
                "overview": "",
                "origin_country": []
              },
              {
                "credit_id": "5257fa0319c29531db2ed3bb",
                "original_name": "Intimate Portrait",
                "id": 9937,
                "genre_ids": [
                  99
                ],
                "character": "",
                "name": "Intimate Portrait",
                "poster_path": "/gZnxSxEpU9Tn7FaYBnV8aOwHnXH.jpg",
                "vote_count": 1,
                "vote_average": 0.5,
                "popularity": 2.311962,
                "episode_count": 1,
                "original_language": "en",
                "first_air_date": "1994-01-03",
                "backdrop_path": null,
                "overview": "Intimate Portrait is a biographical television series on the Lifetime Television cable network focusing on different celebrities, which includes interviews with each subject.\n\nAmong the people profiled were Grace Kelly, Natalie Wood, Carly Simon, Jackie Kennedy, Katharine Hepburn, Carol Burnett, Tanya Tucker, and Marla Maples.",
                "origin_country": [
                  "US"
                ]
              },
              {
                "credit_id": "5258833a760ee346614043a6",
                "original_name": "The Academy Awards",
                "id": 27023,
                "genre_ids": [],
                "character": "",
                "name": "The Academy Awards",
                "poster_path": "/6vTqtwtzASs4v001qMS4xxCMmUJ.jpg",
                "vote_count": 12,
                "vote_average": 6.5,
                "popularity": 1.963996,
                "episode_count": 3,
                "original_language": "en",
                "first_air_date": "1953-03-18",
                "backdrop_path": "/ek2ZW419cBzZcmWzjB6S5hHIyKm.jpg",
                "overview": "The Academy Awards or The Oscars is an annual American awards ceremony honoring cinematic achievements in the film industry. The various category winners are awarded a copy of a statuette, officially the Academy Award of Merit, that is better known by its nickname Oscar. The awards, first presented in 1929 at the Hollywood Roosevelt Hotel, are overseen by the Academy of Motion Picture Arts and Sciences (AMPAS).\n\nThe awards ceremony began in 1929 and was first televised in 1953, making it the oldest entertainment awards ceremony.",
                "origin_country": [
                  "US",
                  "RU"
                ]
              },
              {
                "credit_id": "525895bf760ee3466158aa8e",
                "original_name": "Glory Days",
                "id": 29999,
                "genre_ids": [],
                "character": "Walker Lovejoy",
                "name": "Glory Days",
                "poster_path": null,
                "vote_count": 0,
                "vote_average": 0,
                "popularity": 1.329291,
                "episode_count": 6,
                "original_language": "en",
                "first_air_date": "1990-07-25",
                "backdrop_path": null,
                "overview": "Glory Days is an American drama television series that aired from July 25 until September 13, 1990.",
                "origin_country": [
                  "US"
                ]
              },
              {
                "credit_id": "525704eb760ee3776a008abe",
                "original_name": "Thirtysomething",
                "id": 1448,
                "genre_ids": [
                  35,
                  18
                ],
                "character": "",
                "name": "Thirtysomething",
                "poster_path": "/tlEWRrWe2SCd0cYfk3X5LEoiOpm.jpg",
                "vote_count": 3,
                "vote_average": 6.3,
                "popularity": 2.261962,
                "episode_count": 1,
                "original_language": "en",
                "first_air_date": "1987-09-29",
                "backdrop_path": "/cOAh1YRrmdyphegP1hKQCW6F9et.jpg",
                "overview": "Thirtysomething is an American television drama about a group of baby boomers in their late thirties. It was created by Marshall Herskovitz and Edward Zwick for MGM/UA Television Group and The Bedford Falls Company, and aired on ABC. It premiered in the U.S. on September 29, 1987. It lasted four seasons, with the last of its 85 episodes airing on May 28, 1991.\n\nThe title of the show was designed as thirtysomething by Kathie Broyles, who combined the words of the original title, Thirty Something.\n\nIn 1997, \"The Go Between\" and \"Samurai Ad Man\" were ranked #22 on TV Guide′s 100 Greatest Episodes of All Time.\n\nIn 2002, Thirtysomething was ranked #19 on TV Guide′s 50 Greatest TV Shows of All Time, and in 2013 TV Guide ranked it #10 in its list of The 60 Greatest Dramas of All Time.",
                "origin_country": [
                  "US"
                ]
              },
              {
                "credit_id": "52570765760ee3776a03124d",
                "original_name": "21 Jump Street",
                "id": 1486,
                "genre_ids": [
                  80,
                  9648,
                  10759
                ],
                "character": "",
                "name": "21 Jump Street",
                "poster_path": "/ybvuX8vQx8OTBp4PRCkmi5w9eJC.jpg",
                "vote_count": 17,
                "vote_average": 5.9,
                "popularity": 2.637642,
                "episode_count": 1,
                "original_language": "en",
                "first_air_date": "1987-04-12",
                "backdrop_path": "/Oxd5bvjEEwhyq9UjUfihqfNdlF.jpg",
                "overview": "21 Jump Street is an American police procedural crime drama television series that aired on the Fox Network and in first run syndication from April 12, 1987, to April 27, 1991, with a total of 103 episodes. The series focuses on a squad of youthful-looking undercover police officers investigating crimes in high schools, colleges, and other teenage venues. It was originally going to be titled Jump Street Chapel, after the deconsecrated church building in which the unit has its headquarters, but was changed at Fox is request so as not to mislead viewers into thinking it was a religious program.\n\nCreated by Patrick Hasburgh and Stephen J. Cannell, the series was produced by Patrick Hasburgh Productions and Stephen J. Cannell Productions in association with 20th Century Fox Television. Executive Producers included Hasburgh, Cannell, Steve Beers and Bill Nuss. The show was an early hit for the fledgling Fox Network, and was created to attract a younger audience. The final season aired in first-run syndication mainly on local Fox affiliates. It was later rerun on the FX cable network from 1996 to 1998.\n\nThe series provided a spark to Johnny Depp is nascent acting career, garnering him national recognition as a teen idol. Depp found this status irritating, but he continued on the series under his contract and was paid $45,000 per episode. Eventually he was released from his contract after the fourth season. A spin-off series, Booker, was produced for the character of Dennis Booker; it ran one season, from September 1989 to June 1990. A film adaptation starring Jonah Hill and Channing Tatum was released on March 16, 2012.",
                "origin_country": [
                  "US",
                  "CA"
                ]
              },
              {
                "credit_id": "5257107819c295731c02cf9b",
                "original_name": "Friends",
                "id": 1668,
                "genre_ids": [
                  35
                ],
                "character": "Will Colbert",
                "name": "Friends",
                "poster_path": "/7buCWBTpiPrCF5Lt023dSC60rgS.jpg",
                "vote_count": 727,
                "vote_average": 7.8,
                "popularity": 18.848896,
                "episode_count": 1,
                "original_language": "en",
                "first_air_date": "1994-09-22",
                "backdrop_path": "/efiX8iir6GEBWCD0uCFIi5NAyYA.jpg",
                "overview": "Friends is an American sitcom revolving around a group of friends in the New York City borough of Manhattan. Episodes typically depict the friends comedic and romantic adventures and career issues, such as Joey auditioning for roles or Rachel seeking jobs in the fashion industry. The six characters each have many dates and serious relationships, such as Monica with Richard Burke and Ross with Emily Waltham. Other frequently recurring characters include Ross and Monica is parents in Long Island, Ross is ex-wife and their son, Central Perk barista Gunther, Chandler is ex-girlfriend Janice, and Phoebe is twin sister Ursula.",
                "origin_country": [
                  "US"
                ]
              },
              {
                "credit_id": "525713d5760ee3776a113c77",
                "original_name": "Today",
                "id": 1709,
                "genre_ids": [
                  10763
                ],
                "character": "",
                "name": "Today",
                "poster_path": "/6gpFQwMZBHu2cCo4rzZ1EKyxhry.jpg",
                "vote_count": 2,
                "vote_average": 1.5,
                "popularity": 1.869054,
                "episode_count": 1,
                "original_language": "en",
                "first_air_date": "1952-01-14",
                "backdrop_path": "/lbSgEP3io95GLR0yf39iDSWptoX.jpg",
                "overview": "Today is a daily American morning television show that airs on NBC. The program debuted on January 14, 1952. It was the first of its genre on American television and in the world, and is the fifth-longest running American television series. Originally a two-hour program on weekdays, it expanded to Sundays in 1987 and Saturdays in 1992. The weekday broadcast expanded to three hours in 2000, and to four hours in 2007.\n\nToday is dominance was virtually unchallenged by the other networks until the late 1980s, when it was overtaken by ABC is Good Morning America. Today retook the Nielsen ratings lead the week of December 11, 1995, and held onto that position for 852 consecutive weeks until the week of April 9, 2012, when it was beaten by Good Morning America yet again. In 2002, Today was ranked #17 on TV Guide is 50 Greatest TV Shows of All Time.",
                "origin_country": [
                  "US"
                ]
              },
              {
                "credit_id": "52572b4e760ee3776a2d9c26",
                "original_name": "The Daily Show with Trevor Noah",
                "id": 2224,
                "genre_ids": [
                  35,
                  10763
                ],
                "character": "",
                "name": "The Daily Show with Trevor Noah",
                "poster_path": "/tZlqGXWGzEJNRl9QCCUN8ioSv2D.jpg",
                "vote_count": 99,
                "vote_average": 7.1,
                "popularity": 17.147942,
                "episode_count": 1,
                "original_language": "en",
                "first_air_date": "1996-07-22",
                "backdrop_path": "/wQKGmMEnoFDnbl5aodHPmAzZgil.jpg",
                "overview": "The Daily Show is an American late night satirical television program airing each Monday through Thursday on Comedy Central and, in Canada, The Comedy Network. Describing itself as a fake news program, The Daily Show draws its comedy and satire from recent news stories, political figures, media organizations, and often, aspects of the show itself.",
                "origin_country": [
                  "US"
                ]
              },
              {
                "credit_id": "525734f6760ee3776a3977e7",
                "original_name": "Tales from the Crypt",
                "id": 2391,
                "genre_ids": [
                  35,
                  10765
                ],
                "character": "",
                "name": "Tales from the Crypt",
                "poster_path": "/s5AMwt5Y8FMvAR5ZDUSLcHch3GT.jpg",
                "vote_count": 70,
                "vote_average": 7.5,
                "popularity": 3.173446,
                "episode_count": 1,
                "original_language": "en",
                "first_air_date": "1989-06-10",
                "backdrop_path": "/x0QiJBttHrCJ3nmWFlurgG1THuA.jpg",
                "overview": "Tales from the Crypt, sometimes titled HBO is Tales from the Crypt, is an American horror anthology television series that ran from June 10, 1989 to July 19, 1996 on the premium cable channel HBO for seven seasons with a total of 93 episodes. The title is based on the 1950s EC Comics series of the same name and most of the content originated in that comic or the four other EC Comics of the time. The show was produced by HBO with uncredited association by The Geffen Film Company and Warner Bros. Television. The series is not to be confused with the 1972 film by the same name or Tales from the Darkside, another similarly themed horror anthology series.\n\nBecause it was aired on HBO, a premium cable television channel, it was one of the few anthology series to be allowed to have full freedom from censorship by network standards and practices as a result, HBO allowed the series to contain graphic violence as well as other content that had not appeared in most television series up to that time, such as profanity, gore, nudity and sexual situations, which could give the series a TV-MA rating for today is standards. The show is subsequently edited for such content when broadcast in syndication or on basic cable. While the series began production in the United States, in the final season filming moved to Britain, resulting in episodes which revolved around British characters.",
                "origin_country": [
                  "US"
                ]
              },
              {
                "credit_id": "52573d96760ee36aaa047b7e",
                "original_name": "Head of the Class",
                "id": 2589,
                "genre_ids": [
                  35
                ],
                "character": "",
                "name": "Head of the Class",
                "poster_path": "/lTpL3zgxkRiJYFW3DQTkPigSK6P.jpg",
                "vote_count": 10,
                "vote_average": 6.4,
                "popularity": 2.424129,
                "episode_count": 1,
                "original_language": "en",
                "first_air_date": "1986-09-17",
                "backdrop_path": "/3hwdZ1e7rCDdtf6oYdN3TzcelyK.jpg",
                "overview": "Head of the Class is an American sitcom that ran from 1986 to 1991 on the ABC television network.\n\nThe series follows a group of gifted students in the Individualized Honors Program at the fictional Monroe High School in Manhattan, and their history teacher Charlie Moore. The program was ostensibly a vehicle for Hesseman, best known for his role as radio DJ Dr. Johnny Fever in the sitcom WKRP in Cincinnati. Hesseman left Head of the Class in 1990 and was replaced by Billy Connolly as teacher Billy MacGregor for the final season. After the series ended, Connolly appeared in a short-lived spin-off titled Billy.\n\nThe series was created and executive produced by Rich Eustis and Michael Elias. Rich Eustis had previously worked as a New York City substitute teacher while hoping to become an actor.",
                "origin_country": [
                  "US"
                ]
              },
              {
                "credit_id": "525753c6760ee36aaa1f53c7",
                "original_name": "American Idol",
                "id": 3626,
                "genre_ids": [
                  10764
                ],
                "character": "",
                "name": "American Idol",
                "poster_path": "/5Ez1Pdt1U2gRIQMBEunduJ6jFJU.jpg",
                "vote_count": 41,
                "vote_average": 4.1,
                "popularity": 7.094503,
                "episode_count": 1,
                "original_language": "en",
                "first_air_date": "2002-06-11",
                "backdrop_path": "/B4ijPnXTfrW5QLcFaMtWyCl5Xz.jpg",
                "overview": "American Idol is an American reality-singing competition program created by Simon Fuller. It began airing on Fox on June 11, 2002, as an addition to the Idols format based on the British series Pop Idol and has since become one of the most successful shows in the history of American television. The concept of the series is to find new solo recording artists where the winner is determined by the viewers in America.",
                "origin_country": [
                  "US"
                ]
              },
              {
                "credit_id": "5258094919c29531db3e2f4a",
                "original_name": "Celebrities Uncensored",
                "id": 10946,
                "genre_ids": [
                  99,
                  10763
                ],
                "character": "",
                "name": "Celebrities Uncensored",
                "poster_path": null,
                "vote_count": 2,
                "vote_average": 3.5,
                "popularity": 1.045743,
                "episode_count": 6,
                "original_language": "en",
                "first_air_date": "2003-06-04",
                "backdrop_path": null,
                "overview": "Celebrities Uncensored is a TV program on the E! network that edited together amusing paparazzi footage of celebrities, usually in public places such as public sidewalks, restaurants, nightclubs, etc. The celebrities were often friendly, but sometimes their more unfriendly antics were featured in an amusing and entertaining way. It was very popular with stars on the rise and created a stir in the Hollywood community. Paris Hilton was first brought to the public is attention by this show.",
                "origin_country": [
                  "US"
                ]
              },
              {
                "credit_id": "56c0d4d9c3a368180a00d928",
                "original_name": "The Academy Awards",
                "id": 27023,
                "genre_ids": [],
                "character": "Brad Pitt",
                "name": "The Academy Awards",
                "poster_path": "/6vTqtwtzASs4v001qMS4xxCMmUJ.jpg",
                "vote_count": 12,
                "vote_average": 6.5,
                "popularity": 1.963996,
                "episode_count": 1,
                "original_language": "en",
                "first_air_date": "1953-03-18",
                "backdrop_path": "/ek2ZW419cBzZcmWzjB6S5hHIyKm.jpg",
                "overview": "The Academy Awards or The Oscars is an annual American awards ceremony honoring cinematic achievements in the film industry. The various category winners are awarded a copy of a statuette, officially the Academy Award of Merit, that is better known by its nickname Oscar. The awards, first presented in 1929 at the Hollywood Roosevelt Hotel, are overseen by the Academy of Motion Picture Arts and Sciences (AMPAS).\n\nThe awards ceremony began in 1929 and was first televised in 1953, making it the oldest entertainment awards ceremony.",
                "origin_country": [
                  "US",
                  "RU"
                ]
              },
              {
                "credit_id": "594bbcec9251413111010eae",
                "original_name": "The Jim Jefferies Show",
                "id": 72025,
                "genre_ids": [
                  35,
                  10767
                ],
                "character": "Ex-Weatherman",
                "name": "The Jim Jefferies Show",
                "poster_path": "/d9RXTZ94nL39PrTugA8Ncnzh0ZJ.jpg",
                "vote_count": 4,
                "vote_average": 7.5,
                "popularity": 3.883356,
                "episode_count": 1,
                "original_language": "en",
                "first_air_date": "2017-06-06",
                "backdrop_path": "/6ZBGjgnY6IEcMiWdKHHCDCfnOd.jpg",
                "overview": "Each week, Jefferies will tackle the week’s top stories from behind his desk and travel the globe to far-off locations to provide an eye opening look at hypocrisy around the world. Featuring interviews, international field pieces, and man on the ground investigations, Jim tackles the news of the day with no-bulls**t candor, piercing insight and a uniquely Aussie viewpoint.",
                "origin_country": [
                  "US"
                ]
              },
              {
                "credit_id": "59453334c3a36816a501091e",
                "original_name": "The Jim Jefferies Show",
                "id": 72025,
                "genre_ids": [
                  35,
                  10767
                ],
                "character": "Weather Man",
                "name": "The Jim Jefferies Show",
                "poster_path": "/d9RXTZ94nL39PrTugA8Ncnzh0ZJ.jpg",
                "vote_count": 4,
                "vote_average": 7.5,
                "popularity": 3.883356,
                "episode_count": 3,
                "original_language": "en",
                "first_air_date": "2017-06-06",
                "backdrop_path": "/6ZBGjgnY6IEcMiWdKHHCDCfnOd.jpg",
                "overview": "Each week, Jefferies will tackle the week’s top stories from behind his desk and travel the globe to far-off locations to provide an eye opening look at hypocrisy around the world. Featuring interviews, international field pieces, and man on the ground investigations, Jim tackles the news of the day with no-bulls**t candor, piercing insight and a uniquely Aussie viewpoint.",
                "origin_country": [
                  "US"
                ]
              }
            ],
            "crew": [
              {
                "id": 69851,
                "department": "Production",
                "original_language": "en",
                "episode_count": 8,
                "job": "Executive Producer",
                "overview": "Anthology series of famous feuds with the first season based on the legendary rivalry between Bette Davis and Joan Crawford which began early on their careers, climaxed on the set of \"Whatever Happened to Baby Jane?\" and evolved into an Oscar vendetta.",
                "origin_country": [
                  "US"
                ],
                "original_name": "FEUD",
                "genre_ids": [
                  18
                ],
                "name": "FEUD",
                "first_air_date": "2017-03-05",
                "backdrop_path": "/r9SSeTSksoKhy8SRhGcsbJcVScX.jpg",
                "popularity": 3.797967,
                "vote_count": 40,
                "vote_average": 7.6,
                "poster_path": "/rrUA6J9yQSKlhyIWSjv6JIDzr1V.jpg",
                "credit_id": "58d06d6e9251415a240011dc"
              },
              {
                "id": 69061,
                "department": "Production",
                "original_language": "en",
                "episode_count": 8,
                "job": "Executive Producer",
                "overview": "Prairie Johnson, blind as a child, comes home to the community she grew up in with her sight restored. Some hail her a miracle, others a dangerous mystery, but Prairie won’t talk with the FBI or her parents about the seven years she went missing.",
                "origin_country": [],
                "original_name": "The OA",
                "genre_ids": [
                  18,
                  9648,
                  10765
                ],
                "name": "The OA",
                "first_air_date": "2016-12-16",
                "backdrop_path": "/k9kPIikcQBzl93nSyXUfqc74J9S.jpg",
                "popularity": 6.990147,
                "vote_count": 121,
                "vote_average": 7.3,
                "poster_path": "/ppSiYu2D0nw6KNF0kf5lKDxOGRR.jpg",
                "credit_id": "58cf92ae9251415a7d0339c3"
              }
            ],
            "id": 287
          }', true);
    }

    public function mockGetCombinedCreditsResponse(): array
    {
        return json_decode('{
            "cast": [
                {
                "id": 54,
                "original_language": "en",
                "episode_count": 2,
                "overview": "Growing Pains is an American television sitcom about an affluent family, residing in Huntington, Long Island, New York, with a working mother and a stay-at-home psychiatrist father raising three children together, which aired on ABC from September 24, 1985, to April 25, 1992.",
                "origin_country": [
                    "US"
                ],
                "original_name": "Growing Pains",
                "genre_ids": [
                    35
                ],
                "name": "Growing Pains",
                "media_type": "tv",
                "poster_path": "/eKyeUFwjc0LhPSp129IHpXniJVR.jpg",
                "first_air_date": "1985-09-24",
                "vote_average": 6.2,
                "vote_count": 25,
                "character": "",
                "backdrop_path": "/xYpXcp7S8pStWihcksTQQue3jlV.jpg",
                "popularity": 2.883124,
                "credit_id": "525333fb19c295794002c720"
                },
                {
                "id": 1795,
                "original_language": "en",
                "episode_count": 2,
                "overview": "Jackass is an American reality series, originally shown on MTV from 2000 to 2002, featuring people performing various dangerous, crude self-injuring stunts and pranks. The show served as a launchpad for the television and acting careers of Bam Margera, Steve-O, and also Johnny Knoxville, who previously had only a few minor acting roles.\n\nSince 2002, three Jackass films have been produced and released by MTV corporate sibling Paramount Pictures, continuing the franchise after its run on television. The show sparked several spin-offs including Viva La Bam, Wildboyz, Homewrecker, Dr. Steve-O and Blastazoid.\n\nThe show placed #68 on Entertainment Weekly is \"New TV Classics\" list.",
                "origin_country": [
                    "US"
                ],
                "original_name": "Jackass",
                "genre_ids": [
                    35,
                    10759,
                    10764
                ],
                "name": "Jackass",
                "media_type": "tv",
                "poster_path": "/mz9PZo93dnIYHp1udcYsnBSLYTS.jpg",
                "first_air_date": "2000-04-12",
                "vote_average": 5.5,
                "vote_count": 35,
                "character": "",
                "backdrop_path": "/vnoNQSzH8VjYs44y7EYawXxxUUN.jpg",
                "popularity": 2.395655,
                "credit_id": "5257157c760ee3776a132ba8"
                },
                {
                "id": 1900,
                "original_language": "en",
                "episode_count": 1,
                "overview": "Live! with Kelly and Michael is an American syndicated morning talk show, hosted by Kelly Ripa and Michael Strahan. Executive-produced by Michael Gelman, the show has aired since 1983 locally on WABC-TV in New York City and 1988 nationwide. With roots in A.M. Los Angeles and A.M. New York, Live! began as The Morning Show, hosted by Regis Philbin and Cyndy Garvey; the show rose to national prominence as Live with Regis and Kathie Lee, which ran for 12 years and continuing as Live! with Regis and Kelly for another decade before Ripa, after hosting with guest co-hosts for nearly a year, was paired with former NFL defensive end Michael Strahan.\n\nThe franchise has had longstanding success and has won the Daytime Emmy Award for Outstanding Talk Show and Outstanding Talk Show Hosts.",
                "origin_country": [
                    "US"
                ],
                "original_name": "Live with Regis and Kathie Lee",
                "genre_ids": [],
                "name": "Live with Regis and Kathie Lee",
                "media_type": "tv",
                "poster_path": "/nuwhsprEgH31SROiJtIk0mxF82M.jpg",
                "first_air_date": "1983-04-04",
                "vote_average": 4.9,
                "vote_count": 4,
                "character": "",
                "backdrop_path": "/zttJnnfyDVx7DmjTYfkBE85N7Gm.jpg",
                "popularity": 2.04483,
                "credit_id": "52571af119c29571140d5eda"
                },
                {
                "id": 2122,
                "original_language": "en",
                "episode_count": 1,
                "overview": "Set in Texas, this animated series follows the life of propane salesman Hank Hill, who lives with his overly confident substitute Spanish teacher wife Peggy, wannabe comedian son Bobby, and naive niece Luanne. Hank has conservative views about God, family, and country, but his values and ethics are often challenged by the situations he, his family, and his beer-drinking neighbors/buddies find themselves in.",
                "origin_country": [
                    "US"
                ],
                "original_name": "King of the Hill",
                "genre_ids": [
                    16,
                    35,
                    18
                ],
                "name": "King of the Hill",
                "media_type": "tv",
                "poster_path": "/83LbPNL1NZ2czbRlN5vNSfi47Fj.jpg",
                "first_air_date": "1997-01-12",
                "vote_average": 7.1,
                "vote_count": 112,
                "character": "",
                "backdrop_path": "/oIvmTOy6mPxw6nGGpRvsmB4rKDK.jpg",
                "popularity": 6.107571,
                "credit_id": "52572302760ee3776a22dc59"
                },
                {
                "id": 4325,
                "original_language": "en",
                "episode_count": 1,
                "overview": "Pet Star was a show on Animal Planet hosted by Mario Lopez. The show is a contest between owners and their trained pets who perform tricks. The tricks are graded by three celebrity judges on a scale of one to 10. In the end, the three pets with the highest score come out as finalists, and the audience votes on who is the episode is Pet Star. Then, at the end of the season, the winners compete to be the year is ULTIMATE PET STAR. The winner of a regular show gets $2,500, while the winner of the finals gets $25,000.\n\nThere were many celebrity judges, including Gena Lee Nolin, Virginia Madsen, Will Estes, Lindsay Wagner, Matt Gallant, Mackenzie Phillips, Billy West, James Avery, George Wallace, Melissa Peterman, Christopher Rich, John OHurley, Vanessa Lengies, Dom Irrera, Carol Leifer, Andy Kindler, Melissa Rivers, Meshach Taylor, Kaley Cuoco, Rosa Blasi, Jeff Cesario, Karri Turner, Peter Scolari, Bruce Jenner, Fred Willard, Shari Belafonte, Josh Meyers, Lori Petty, Ben Stein, Richard Jeni, Ken Howard, Paul Gilmartin, Maria Menounos, Tempestt Bledsoe, David Brenner and Amy Davidson.\n\nPet Star is based on the show Star Search. It is shown in the United Kingdom on Challenge.",
                "origin_country": [
                    "US"
                ],
                "original_name": "Pet Star",
                "genre_ids": [
                    99
                ],
                "name": "Pet Star",
                "media_type": "tv",
                "poster_path": null,
                "first_air_date": "2002-08-09",
                "vote_average": 0,
                "vote_count": 0,
                "character": "",
                "backdrop_path": null,
                "popularity": 2.039139,
                "credit_id": "525763be760ee36aaa33f8e7"
                },
                {
                "id": 4346,
                "original_language": "en",
                "episode_count": 1,
                "overview": "Freddy is Nightmares is an American horror anthology series, which aired in syndication from October 1988 until March 1990. A spin-off from the Nightmare on Elm Street series, each story was introduced by Freddy Krueger. This format is essentially the same as that employed by Alfred Hitchcock Presents, Tales from the Crypt, or The Twilight Zone. The pilot episode was directed by Tobe Hooper, and begins with Freddy Krueger is acquittal of the child-murdering charges due to his officer is lack of reviewing the Miranda warning at the time of Freddy is arrest. A mob of parents eventually corners Freddy in a power plant, leading to him being torched by the police officer, dying and gaining his familiar visage.\n\nThe series was produced by New Line Television, producers of the film series. It was originally distributed by Lorimar-Telepictures. However, Warner Bros. Television would assume syndication rights after acquiring Lorimar-Telepictures.",
                "origin_country": [
                    "US"
                ],
                "original_name": "Freddy is Nightmares",
                "genre_ids": [
                    18
                ],
                "name": "Freddy is Nightmares",
                "media_type": "tv",
                "poster_path": "/sMYfjEjK6rEF6FeiGum6g67Wor6.jpg",
                "first_air_date": "1988-10-08",
                "vote_average": 6.9,
                "vote_count": 7,
                "character": "",
                "backdrop_path": "/aquGVS5Dr90Q5dzx3awOkfKE1e3.jpg",
                "popularity": 2.010143,
                "credit_id": "525764f9760ee36aaa357d18"
                },
                {
                "id": 4573,
                "original_language": "en",
                "episode_count": 1,
                "overview": "Late Night with Conan OBrien is an American late-night talk show hosted by Conan OBrien that aired 2,725 episodes on NBC between 1993 and 2009. The show featured varied comedic material, celebrity interviews, and musical and comedy performances. Late Night aired weeknights at 12:37 am Eastern/11:37 pm Central and 12:37 am Mountain in the United States. From 1993 until 2000, Andy Richter served as OBrien is sidekick; following his departure, OBrien was the show is sole featured performer. The show is house musical act was The Max Weinberg 7, led by E Street Band drummer Max Weinberg.\n\nThe second incarnation of NBC is Late Night franchise, OBrien is debuted in 1993 after David Letterman, who hosted the first incarnation of Late Night, moved to CBS to host Late Show opposite The Tonight Show. In 2004, as part of a deal to secure a new contract, NBC announced that OBrien would leave Late Night in 2009 to succeed Jay Leno as the host of The Tonight Show. Jimmy Fallon began hosting his version of Late Night on March 2, 2009.",
                "origin_country": [
                    "US"
                ],
                "original_name": "Late Night with Conan OBrien",
                "genre_ids": [
                    10767
                ],
                "name": "Late Night with Conan OBrien",
                "media_type": "tv",
                "poster_path": "/v4N5l6JooObhXbjXoFaKbx92wB9.jpg",
                "first_air_date": "1993-09-13",
                "vote_average": 7.1,
                "vote_count": 34,
                "character": "",
                "backdrop_path": "/tuE4KMxACmbgNSbHIDDHXwETS6z.jpg",
                "popularity": 1.600719,
                "credit_id": "5257713f760ee36aaa496071"
                },
                {
                "id": 5741,
                "original_language": "en",
                "episode_count": 0,
                "overview": "",
                "origin_country": [],
                "original_name": "Freedom: A History of Us",
                "genre_ids": [],
                "name": "Freedom: A History of Us",
                "media_type": "tv",
                "poster_path": null,
                "first_air_date": "",
                "vote_average": 0,
                "vote_count": 0,
                "character": "Albigence Waldo",
                "backdrop_path": null,
                "popularity": 1.35489,
                "credit_id": "525782e7760ee36aaa605ae7"
                },
                {
                "id": 5741,
                "original_language": "en",
                "episode_count": 0,
                "overview": "",
                "origin_country": [],
                "original_name": "Freedom: A History of Us",
                "genre_ids": [],
                "name": "Freedom: A History of Us",
                "media_type": "tv",
                "poster_path": null,
                "first_air_date": "",
                "vote_average": 0,
                "vote_count": 0,
                "character": "James K. Polk",
                "backdrop_path": null,
                "popularity": 1.35489,
                "credit_id": "525782e7760ee36aaa605b0f"
                },
                {
                "id": 5741,
                "original_language": "en",
                "episode_count": 0,
                "overview": "",
                "origin_country": [],
                "original_name": "Freedom: A History of Us",
                "genre_ids": [],
                "name": "Freedom: A History of Us",
                "media_type": "tv",
                "poster_path": null,
                "first_air_date": "",
                "vote_average": 0,
                "vote_count": 0,
                "character": "William Lloyd Garrison",
                "backdrop_path": null,
                "popularity": 1.35489,
                "credit_id": "525782e7760ee36aaa605b19"
                },
                {
                "id": 5741,
                "original_language": "en",
                "episode_count": 0,
                "overview": "",
                "origin_country": [],
                "original_name": "Freedom: A History of Us",
                "genre_ids": [],
                "name": "Freedom: A History of Us",
                "media_type": "tv",
                "poster_path": null,
                "first_air_date": "",
                "vote_average": 0,
                "vote_count": 0,
                "character": "George Hewes",
                "backdrop_path": null,
                "popularity": 1.35489,
                "credit_id": "525782e7760ee36aaa605b23"
                },
                {
                "id": 5741,
                "original_language": "en",
                "episode_count": 0,
                "overview": "",
                "origin_country": [],
                "original_name": "Freedom: A History of Us",
                "genre_ids": [],
                "name": "Freedom: A History of Us",
                "media_type": "tv",
                "poster_path": null,
                "first_air_date": "",
                "vote_average": 0,
                "vote_count": 0,
                "character": "John Russell Young",
                "backdrop_path": null,
                "popularity": 1.35489,
                "credit_id": "525782e7760ee36aaa605b2d"
                },
                {
                "id": 9937,
                "original_language": "en",
                "episode_count": 1,
                "overview": "Intimate Portrait is a biographical television series on the Lifetime Television cable network focusing on different celebrities, which includes interviews with each subject.\n\nAmong the people profiled were Grace Kelly, Natalie Wood, Carly Simon, Jackie Kennedy, Katharine Hepburn, Carol Burnett, Tanya Tucker, and Marla Maples.",
                "origin_country": [
                    "US"
                ],
                "original_name": "Intimate Portrait",
                "genre_ids": [
                    99
                ],
                "name": "Intimate Portrait",
                "media_type": "tv",
                "poster_path": "/gZnxSxEpU9Tn7FaYBnV8aOwHnXH.jpg",
                "first_air_date": "1994-01-03",
                "vote_average": 0.5,
                "vote_count": 1,
                "character": "",
                "backdrop_path": null,
                "popularity": 2.311962,
                "credit_id": "5257fa0319c29531db2ed3bb"
                },
                {
                "id": 27023,
                "original_language": "en",
                "episode_count": 3,
                "overview": "The Academy Awards or The Oscars is an annual American awards ceremony honoring cinematic achievements in the film industry. The various category winners are awarded a copy of a statuette, officially the Academy Award of Merit, that is better known by its nickname Oscar. The awards, first presented in 1929 at the Hollywood Roosevelt Hotel, are overseen by the Academy of Motion Picture Arts and Sciences (AMPAS).\n\nThe awards ceremony began in 1929 and was first televised in 1953, making it the oldest entertainment awards ceremony.",
                "origin_country": [
                    "US",
                    "RU"
                ],
                "original_name": "The Academy Awards",
                "genre_ids": [],
                "name": "The Academy Awards",
                "media_type": "tv",
                "poster_path": "/6vTqtwtzASs4v001qMS4xxCMmUJ.jpg",
                "first_air_date": "1953-03-18",
                "vote_average": 6.5,
                "vote_count": 12,
                "character": "",
                "backdrop_path": "/ek2ZW419cBzZcmWzjB6S5hHIyKm.jpg",
                "popularity": 1.963996,
                "credit_id": "5258833a760ee346614043a6"
                },
                {
                "id": 29999,
                "original_language": "en",
                "episode_count": 6,
                "overview": "Glory Days is an American drama television series that aired from July 25 until September 13, 1990.",
                "origin_country": [
                    "US"
                ],
                "original_name": "Glory Days",
                "genre_ids": [],
                "name": "Glory Days",
                "media_type": "tv",
                "poster_path": null,
                "first_air_date": "1990-07-25",
                "vote_average": 0,
                "vote_count": 0,
                "character": "Walker Lovejoy",
                "backdrop_path": null,
                "popularity": 1.329291,
                "credit_id": "525895bf760ee3466158aa8e"
                },
                {
                "id": 1448,
                "original_language": "en",
                "episode_count": 1,
                "overview": "Thirtysomething is an American television drama about a group of baby boomers in their late thirties. It was created by Marshall Herskovitz and Edward Zwick for MGM/UA Television Group and The Bedford Falls Company, and aired on ABC. It premiered in the U.S. on September 29, 1987. It lasted four seasons, with the last of its 85 episodes airing on May 28, 1991.\n\nThe title of the show was designed as thirtysomething by Kathie Broyles, who combined the words of the original title, Thirty Something.\n\nIn 1997, \"The Go Between\" and \"Samurai Ad Man\" were ranked #22 on TV Guide′s 100 Greatest Episodes of All Time.\n\nIn 2002, Thirtysomething was ranked #19 on TV Guide′s 50 Greatest TV Shows of All Time, and in 2013 TV Guide ranked it #10 in its list of The 60 Greatest Dramas of All Time.",
                "origin_country": [
                    "US"
                ],
                "original_name": "Thirtysomething",
                "genre_ids": [
                    35,
                    18
                ],
                "name": "Thirtysomething",
                "media_type": "tv",
                "poster_path": "/tlEWRrWe2SCd0cYfk3X5LEoiOpm.jpg",
                "first_air_date": "1987-09-29",
                "vote_average": 6.3,
                "vote_count": 3,
                "character": "",
                "backdrop_path": "/cOAh1YRrmdyphegP1hKQCW6F9et.jpg",
                "popularity": 2.261962,
                "credit_id": "525704eb760ee3776a008abe"
                },
                {
                "id": 1486,
                "original_language": "en",
                "episode_count": 1,
                "overview": "21 Jump Street is an American police procedural crime drama television series that aired on the Fox Network and in first run syndication from April 12, 1987, to April 27, 1991, with a total of 103 episodes. The series focuses on a squad of youthful-looking undercover police officers investigating crimes in high schools, colleges, and other teenage venues. It was originally going to be titled Jump Street Chapel, after the deconsecrated church building in which the unit has its headquarters, but was changed at Fox is request so as not to mislead viewers into thinking it was a religious program.\n\nCreated by Patrick Hasburgh and Stephen J. Cannell, the series was produced by Patrick Hasburgh Productions and Stephen J. Cannell Productions in association with 20th Century Fox Television. Executive Producers included Hasburgh, Cannell, Steve Beers and Bill Nuss. The show was an early hit for the fledgling Fox Network, and was created to attract a younger audience. The final season aired in first-run syndication mainly on local Fox affiliates. It was later rerun on the FX cable network from 1996 to 1998.\n\nThe series provided a spark to Johnny Depp is nascent acting career, garnering him national recognition as a teen idol. Depp found this status irritating, but he continued on the series under his contract and was paid $45,000 per episode. Eventually he was released from his contract after the fourth season. A spin-off series, Booker, was produced for the character of Dennis Booker; it ran one season, from September 1989 to June 1990. A film adaptation starring Jonah Hill and Channing Tatum was released on March 16, 2012.",
                "origin_country": [
                    "US",
                    "CA"
                ],
                "original_name": "21 Jump Street",
                "genre_ids": [
                    80,
                    9648,
                    10759
                ],
                "name": "21 Jump Street",
                "media_type": "tv",
                "poster_path": "/ybvuX8vQx8OTBp4PRCkmi5w9eJC.jpg",
                "first_air_date": "1987-04-12",
                "vote_average": 5.9,
                "vote_count": 17,
                "character": "",
                "backdrop_path": "/Oxd5bvjEEwhyq9UjUfihqfNdlF.jpg",
                "popularity": 2.637642,
                "credit_id": "52570765760ee3776a03124d"
                },
                {
                "id": 1668,
                "original_language": "en",
                "episode_count": 1,
                "overview": "Friends is an American sitcom revolving around a group of friends in the New York City borough of Manhattan. Episodes typically depict the friends comedic and romantic adventures and career issues, such as Joey auditioning for roles or Rachel seeking jobs in the fashion industry. The six characters each have many dates and serious relationships, such as Monica with Richard Burke and Ross with Emily Waltham. Other frequently recurring characters include Ross and Monica is parents in Long Island, Ross is ex-wife and their son, Central Perk barista Gunther, Chandler is ex-girlfriend Janice, and Phoebe is twin sister Ursula.",
                "origin_country": [
                    "US"
                ],
                "original_name": "Friends",
                "genre_ids": [
                    35
                ],
                "name": "Friends",
                "media_type": "tv",
                "poster_path": "/7buCWBTpiPrCF5Lt023dSC60rgS.jpg",
                "first_air_date": "1994-09-22",
                "vote_average": 7.8,
                "vote_count": 727,
                "character": "Will Colbert",
                "backdrop_path": "/efiX8iir6GEBWCD0uCFIi5NAyYA.jpg",
                "popularity": 18.848896,
                "credit_id": "5257107819c295731c02cf9b"
                },
                {
                "id": 1709,
                "original_language": "en",
                "episode_count": 1,
                "overview": "Today is a daily American morning television show that airs on NBC. The program debuted on January 14, 1952. It was the first of its genre on American television and in the world, and is the fifth-longest running American television series. Originally a two-hour program on weekdays, it expanded to Sundays in 1987 and Saturdays in 1992. The weekday broadcast expanded to three hours in 2000, and to four hours in 2007.\n\nToday is dominance was virtually unchallenged by the other networks until the late 1980s, when it was overtaken by ABC is Good Morning America. Today retook the Nielsen ratings lead the week of December 11, 1995, and held onto that position for 852 consecutive weeks until the week of April 9, 2012, when it was beaten by Good Morning America yet again. In 2002, Today was ranked #17 on TV Guide is 50 Greatest TV Shows of All Time.",
                "origin_country": [
                    "US"
                ],
                "original_name": "Today",
                "genre_ids": [
                    10763
                ],
                "name": "Today",
                "media_type": "tv",
                "poster_path": "/6gpFQwMZBHu2cCo4rzZ1EKyxhry.jpg",
                "first_air_date": "1952-01-14",
                "vote_average": 1.5,
                "vote_count": 2,
                "character": "",
                "backdrop_path": "/lbSgEP3io95GLR0yf39iDSWptoX.jpg",
                "popularity": 1.869054,
                "credit_id": "525713d5760ee3776a113c77"
                },
                {
                "id": 2224,
                "original_language": "en",
                "episode_count": 1,
                "overview": "The Daily Show is an American late night satirical television program airing each Monday through Thursday on Comedy Central and, in Canada, The Comedy Network. Describing itself as a fake news program, The Daily Show draws its comedy and satire from recent news stories, political figures, media organizations, and often, aspects of the show itself.",
                "origin_country": [
                    "US"
                ],
                "original_name": "The Daily Show with Trevor Noah",
                "genre_ids": [
                    35,
                    10763
                ],
                "name": "The Daily Show with Trevor Noah",
                "media_type": "tv",
                "poster_path": "/tZlqGXWGzEJNRl9QCCUN8ioSv2D.jpg",
                "first_air_date": "1996-07-22",
                "vote_average": 7.1,
                "vote_count": 99,
                "character": "",
                "backdrop_path": "/wQKGmMEnoFDnbl5aodHPmAzZgil.jpg",
                "popularity": 17.147942,
                "credit_id": "52572b4e760ee3776a2d9c26"
                },
                {
                "id": 2391,
                "original_language": "en",
                "episode_count": 1,
                "overview": "Tales from the Crypt, sometimes titled HBO is Tales from the Crypt, is an American horror anthology television series that ran from June 10, 1989 to July 19, 1996 on the premium cable channel HBO for seven seasons with a total of 93 episodes. The title is based on the 1950s EC Comics series of the same name and most of the content originated in that comic or the four other EC Comics of the time. The show was produced by HBO with uncredited association by The Geffen Film Company and Warner Bros. Television. The series is not to be confused with the 1972 film by the same name or Tales from the Darkside, another similarly themed horror anthology series.\n\nBecause it was aired on HBO, a premium cable television channel, it was one of the few anthology series to be allowed to have full freedom from censorship by network standards and practices as a result, HBO allowed the series to contain graphic violence as well as other content that had not appeared in most television series up to that time, such as profanity, gore, nudity and sexual situations, which could give the series a TV-MA rating for today is standards. The show is subsequently edited for such content when broadcast in syndication or on basic cable. While the series began production in the United States, in the final season filming moved to Britain, resulting in episodes which revolved around British characters.",
                "origin_country": [
                    "US"
                ],
                "original_name": "Tales from the Crypt",
                "genre_ids": [
                    35,
                    10765
                ],
                "name": "Tales from the Crypt",
                "media_type": "tv",
                "poster_path": "/s5AMwt5Y8FMvAR5ZDUSLcHch3GT.jpg",
                "first_air_date": "1989-06-10",
                "vote_average": 7.5,
                "vote_count": 70,
                "character": "",
                "backdrop_path": "/x0QiJBttHrCJ3nmWFlurgG1THuA.jpg",
                "popularity": 3.173446,
                "credit_id": "525734f6760ee3776a3977e7"
                },
                {
                "id": 2589,
                "original_language": "en",
                "episode_count": 1,
                "overview": "Head of the Class is an American sitcom that ran from 1986 to 1991 on the ABC television network.\n\nThe series follows a group of gifted students in the Individualized Honors Program at the fictional Monroe High School in Manhattan, and their history teacher Charlie Moore. The program was ostensibly a vehicle for Hesseman, best known for his role as radio DJ Dr. Johnny Fever in the sitcom WKRP in Cincinnati. Hesseman left Head of the Class in 1990 and was replaced by Billy Connolly as teacher Billy MacGregor for the final season. After the series ended, Connolly appeared in a short-lived spin-off titled Billy.\n\nThe series was created and executive produced by Rich Eustis and Michael Elias. Rich Eustis had previously worked as a New York City substitute teacher while hoping to become an actor.",
                "origin_country": [
                    "US"
                ],
                "original_name": "Head of the Class",
                "genre_ids": [
                    35
                ],
                "name": "Head of the Class",
                "media_type": "tv",
                "poster_path": "/lTpL3zgxkRiJYFW3DQTkPigSK6P.jpg",
                "first_air_date": "1986-09-17",
                "vote_average": 6.4,
                "vote_count": 10,
                "character": "",
                "backdrop_path": "/3hwdZ1e7rCDdtf6oYdN3TzcelyK.jpg",
                "popularity": 2.424129,
                "credit_id": "52573d96760ee36aaa047b7e"
                },
                {
                "id": 3626,
                "original_language": "en",
                "episode_count": 1,
                "overview": "American Idol is an American reality-singing competition program created by Simon Fuller. It began airing on Fox on June 11, 2002, as an addition to the Idols format based on the British series Pop Idol and has since become one of the most successful shows in the history of American television. The concept of the series is to find new solo recording artists where the winner is determined by the viewers in America.",
                "origin_country": [
                    "US"
                ],
                "original_name": "American Idol",
                "genre_ids": [
                    10764
                ],
                "name": "American Idol",
                "media_type": "tv",
                "poster_path": "/5Ez1Pdt1U2gRIQMBEunduJ6jFJU.jpg",
                "first_air_date": "2002-06-11",
                "vote_average": 4.1,
                "vote_count": 41,
                "character": "",
                "backdrop_path": "/B4ijPnXTfrW5QLcFaMtWyCl5Xz.jpg",
                "popularity": 7.094503,
                "credit_id": "525753c6760ee36aaa1f53c7"
                },
                {
                "id": 10946,
                "original_language": "en",
                "episode_count": 6,
                "overview": "Celebrities Uncensored is a TV program on the E! network that edited together amusing paparazzi footage of celebrities, usually in public places such as public sidewalks, restaurants, nightclubs, etc. The celebrities were often friendly, but sometimes their more unfriendly antics were featured in an amusing and entertaining way. It was very popular with stars on the rise and created a stir in the Hollywood community. Paris Hilton was first brought to the public is attention by this show.",
                "origin_country": [
                    "US"
                ],
                "original_name": "Celebrities Uncensored",
                "genre_ids": [
                    99,
                    10763
                ],
                "name": "Celebrities Uncensored",
                "media_type": "tv",
                "poster_path": null,
                "first_air_date": "2003-06-04",
                "vote_average": 3.5,
                "vote_count": 2,
                "character": "",
                "backdrop_path": null,
                "popularity": 1.045743,
                "credit_id": "5258094919c29531db3e2f4a"
                },
                {
                "id": 27023,
                "original_language": "en",
                "episode_count": 1,
                "overview": "The Academy Awards or The Oscars is an annual American awards ceremony honoring cinematic achievements in the film industry. The various category winners are awarded a copy of a statuette, officially the Academy Award of Merit, that is better known by its nickname Oscar. The awards, first presented in 1929 at the Hollywood Roosevelt Hotel, are overseen by the Academy of Motion Picture Arts and Sciences (AMPAS).\n\nThe awards ceremony began in 1929 and was first televised in 1953, making it the oldest entertainment awards ceremony.",
                "origin_country": [
                    "US",
                    "RU"
                ],
                "original_name": "The Academy Awards",
                "genre_ids": [],
                "name": "The Academy Awards",
                "media_type": "tv",
                "poster_path": "/6vTqtwtzASs4v001qMS4xxCMmUJ.jpg",
                "first_air_date": "1953-03-18",
                "vote_average": 6.5,
                "vote_count": 12,
                "character": "Brad Pitt",
                "backdrop_path": "/ek2ZW419cBzZcmWzjB6S5hHIyKm.jpg",
                "popularity": 1.963996,
                "credit_id": "56c0d4d9c3a368180a00d928"
                },
                {
                "id": 72025,
                "original_language": "en",
                "episode_count": 1,
                "overview": "Each week, Jefferies will tackle the week’s top stories from behind his desk and travel the globe to far-off locations to provide an eye opening look at hypocrisy around the world. Featuring interviews, international field pieces, and man on the ground investigations, Jim tackles the news of the day with no-bulls**t candor, piercing insight and a uniquely Aussie viewpoint.",
                "origin_country": [
                    "US"
                ],
                "original_name": "The Jim Jefferies Show",
                "genre_ids": [
                    35,
                    10767
                ],
                "name": "The Jim Jefferies Show",
                "media_type": "tv",
                "poster_path": "/d9RXTZ94nL39PrTugA8Ncnzh0ZJ.jpg",
                "first_air_date": "2017-06-06",
                "vote_average": 7.5,
                "vote_count": 4,
                "character": "Ex-Weatherman",
                "backdrop_path": "/6ZBGjgnY6IEcMiWdKHHCDCfnOd.jpg",
                "popularity": 3.883356,
                "credit_id": "594bbcec9251413111010eae"
                },
                {
                "id": 72025,
                "original_language": "en",
                "episode_count": 3,
                "overview": "Each week, Jefferies will tackle the week’s top stories from behind his desk and travel the globe to far-off locations to provide an eye opening look at hypocrisy around the world. Featuring interviews, international field pieces, and man on the ground investigations, Jim tackles the news of the day with no-bulls**t candor, piercing insight and a uniquely Aussie viewpoint.",
                "origin_country": [
                    "US"
                ],
                "original_name": "The Jim Jefferies Show",
                "genre_ids": [
                    35,
                    10767
                ],
                "name": "The Jim Jefferies Show",
                "media_type": "tv",
                "poster_path": "/d9RXTZ94nL39PrTugA8Ncnzh0ZJ.jpg",
                "first_air_date": "2017-06-06",
                "vote_average": 7.5,
                "vote_count": 4,
                "character": "Weather Man",
                "backdrop_path": "/6ZBGjgnY6IEcMiWdKHHCDCfnOd.jpg",
                "popularity": 3.883356,
                "credit_id": "59453334c3a36816a501091e"
                },
                {
                "id": 109091,
                "original_language": "en",
                "original_title": "The Counselor",
                "overview": "A rich and successful lawyer named Counselor is about to get married to his fiancée but soon meets up with the middle-man known as Westray who tells him his drug trafficking plan has taken a horrible twist and now he must protect himself and his soon bride-to-be lover as the truth of the drug business uncovers and targets become chosen.",
                "vote_count": 661,
                "video": false,
                "media_type": "movie",
                "credit_id": "52fe4aaac3a36847f81db47d",
                "vote_average": 5,
                "character": "Westray",
                "popularity": 3.597124,
                "release_date": "2013-10-25",
                "title": "The Counselor",
                "genre_ids": [
                    80,
                    18,
                    53
                ],
                "adult": false,
                "backdrop_path": "/62xHmGnxMi0wV40BS3iKnDru0nO.jpg",
                "poster_path": "/uxp6rHVBzUqZCyTaUI8xzUP5sOf.jpg"
                },
                {
                "id": 109404,
                "original_language": "en",
                "original_title": "8",
                "overview": "\"8\"—a new play by Academy-award winning screenwriter Dustin Lance Black (Milk, J. Edgar)—demystifies the debate around marriage equality by chronicling the landmark trial of Perry v. Schwarzenegger. A one time show was done live on youtube with a superstar cast",
                "vote_count": 0,
                "video": false,
                "media_type": "movie",
                "credit_id": "52fe4ab2c3a36847f81dcd13",
                "vote_average": 0,
                "character": "Chief Judge Vaughn R. Walker",
                "popularity": 1.209511,
                "release_date": "2012-03-03",
                "title": "8",
                "genre_ids": [],
                "adult": false,
                "backdrop_path": null,
                "poster_path": "/28fDtVBr6PyHsFFqyKJCeN3ysBP.jpg"
                },
                {
                "id": 107,
                "original_language": "en",
                "original_title": "Snatch",
                "overview": "The second film from British director Guy Ritchie. Snatch tells an obscure story similar to his first fast-paced crazy character-colliding filled film “Lock, Stock and Two Smoking Barrels.” There are two overlapping stories here – one is the search for a stolen diamond, and the other about a boxing promoter who’s having trouble with a psychotic gangster.",
                "vote_count": 2681,
                "video": false,
                "media_type": "movie",
                "credit_id": "52fe4218c3a36847f8003be5",
                "vote_average": 7.6,
                "character": "Mickey ONeil",
                "popularity": 4.065815,
                "release_date": "2000-09-01",
                "title": "Snatch",
                "genre_ids": [
                    80,
                    53
                ],
                "adult": false,
                "backdrop_path": "/cNLZ7YGRikb4IsLblrzu86ndZPw.jpg",
                "poster_path": "/on9JlbGEccLsYkjeEph2Whm1DIp.jpg"
                },
                {
                "id": 161,
                "original_language": "en",
                "original_title": "Ocean is Eleven",
                "overview": "Less than 24 hours into his parole, charismatic thief Danny Ocean is already rolling out his next plan: In one night, Danny is hand-picked crew of specialists will attempt to steal more than $150 million from three Las Vegas casinos. But to score the cash, Danny risks his chances of reconciling with ex-wife, Tess.",
                "vote_count": 3491,
                "video": false,
                "media_type": "movie",
                "credit_id": "52fe4220c3a36847f800616b",
                "vote_average": 7.1,
                "character": "Rusty Ryan",
                "popularity": 4.10939,
                "release_date": "2001-12-07",
                "title": "Ocean is Eleven",
                "genre_ids": [
                    80,
                    53
                ],
                "adult": false,
                "backdrop_path": "/z2fiN0tgkgOcAFl5gxvQlYXCn3l.jpg",
                "poster_path": "/o0h76DVXvk5OKjmNez5YY0GODC2.jpg"
                },
                {
                "id": 163,
                "original_language": "en",
                "original_title": "Ocean is Twelve",
                "overview": "Danny Ocean reunites with his old flame and the rest of his merry band of thieves in carrying out three huge heists in Rome, Paris and Amsterdam – but a Europol agent is hot on their heels.",
                "vote_count": 1925,
                "video": false,
                "media_type": "movie",
                "credit_id": "52fe4221c3a36847f80062e5",
                "vote_average": 6.4,
                "character": "Rusty Ryan",
                "popularity": 2.985544,
                "release_date": "2004-12-09",
                "title": "Ocean is Twelve",
                "genre_ids": [
                    80,
                    53
                ],
                "adult": false,
                "backdrop_path": "/5AZ8fm3SZ6ANigK1NtfbhPy6mbm.jpg",
                "poster_path": "/nS3iDLQuy13XY1JH58NNl1rCuNN.jpg"
                },
                {
                "id": 293,
                "original_language": "en",
                "original_title": "A River Runs Through It",
                "overview": "A River Runs Through is a cinematographically stunning true story of Norman Maclean. The story follows Norman and his brother Paul through the experiences of life and growing up, and how their love of fly fishing keeps them together despite varying life circumstances in the untamed west of Montana in the 1920 is.",
                "vote_count": 214,
                "video": false,
                "media_type": "movie",
                "credit_id": "52fe4233c3a36847f800bb79",
                "vote_average": 7,
                "character": "Paul Maclean",
                "popularity": 2.356041,
                "release_date": "1992-10-09",
                "title": "A River Runs Through It",
                "genre_ids": [
                    18
                ],
                "adult": false,
                "backdrop_path": "/v7oMYppOdYNlMHD3TYKW3TyvLRX.jpg",
                "poster_path": "/xX4H1hZG9IgSRkC0LANbPQ0StJi.jpg"
                },
                {
                "id": 297,
                "original_language": "en",
                "original_title": "Meet Joe Black",
                "overview": "When the grim reaper comes to collect the soul of megamogul Bill Parrish, he arrives with a proposition: Host him for a \"vacation\" among the living in trade for a few more days of existence. Parrish agrees, and using the pseudonym Joe Black, Death begins taking part in Parrish is daily agenda and falls in love with the man is daughter. Yet when Black is holiday is over, so is Parrish is life.",
                "vote_count": 1033,
                "video": false,
                "media_type": "movie",
                "credit_id": "52fe4234c3a36847f800bdbb",
                "vote_average": 6.9,
                "character": "Joe Black",
                "popularity": 3.295568,
                "release_date": "1998-11-12",
                "title": "Meet Joe Black",
                "genre_ids": [
                    18,
                    14,
                    9648
                ],
                "adult": false,
                "backdrop_path": "/4iDp0J3bZOqIpwyOU3nvj1FOIXW.jpg",
                "poster_path": "/nlxPnkZY3vY1iehJriKMQcT6eua.jpg"
                },
                {
                "id": 298,
                "original_language": "en",
                "original_title": "Ocean is Thirteen",
                "overview": "Danny Ocean is team of criminals are back and are composing a plan more personal than ever. When ruthless casino owner Willy Bank double-crosses Reuben Tishkoff, causing a heart attack, Danny Ocean vows that him and his team will do anything to bring Willy Bank and everything he is got down. Even if it includes hiring help from one of their own enemies, Terry Benedict.",
                "vote_count": 1840,
                "video": false,
                "media_type": "movie",
                "credit_id": "52fe4234c3a36847f800bf0f",
                "vote_average": 6.5,
                "character": "Robert “Rusty” Charles Ryan",
                "popularity": 3.552988,
                "release_date": "2007-06-07",
                "title": "Ocean is Thirteen",
                "genre_ids": [
                    80,
                    53
                ],
                "adult": false,
                "backdrop_path": "/7ytb78OyijteFpFKKoZsYSvPw2u.jpg",
                "poster_path": "/uDUebdX0SFqpjBrdC4ANxub3zjy.jpg"
                },
                {
                "id": 319,
                "original_language": "en",
                "original_title": "True Romance",
                "overview": "Clarence marries hooker Alabama, steals cocaine from her pimp, and tries to sell it in Hollywood, while the owners of the coke try to reclaim it.",
                "vote_count": 694,
                "video": false,
                "media_type": "movie",
                "credit_id": "52fe4237c3a36847f800cdd3",
                "vote_average": 7.5,
                "character": "Floyd",
                "popularity": 2.660968,
                "release_date": "1993-09-09",
                "title": "True Romance",
                "genre_ids": [
                    28,
                    80,
                    53,
                    10749
                ],
                "adult": false,
                "backdrop_path": "/f7EbIN1bMf8tOtoSmiqd6mO5p4P.jpg",
                "poster_path": "/xBO8R3CZfrJ9rrwrZoJ68PgJyAR.jpg"
                },
                {
                "id": 550,
                "original_language": "en",
                "original_title": "Fight Club",
                "overview": "A ticking-time-bomb insomniac and a slippery soap salesman channel primal male aggression into a shocking new form of therapy. Their concept catches on, with underground \"fight clubs\" forming in every town, until an eccentric gets in the way and ignites an out-of-control spiral toward oblivion.",
                "vote_count": 8349,
                "video": false,
                "media_type": "movie",
                "credit_id": "52fe4250c3a36847f80149f7",
                "vote_average": 8.2,
                "character": "Tyler Durden",
                "popularity": 11.703928,
                "release_date": "1999-10-15",
                "title": "Fight Club",
                "genre_ids": [
                    18
                ],
                "adult": false,
                "backdrop_path": "/87hTDiay2N2qWyX4Ds7ybXi9h8I.jpg",
                "poster_path": "/adw6Lq9FiC9zjYEpOqfq03ituwp.jpg"
                },
                {
                "id": 628,
                "original_language": "en",
                "original_title": "Interview with the Vampire",
                "overview": "A vampire relates his epic life story of love, betrayal, loneliness, and dark hunger to an over-curious reporter.",
                "vote_count": 1338,
                "video": false,
                "media_type": "movie",
                "credit_id": "52fe4260c3a36847f80199f9",
                "vote_average": 7.2,
                "character": "Louis de Pointe du Lac",
                "popularity": 3.554484,
                "release_date": "1994-11-11",
                "title": "Interview with the Vampire",
                "genre_ids": [
                    27,
                    10749
                ],
                "adult": false,
                "backdrop_path": "/GRyynLqafMrLFMHqvfGdUweavA.jpg",
                "poster_path": "/hldXwwViSfHJS0kIJr07KBGmHJI.jpg"
                },
                {
                "id": 652,
                "original_language": "en",
                "original_title": "Troy",
                "overview": "In year 1250 B.C. during the late Bronze age, two emerging nations begin to clash. Paris, the Trojan prince, convinces Helen, Queen of Sparta, to leave her husband Menelaus, and sail with him back to Troy. After Menelaus finds out that his wife was taken by the Trojans, he asks his brother Agamemnom to help him get her back. Agamemnon sees this as an opportunity for power. So they set off with 1,000 ships holding 50,000 Greeks to Troy. With the help of Achilles, the Greeks are able to fight the never before defeated Trojans.",
                "vote_count": 2415,
                "video": false,
                "media_type": "movie",
                "credit_id": "52fe4264c3a36847f801b083",
                "vote_average": 6.8,
                "character": "Achilles",
                "popularity": 5.315127,
                "release_date": "2004-05-13",
                "title": "Troy",
                "genre_ids": [
                    12,
                    18,
                    10752
                ],
                "adult": false,
                "backdrop_path": "/lIyNUZbIeEwWpaWXAO5gnciB8Dq.jpg",
                "poster_path": "/edMlij7nw2NMla32xskDnzMCFBM.jpg"
                },
                {
                "id": 787,
                "original_language": "en",
                "original_title": "Mr. & Mrs. Smith",
                "overview": "After five (or six) years of vanilla-wedded bliss, ordinary suburbanites John and Jane Smith are stuck in a huge rut. Unbeknownst to each other, they are both coolly lethal, highly-paid assassins working for rival organisations. When they discover they are each other is next target, their secret lives collide in a spicy, explosive mix of wicked comedy, pent-up passion, nonstop action and high-tech weaponry.",
                "vote_count": 2570,
                "video": false,
                "media_type": "movie",
                "credit_id": "52fe4276c3a36847f80208cb",
                "vote_average": 6.5,
                "character": "John Smith",
                "popularity": 5.850512,
                "release_date": "2005-06-07",
                "title": "Mr. & Mrs. Smith",
                "genre_ids": [
                    28,
                    35,
                    18,
                    53
                ],
                "adult": false,
                "backdrop_path": "/n4GhKs24bQK2XsdlZ5bZFljzlsK.jpg",
                "poster_path": "/dqs5BmwSULtB28Kls3IB6khTQwp.jpg"
                },
                {
                "id": 807,
                "original_language": "en",
                "original_title": "Se7en",
                "overview": "Two homicide detectives are on a desperate hunt for a serial killer whose crimes are based on the \"seven deadly sins\" in this dark and haunting film that takes viewers from the tortured remains of one victim to the next. The seasoned Det. Sommerset researches each sin in an effort to get inside the killer is mind, while his novice partner, Mills, scoffs at his efforts to unravel the case.",
                "vote_count": 5114,
                "video": false,
                "media_type": "movie",
                "credit_id": "52fe4279c3a36847f802178b",
                "vote_average": 8.1,
                "character": "Detective David Mills",
                "popularity": 7.60737,
                "release_date": "1995-09-22",
                "title": "Se7en",
                "genre_ids": [
                    80,
                    9648,
                    53
                ],
                "adult": false,
                "backdrop_path": "/ba4CpvnaxvAgff2jHiaqJrVpZJ5.jpg",
                "poster_path": "/8zw8IL4zEPjkh8Aysdcd0FwGMb0.jpg"
                },
                {
                "id": 819,
                "original_language": "en",
                "original_title": "Sleepers",
                "overview": "Two gangsters seek revenge on the state jail worker who during their stay at a youth prison sexually abused them. A sensational court hearing takes place to charge him for the crimes. A moving drama from director Barry Levinson.",
                "vote_count": 635,
                "video": false,
                "media_type": "movie",
                "credit_id": "52fe427bc3a36847f80222a7",
                "vote_average": 7.3,
                "character": "Michael Sullivan",
                "popularity": 2.280319,
                "release_date": "1996-10-18",
                "title": "Sleepers",
                "genre_ids": [
                    80,
                    18,
                    53
                ],
                "adult": false,
                "backdrop_path": "/ie40d2IO3iFADzWs4KLV3mvBtl5.jpg",
                "poster_path": "/cDqEv4Fw4JZh2zCfecqw3z09L8z.jpg"
                },
                {
                "id": 978,
                "original_language": "en",
                "original_title": "Seven Years in Tibet",
                "overview": "Austrian mountaineer, Heinrich Harrer journeys to the Himalayas without his family to head an expedition in 1939. But when World War II breaks out, the arrogant Harrer falls into Allied forces hands as a prisoner of war. He escapes with a fellow detainee and makes his way to Llaso, Tibet, where he meets the 14-year-old Dalai Lama, whose friendship ultimately transforms his outlook on life.",
                "vote_count": 560,
                "video": false,
                "media_type": "movie",
                "credit_id": "52fe4295c3a36847f802a10d",
                "vote_average": 6.9,
                "character": "Heinrich Harrer",
                "popularity": 2.852491,
                "release_date": "1997-09-12",
                "title": "Seven Years in Tibet",
                "genre_ids": [
                    12,
                    18,
                    36
                ],
                "adult": false,
                "backdrop_path": "/6HjYM1vgqWpFTr01tOBrskfvxcu.jpg",
                "poster_path": "/cflSeFUVDCf73Tzh5sB204JbQ6j.jpg"
                },
                {
                "id": 1164,
                "original_language": "en",
                "original_title": "Babel",
                "overview": "Tragedy strikes a married couple on vacation in the Moroccan desert, touching off an interlocking story involving four different families.",
                "vote_count": 947,
                "video": false,
                "media_type": "movie",
                "credit_id": "52fe42e9c3a36847f802c221",
                "vote_average": 6.9,
                "character": "Richard",
                "popularity": 2.642871,
                "release_date": "2006-09-08",
                "title": "Babel",
                "genre_ids": [
                    18
                ],
                "adult": false,
                "backdrop_path": "/uHx9E9xqSgOBoRvL4shmMNu8Ojc.jpg",
                "poster_path": "/oyOviwBr6VEDz6pauvdgsLhRHck.jpg"
                },
                {
                "id": 1535,
                "original_language": "en",
                "original_title": "Spy Game",
                "overview": "Veteran spy Nathan Muir is on the verge of retiring from the CIA when he learns that his one-time protégé and close friend, Tom Bishop, is a political prisoner sentenced to die in Beijing. Although their friendship has been marred by bad blood and resentment, Muir agrees to take on the most dangerous mission of his career and rescue Bishop.",
                "vote_count": 529,
                "video": false,
                "media_type": "movie",
                "credit_id": "52fe42fbc3a36847f8031727",
                "vote_average": 6.8,
                "character": "Tom Bishop",
                "popularity": 2.889623,
                "release_date": "2001-11-18",
                "title": "Spy Game",
                "genre_ids": [
                    28,
                    80,
                    53
                ],
                "adult": false,
                "backdrop_path": "/ncF0ozvDnIVFzKF0J5iqwEIezRJ.jpg",
                "poster_path": "/hsb8hBeU3tkTX8SUYW6YYw6JPYD.jpg"
                },
                {
                "id": 1541,
                "original_language": "en",
                "original_title": "Thelma & Louise",
                "overview": "Whilst on a short weekend getaway, Louise shoots a man who had tried to rape Thelma. Due to the incriminating circumstances, they make a run for it and thus a cross country chase ensues for the two fugitives. Along the way, both women rediscover the strength of their friendship and surprising aspects of their personalities and self-strengths in the trying times.",
                "vote_count": 654,
                "video": false,
                "media_type": "movie",
                "credit_id": "52fe42fbc3a36847f8031a6d",
                "vote_average": 7.2,
                "character": "J.D.",
                "popularity": 3.440349,
                "release_date": "1991-05-24",
                "title": "Thelma & Louise",
                "genre_ids": [
                    12,
                    80,
                    18,
                    53
                ],
                "adult": false,
                "backdrop_path": "/9X0Ebv8wWOH7OlWmJOc5iucqkBm.jpg",
                "poster_path": "/pnzuLoE52EiTfjfqRex2uTkH7LB.jpg"
                },
                {
                "id": 63,
                "original_language": "en",
                "original_title": "Twelve Monkeys",
                "overview": "In the year 2035, convict James Cole reluctantly volunteers to be sent back in time to discover the origin of a deadly virus that wiped out nearly all of the earth is population and forced the survivors into underground communities. But when Cole is mistakenly sent to 1990 instead of 1996, he is arrested and locked up in a mental hospital. There he meets psychiatrist Dr. Kathryn Railly, and patient Jeffrey Goines, the son of a famous virus expert, who may hold the key to the mysterious rogue group, the Army of the 12 Monkeys, thought to be responsible for unleashing the killer disease.",
                "vote_count": 2169,
                "video": false,
                "media_type": "movie",
                "credit_id": "52fe4212c3a36847f8001b39",
                "vote_average": 7.4,
                "character": "Jeffrey Goines",
                "popularity": 2.773768,
                "release_date": "1995-12-29",
                "title": "Twelve Monkeys",
                "genre_ids": [
                    9648,
                    878,
                    53
                ],
                "adult": false,
                "backdrop_path": "/6KXbhaxkgExC5EdDqAzRinhmoZ8.jpg",
                "poster_path": "/6Sj9wDu3YugthXsU0Vry5XFAZGg.jpg"
                },
                {
                "id": 244743,
                "original_language": "en",
                "original_title": "Contact",
                "overview": "An American soldier and an Arab soldier confront each other during wartime in the desert, each hoping to kill the other. But in order to survive, they must lay down their arms and cooperate.",
                "vote_count": 2,
                "video": false,
                "media_type": "movie",
                "credit_id": "52fe4ef6c3a36847f82b3c95",
                "vote_average": 9,
                "character": "",
                "popularity": 1.426005,
                "release_date": "1992-01-01",
                "title": "Contact",
                "genre_ids": [],
                "adult": false,
                "backdrop_path": null,
                "poster_path": "/gAmyqdAlwzB8Et34ESMrl7tosn4.jpg"
                },
                {
                "id": 228150,
                "original_language": "en",
                "original_title": "Fury",
                "overview": "Last months of World War II in April 1945. As the Allies make their final push in the European Theater, a battle-hardened U.S. Army sergeant in the 2nd Armored Division named Wardaddy commands a Sherman tank called \"Fury\" and its five-man crew on a deadly mission behind enemy lines. Outnumbered and outgunned, Wardaddy and his men face overwhelming odds in their heroic attempts to strike at the heart of Nazi Germany.",
                "vote_count": 3570,
                "video": false,
                "media_type": "movie",
                "credit_id": "52fe4ec09251416c7516126f",
                "vote_average": 7.4,
                "character": "Don Wardaddy Collier",
                "popularity": 17.802127,
                "release_date": "2014-10-15",
                "title": "Fury",
                "genre_ids": [
                    28,
                    18,
                    10752
                ],
                "adult": false,
                "backdrop_path": "/pKawqrtCBMmxarft7o1LbEynys7.jpg",
                "poster_path": "/pfte7wdMobMF4CVHuOxyu6oqeeA.jpg"
                },
                {
                "id": 314385,
                "original_language": "en",
                "original_title": "By the Sea",
                "overview": "Set in France during the mid-1970s, Vanessa, a former dancer, and her husband Roland, an American writer, travel the country together. They seem to be growing apart, but when they linger in one quiet, seaside town they begin to draw close to some of its more vibrant inhabitants, such as a local bar/café-keeper and a hotel owner.",
                "vote_count": 138,
                "video": false,
                "media_type": "movie",
                "credit_id": "54a1c3c7c3a3680b2700ba58",
                "vote_average": 5.4,
                "character": "Roland",
                "popularity": 2.778817,
                "release_date": "2015-11-12",
                "title": "By the Sea",
                "genre_ids": [
                    18,
                    10749
                ],
                "adult": false,
                "backdrop_path": "/a2WCcsvWPZcqemlyKbbFEcxjfn0.jpg",
                "poster_path": "/vctzmTinuLACl2PIFuPhTNkTc62.jpg"
                },
                {
                "id": 327437,
                "original_language": "en",
                "original_title": "Africa",
                "overview": "The fight of Richard Leakey is late 80s battle with ivory poachers in Kenya that threatened the existence of the African elephant population.",
                "vote_count": 1,
                "video": false,
                "media_type": "movie",
                "credit_id": "54ef5d9c925141795f0066e9",
                "vote_average": 10,
                "character": "Richard Leakey (rumored)",
                "popularity": 1.315861,
                "release_date": "2017-07-14",
                "title": "Africa",
                "genre_ids": [
                    18
                ],
                "adult": false,
                "backdrop_path": null,
                "poster_path": null
                },
                {
                "id": 327962,
                "original_language": "en",
                "original_title": "Thelma & Louise: The Last Journey",
                "overview": "Nearly every major element of making the film Thelma &amp; Louise (1991) is examined here from how the script was written to how Ridley Scott got involved, to how the big tanker explosion was pulled off. Some funny stories are shared and some great trivia as to what was improvised on set and actually left in the film. - Written by Rhyl Donnelly",
                "vote_count": 3,
                "video": false,
                "media_type": "movie",
                "credit_id": "54f2c5d49251416b41003a02",
                "vote_average": 8,
                "character": "Himself",
                "popularity": 1.405723,
                "release_date": "2003-02-04",
                "title": "Thelma & Louise: The Last Journey",
                "genre_ids": [
                    99
                ],
                "adult": false,
                "backdrop_path": null,
                "poster_path": null
                },
                {
                "id": 32227,
                "original_language": "en",
                "original_title": "Hunk",
                "overview": "A \"devilish\" tale about an ordinary guy who is visited by a beautiful apparition promising him popularity and drop-dead good looks in exchange for his soul. Transformed overnight into a \"hunk,\" he soon discovers there may be hell to pay for his new lifestyle!",
                "vote_count": 2,
                "video": false,
                "media_type": "movie",
                "credit_id": "555a3ee0c3a368777200cbe8",
                "vote_average": 7,
                "character": "Guy at Beach with Drink",
                "popularity": 1.562983,
                "release_date": "1987-03-06",
                "title": "Hunk",
                "genre_ids": [
                    35,
                    14
                ],
                "adult": false,
                "backdrop_path": "/fDy6RvRvi5LynR1KXc4rMCynfV9.jpg",
                "poster_path": "/e1GjhehrHFLay7DKHxw0ReQxHPI.jpg"
                },
                {
                "id": 318846,
                "original_language": "en",
                "original_title": "The Big Short",
                "overview": "The men who made millions from a global economic meltdown.",
                "vote_count": 2357,
                "video": false,
                "media_type": "movie",
                "credit_id": "55187d59c3a36862f6004854",
                "vote_average": 7.3,
                "character": "Ben Rickert",
                "popularity": 4.832312,
                "release_date": "2015-12-11",
                "title": "The Big Short",
                "genre_ids": [
                    35,
                    18
                ],
                "adult": false,
                "backdrop_path": "/jmlMLYEsYY1kRc5qHIyTdxCeVmZ.jpg",
                "poster_path": "/p11Ftd4VposrAzthkhF53ifYZRl.jpg"
                },
                {
                "id": 15186,
                "original_language": "en",
                "original_title": "Full Frontal",
                "overview": "A contemporary comedy set in Los Angeles, Full Frontal traces the complicated relationship among seven friends as they deal with the fragile connections that bind them together. Full Frontal takes place during a twenty-four hour period - a day in the life of missed connections.",
                "vote_count": 22,
                "video": false,
                "media_type": "movie",
                "credit_id": "557df105c3a36821a600046d",
                "vote_average": 4.8,
                "character": "Himself",
                "popularity": 1.894413,
                "release_date": "2002-08-02",
                "title": "Full Frontal",
                "genre_ids": [
                    35,
                    18,
                    10749
                ],
                "adult": false,
                "backdrop_path": "/iisihHxbCJDH9W2DimDgX9End2z.jpg",
                "poster_path": "/ma4W9xh6FNAKKE4eM6cIIMwwJDc.jpg"
                },
                {
                "id": 336002,
                "original_language": "en",
                "original_title": "World War Z 2",
                "overview": "The plot is currently unknown.",
                "vote_count": 4,
                "video": false,
                "media_type": "movie",
                "credit_id": "5590ba8292514164890030a9",
                "vote_average": 0,
                "character": "Gerry Lane",
                "popularity": 1.52883,
                "release_date": "2019-12-31",
                "title": "World War Z 2",
                "genre_ids": [
                    28,
                    27,
                    53
                ],
                "adult": false,
                "backdrop_path": null,
                "poster_path": null
                },
                {
                "id": 17171,
                "original_language": "en",
                "original_title": "The Assassination of Jesse James: Death Of An Outlaw",
                "overview": "Explores the true story of the notorious Jesse James, how the myth developed during his lifetime, and how the legends have persisted over 100 years after his death at the hands of his former friend, Robert Ford.",
                "vote_count": 29,
                "video": false,
                "media_type": "movie",
                "credit_id": "5591282992514175860008b2",
                "vote_average": 6.2,
                "character": "Himself",
                "popularity": 1.371496,
                "release_date": "2008-01-01",
                "title": "The Assassination of Jesse James: Death Of An Outlaw",
                "genre_ids": [
                    99
                ],
                "adult": false,
                "backdrop_path": null,
                "poster_path": "/4CMvkPQYYkO9ZENhdQbIxRVWsc2.jpg"
                },
                {
                "id": 357659,
                "original_language": "en",
                "original_title": "Making Snatch",
                "overview": "The making of Guy Ritchie is Snatch.",
                "vote_count": 0,
                "video": false,
                "media_type": "movie",
                "credit_id": "55e77bc99251413e450000fb",
                "vote_average": 0,
                "character": "Himself",
                "popularity": 1.162587,
                "release_date": "2001-07-03",
                "title": "Making Snatch",
                "genre_ids": [
                    99
                ],
                "adult": false,
                "backdrop_path": null,
                "poster_path": null
                },
                {
                "id": 357681,
                "original_language": "en",
                "original_title": "Hitting the Apex",
                "overview": "Hitting the Apex is the inside story of six fighters – six of the fastest motorcycle racers of all time – and of the fates that awaited them at the peak of the sport. It’s the story of what is at stake for all of them: all that can be won, and all that can be lost, when you go chasing glory at over two hundred miles an hour – on a motorcycle.",
                "vote_count": 18,
                "video": false,
                "media_type": "movie",
                "credit_id": "55e786c39251413e4500020a",
                "vote_average": 8.3,
                "character": "Narrator (voice)",
                "popularity": 1.233615,
                "release_date": "2015-09-02",
                "title": "Hitting the Apex",
                "genre_ids": [
                    99
                ],
                "adult": false,
                "backdrop_path": "/htyN1EfbSsPbODZcgDfdScKgwRB.jpg",
                "poster_path": "/8KW3fARQ2CYs7ra4obWCIsUdXtB.jpg"
                },
                {
                "id": 319714,
                "original_language": "en",
                "original_title": "His Highness Hollywood",
                "overview": "Ian Halperin poses as a gay wannabe actor and member of the Israeli royal family to get an inside look at the Hollywood industry in this companion film to his well-received book, Hollywood Undercover: Revealing the Sordid Secrets of Tinseltown. Along the way, he receives a promise from the Church of Scientology to cure his homosexuality and gets the inside scoop from numerous luminaries -- including Brad Pitt, Jay Leno and Leonardo DiCaprio.",
                "vote_count": 0,
                "video": false,
                "media_type": "movie",
                "credit_id": "55f5eb119251413ed9000665",
                "vote_average": 0,
                "character": "Himself (uncredited)",
                "popularity": 1.361954,
                "release_date": "2008-09-20",
                "title": "His Highness Hollywood",
                "genre_ids": [],
                "adult": false,
                "backdrop_path": null,
                "poster_path": null
                },
                {
                "id": 365717,
                "original_language": "en",
                "original_title": "The Audition",
                "overview": "A short film promoting the opening of Melco-Crown is movie-themed resort and casino in Macau.",
                "vote_count": 18,
                "video": false,
                "media_type": "movie",
                "credit_id": "5630ca08c3a3681b4d011675",
                "vote_average": 6.2,
                "character": "Himself",
                "popularity": 1.368371,
                "release_date": "2015-10-03",
                "title": "The Audition",
                "genre_ids": [
                    35
                ],
                "adult": false,
                "backdrop_path": null,
                "poster_path": "/t1PDIeDpJGgI9JPqIRMuG7WDdId.jpg"
                },
                {
                "id": 4477,
                "original_language": "en",
                "original_title": "The Devil is Own",
                "overview": "Frankie McGuire, one of the IRA is deadliest assassins, draws an American family into the crossfire of terrorism. But when he is sent to the U.S. to buy weapons, Frankie is housed with the family of Tom OMeara, a New York cop who knows nothing about Frankie is real identity. Their surprising friendship, and Tom is growing suspicions, forces Frankie to choose between the promise of peace or a lifetime of murder.",
                "vote_count": 255,
                "video": false,
                "media_type": "movie",
                "credit_id": "52fe43c4c3a36847f806e2b9",
                "vote_average": 5.8,
                "character": "Rory Devaney / Francis Austin McGuire",
                "popularity": 2.412252,
                "release_date": "1997-03-12",
                "title": "The Devil is Own",
                "genre_ids": [
                    80,
                    18,
                    53
                ],
                "adult": false,
                "backdrop_path": "/xRYvkp0EQyUzDti2m8PKgD5cZDS.jpg",
                "poster_path": "/7XIxdjhaoDIiv7slEiOhBEzMtqu.jpg"
                },
                {
                "id": 381690,
                "original_language": "en",
                "original_title": "Cyclops Island",
                "overview": "Marina, Sinbad and his crew are resting on a small island. They soon find out they are not alone.",
                "vote_count": 3,
                "video": false,
                "media_type": "movie",
                "credit_id": "56b82551c3a36806fc00e0f1",
                "vote_average": 6.7,
                "character": "Sinbad",
                "popularity": 1.032389,
                "release_date": "2003-11-18",
                "title": "Cyclops Island",
                "genre_ids": [],
                "adult": false,
                "backdrop_path": null,
                "poster_path": "/dNGICcAcklEseadvjK3VBSkHABp.jpg"
                },
                {
                "id": 373929,
                "original_language": "en",
                "original_title": "Touch of Evil",
                "overview": "Some of 2011 is stand-out film actors appear in \"a video gallery of cinematic villainy\" for New York Times Magazine.",
                "vote_count": 2,
                "video": false,
                "media_type": "movie",
                "credit_id": "567ae7ebc3a3684bcc0001be",
                "vote_average": 8,
                "character": "The Madman",
                "popularity": 1.1878,
                "release_date": "2011-12-06",
                "title": "Touch of Evil",
                "genre_ids": [],
                "adult": false,
                "backdrop_path": "/wFzp50KscYSuimMTm7oj8keiPAt.jpg",
                "poster_path": "/aB4kg0tTEH56DwqmzCPR3Nlzx4E.jpg"
                },
                {
                "id": 16869,
                "original_language": "en",
                "original_title": "Inglourious Basterds",
                "overview": "In Nazi-occupied France during World War II, a group of Jewish-American soldiers known as \"The Basterds\" are chosen specifically to spread fear throughout the Third Reich by scalping and brutally killing Nazis. The Basterds, lead by Lt. Aldo Raine soon cross paths with a French-Jewish teenage girl who runs a movie theater in Paris which is targeted by the soldiers.",
                "vote_count": 5682,
                "video": false,
                "media_type": "movie",
                "credit_id": "52fe46f29251416c75088c69",
                "vote_average": 7.8,
                "character": "Lieutenant Aldo \"The Apache\" Raine",
                "popularity": 8.152189,
                "release_date": "2009-08-18",
                "title": "Inglourious Basterds",
                "genre_ids": [
                    28,
                    18,
                    53,
                    10752
                ],
                "adult": false,
                "backdrop_path": "/7nF6B9yCEq1ZCT82sGJVtNxOcl5.jpg",
                "poster_path": "/ai0LXkzVM3hMjDhvFdKMUemoBe.jpg"
                },
                {
                "id": 369885,
                "original_language": "en",
                "original_title": "Allied",
                "overview": "In 1942, an intelligence officer in North Africa encounters a female French Resistance fighter on a deadly mission behind enemy lines. When they reunite in London, their relationship is tested by the pressures of war.",
                "vote_count": 1124,
                "video": false,
                "media_type": "movie",
                "credit_id": "5789f699c3a36841e3001936",
                "vote_average": 6.5,
                "character": "Max Vatan",
                "popularity": 3.517962,
                "release_date": "2016-11-17",
                "title": "Allied",
                "genre_ids": [
                    28,
                    18,
                    53,
                    10749,
                    10752
                ],
                "adult": false,
                "backdrop_path": "/tC0tVH5KQhCwMlddnyA3iWOSuBA.jpg",
                "poster_path": "/nzXzLFTnd0Zb3ExfhOxlQgizgSu.jpg"
                },
                {
                "id": 417198,
                "original_language": "en",
                "original_title": "Voyage of Time: The IMAX Experience",
                "overview": "A celebration of the universe, displaying the whole of time, from its start to its final collapse. This film examines all that occurred to prepare the world that stands before us now: science and spirit, birth and death, the grand cosmos and the minute life systems of our planet. (Limited release IMAX version with narration by Brad Pitt.)",
                "vote_count": 4,
                "video": false,
                "media_type": "movie",
                "credit_id": "57e2a101c3a3683a6c0002a5",
                "vote_average": 5.5,
                "character": "Narrator (voice)",
                "popularity": 1.15656,
                "release_date": "2016-10-07",
                "title": "Voyage of Time: The IMAX Experience",
                "genre_ids": [
                    99
                ],
                "adult": false,
                "backdrop_path": null,
                "poster_path": "/nnjUMLtG2ifo3f9kYWgTeDNObfL.jpg"
                },
                {
                "id": 354287,
                "original_language": "en",
                "original_title": "War Machine",
                "overview": "A rock star general bent on winning the “impossible” war in Afghanistan takes us inside the complex machinery of modern war. Inspired by the true story of General Stanley McChrystal.",
                "vote_count": 155,
                "video": false,
                "media_type": "movie",
                "credit_id": "55cc4e9b925141764800222d",
                "vote_average": 6.1,
                "character": "Gen. Glen McMahon",
                "popularity": 4.096339,
                "release_date": "2017-05-26",
                "title": "War Machine",
                "genre_ids": [
                    35,
                    18,
                    10752
                ],
                "adult": false,
                "backdrop_path": "/eQsellX1IeGaIjv1w4JBzoOrvmf.jpg",
                "poster_path": "/eEy3AYVAUFLaRqCOV95zYTDkNKL.jpg"
                },
                {
                "id": 209340,
                "original_language": "en",
                "original_title": "A Stoning in Fulham County",
                "overview": "Religious beliefs clash with the law when an Amish infant is killed in a rural community.",
                "vote_count": 1,
                "video": false,
                "media_type": "movie",
                "credit_id": "57f2dee39251410c280034d9",
                "vote_average": 0,
                "character": "Teddy Johnson",
                "popularity": 1.381674,
                "release_date": "1988-10-24",
                "title": "A Stoning in Fulham County",
                "genre_ids": [
                    80,
                    18,
                    53
                ],
                "adult": false,
                "backdrop_path": null,
                "poster_path": "/aOun7weNkxTn9ZOPTyFZOdaWIkd.jpg"
                },
                {
                "id": 213503,
                "original_language": "en",
                "original_title": "Two-Fisted Tales",
                "overview": "The foul-mouthed, wheelchair-bound Mr. Rush introduces three adventure tales based on the EC comics of the 1950 is. A 1992 star-studded made-for-tv film which was an attempt to launch a second series in the mold of Tales From The Crypt. When this failed to launch, the three tales were re-edited and shown as Crypt episodes.",
                "vote_count": 0,
                "video": false,
                "media_type": "movie",
                "credit_id": "566b1da79251412dbc000476",
                "vote_average": 0,
                "character": "Billy",
                "popularity": 1.375146,
                "release_date": "1992-01-18",
                "title": "Two-Fisted Tales",
                "genre_ids": [
                    37,
                    10752,
                    10770
                ],
                "adult": false,
                "backdrop_path": null,
                "poster_path": "/walRAzpkYoAtm90FKIpIzD7Px1a.jpg"
                },
                {
                "id": 34379,
                "original_language": "en",
                "original_title": "No Man is Land",
                "overview": "A rookie cop goes undercover to infiltrate a gang of car thieves led by smooth and charming Ted. The rookie becomes too involved and starts to enjoy the thrill and lifestyle of the game, and becomes romanticly involved with the leaders sister.",
                "vote_count": 25,
                "video": false,
                "media_type": "movie",
                "credit_id": "58d4c1ea92514103d200fea2",
                "vote_average": 6,
                "character": "Waiter (uncredited)",
                "popularity": 2.56362,
                "release_date": "1987-10-23",
                "title": "No Man is Land",
                "genre_ids": [
                    28,
                    18,
                    53
                ],
                "adult": false,
                "backdrop_path": "/dpwWoZhd1pjBdQedgW92EjI7p6h.jpg",
                "poster_path": "/eIkBNUmHLAe1rtn9lPXGgBYSaOC.jpg"
                },
                {
                "id": 419704,
                "original_language": "en",
                "original_title": "Ad Astra",
                "overview": "Army Corps engineer Roy McBride embarks on a mission across the galaxy to discover the truth about his father, who disappeared in space 20 years ago while searching for signs of alien life. Though he was once presumed dead, new evidence suggests Roy is father may still be alive, hiding within an abandoned power plant on a distant planet - and that he could potentially pose a dangerous threat to the entire universe.",
                "vote_count": 0,
                "video": false,
                "media_type": "movie",
                "credit_id": "58ebe95d9251413ce4030cd7",
                "vote_average": 0,
                "character": "Roy McBride",
                "popularity": 1.220077,
                "release_date": "2018-12-31",
                "title": "Ad Astra",
                "genre_ids": [
                    878,
                    53
                ],
                "adult": false,
                "backdrop_path": null,
                "poster_path": null
                },
                {
                "id": 460224,
                "original_language": "en",
                "original_title": "Truth of the Situation: Making The Counselor",
                "overview": "A 13-segment documentary examining production aspects of \"The Counselor\" (2013):\r Tragic Consequences\r A Different Southwest\r The Counselor\r Pool Party\r Reiner\r Laura\r Malkina\r Polo Club\r Lensing the Dark World\r Westray\r Downward Spiral\r The Cheetahs\r The Bolito",
                "vote_count": 1,
                "video": false,
                "media_type": "movie",
                "credit_id": "593210729251417ddc002525",
                "vote_average": 7,
                "character": "Himself",
                "popularity": 1.071912,
                "release_date": "2014-02-11",
                "title": "Truth of the Situation: Making The Counselor",
                "genre_ids": [
                    99
                ],
                "adult": false,
                "backdrop_path": null,
                "poster_path": null
                },
                {
                "id": 492,
                "original_language": "en",
                "original_title": "Being John Malkovich",
                "overview": "Spike Jonze’s debut feature film is a love story mix of comedy and fantasy. The story is about an unsuccessful puppeteer named Craig, who one day at work finds a portal into the head of actor John Malkovich. The portal soon becomes a passion for anybody who enters it’s mad and controlling world of overtaking another human body.",
                "vote_count": 997,
                "video": false,
                "media_type": "movie",
                "credit_id": "593e5891c3a3680f1402babb",
                "vote_average": 7.3,
                "character": "Brad Pitt (uncredited)",
                "popularity": 2.509429,
                "release_date": "1999-09-30",
                "title": "Being John Malkovich",
                "genre_ids": [
                    35,
                    18,
                    14
                ],
                "adult": false,
                "backdrop_path": "/86xWKTTGM0Bq4PIlRgIo5gxRcr5.jpg",
                "poster_path": "/gLhl4MBEC6yHTInwV7TxV1D3FLp.jpg"
                },
                {
                "id": 13703,
                "original_language": "en",
                "original_title": "Less Than Zero",
                "overview": "A college freshman returns to Los Angeles for the holidays at his ex-girlfriend is request, but discovers that his former best friend has an out-of-control drug habit.",
                "vote_count": 69,
                "video": false,
                "media_type": "movie",
                "credit_id": "5953d01192514168bf00bf4b",
                "vote_average": 6,
                "character": "Partygoer / Preppie Kid at Fight (uncredited)",
                "popularity": 1.22054,
                "release_date": "1987-11-06",
                "title": "Less Than Zero",
                "genre_ids": [
                    80,
                    18,
                    10749
                ],
                "adult": false,
                "backdrop_path": "/zRdK2OQ0BquK3mTrCu6AODiBtxi.jpg",
                "poster_path": "/8lgZSFuymoSMW3oDil135YU8Whq.jpg"
                },
                {
                "id": 10083,
                "original_language": "en",
                "original_title": "No Way Out",
                "overview": "Navy Lt. Tom Farrell meets a young woman, Susan Atwell , and they share a passionate fling. Farrell then finds out that his superior, Defense Secretary David Brice, is also romantically involved with Atwell. When the young woman turns up dead, Farrell is put in charge of the murder investigation. He begins to uncover shocking clues about the case, but when details of his encounter with Susan surface, he becomes a suspect as well.",
                "vote_count": 134,
                "video": false,
                "media_type": "movie",
                "credit_id": "5953d22fc3a368352601e078",
                "vote_average": 7,
                "character": "background extra (uncredited)",
                "popularity": 1.918446,
                "release_date": "1987-08-14",
                "title": "No Way Out",
                "genre_ids": [
                    28,
                    18,
                    53
                ],
                "adult": false,
                "backdrop_path": "/8UlhYT3vwoj9q2bcD8KshJqzXff.jpg",
                "poster_path": "/6XoG37a4U7Jum8ChYoMHq6l5NQQ.jpg"
                },
                {
                "id": 466272,
                "original_language": "en",
                "original_title": "Untitled Manson Murders Project",
                "overview": "Plot unknown. The film will focus on the Manson murders that took place in California in 1969.",
                "vote_count": 0,
                "video": false,
                "media_type": "movie",
                "credit_id": "5967b06392514132e1005850",
                "vote_average": 0,
                "character": "",
                "popularity": 1.1521,
                "release_date": "2019-12-31",
                "title": "Untitled Manson Murders Project",
                "genre_ids": [
                    80,
                    18
                ],
                "adult": false,
                "backdrop_path": null,
                "poster_path": null
                }
            ],
            "crew": [
                {
                "id": 69851,
                "department": "Production",
                "original_language": "en",
                "episode_count": 8,
                "job": "Executive Producer",
                "overview": "Anthology series of famous feuds with the first season based on the legendary rivalry between Bette Davis and Joan Crawford which began early on their careers, climaxed on the set of \"Whatever Happened to Baby Jane?\" and evolved into an Oscar vendetta.",
                "origin_country": [
                    "US"
                ],
                "original_name": "FEUD",
                "vote_count": 40,
                "name": "FEUD",
                "media_type": "tv",
                "popularity": 3.797967,
                "credit_id": "58d06d6e9251415a240011dc",
                "backdrop_path": "/r9SSeTSksoKhy8SRhGcsbJcVScX.jpg",
                "first_air_date": "2017-03-05",
                "vote_average": 7.6,
                "genre_ids": [
                    18
                ],
                "poster_path": "/rrUA6J9yQSKlhyIWSjv6JIDzr1V.jpg"
                },
                {
                "id": 69061,
                "department": "Production",
                "original_language": "en",
                "episode_count": 8,
                "job": "Executive Producer",
                "overview": "Prairie Johnson, blind as a child, comes home to the community she grew up in with her sight restored. Some hail her a miracle, others a dangerous mystery, but Prairie won’t talk with the FBI or her parents about the seven years she went missing.",
                "origin_country": [],
                "original_name": "The OA",
                "vote_count": 121,
                "name": "The OA",
                "media_type": "tv",
                "popularity": 6.990147,
                "credit_id": "58cf92ae9251415a7d0339c3",
                "backdrop_path": "/k9kPIikcQBzl93nSyXUfqc74J9S.jpg",
                "first_air_date": "2016-12-16",
                "vote_average": 7.3,
                "genre_ids": [
                    18,
                    9648,
                    10765
                ],
                "poster_path": "/ppSiYu2D0nw6KNF0kf5lKDxOGRR.jpg"
                },
                {
                "id": 174349,
                "department": "Production",
                "original_language": "en",
                "original_title": "Big Men",
                "job": "Executive Producer",
                "overview": "For her latest industrial exposé, Rachel Boynton (Our Brand Is Crisis) gained unprecedented access to Africa is oil companies. The result is a gripping account of the costly personal tolls levied when American corporate interests pursue oil in places like Ghana and the Niger River Delta. Executive produced by Steven Shainberg and Brad Pitt, Big Men investigates the caustic blend of ambition, corruption and greed that threatens to exacerbate Africa’s resource curse.",
                "genre_ids": [
                    99
                ],
                "video": false,
                "media_type": "movie",
                "credit_id": "52fe4d49c3a36847f8258cf3",
                "poster_path": "/q5uKDMl1PXIeMoD10CTbXST7XoN.jpg",
                "popularity": 1.214663,
                "backdrop_path": "/ieWzXfEx3AU9QANrGkbqeXgLeNH.jpg",
                "vote_count": 7,
                "title": "Big Men",
                "adult": false,
                "vote_average": 6.4,
                "release_date": "2014-03-14"
                },
                {
                "id": 218277,
                "department": "Production",
                "original_language": "en",
                "original_title": "Pretty/Handsome",
                "job": "Executive Producer",
                "overview": "A married father of two tells his wife and teenage sons that he is transsexual.",
                "genre_ids": [
                    18
                ],
                "video": false,
                "media_type": "movie",
                "credit_id": "52fe4e48c3a368484e2183d1",
                "poster_path": "/hiASAaSle8sjUZ9BHs4XrA30shS.jpg",
                "popularity": 1.418899,
                "backdrop_path": null,
                "vote_count": 0,
                "title": "Pretty/Handsome",
                "adult": false,
                "vote_average": 0,
                "release_date": "2008-06-01"
                },
                {
                "id": 60308,
                "department": "Production",
                "original_language": "en",
                "original_title": "Moneyball",
                "job": "Producer",
                "overview": "The story of Oakland Athletics general manager Billy Beane is successful attempt to put together a baseball team on a budget, by employing computer-generated analysis to draft his players.",
                "genre_ids": [
                    18
                ],
                "video": false,
                "media_type": "movie",
                "credit_id": "5383b2540e0a2624bd00d335",
                "poster_path": "/3oAa8mJJ97CH9AeGEY6vjAxqcvZ.jpg",
                "popularity": 3.796399,
                "backdrop_path": "/pxlaSPleGSNI8jJZYGhXH5LdI1B.jpg",
                "vote_count": 1272,
                "title": "Moneyball",
                "adult": false,
                "vote_average": 7,
                "release_date": "2011-09-22"
                },
                {
                "id": 1422,
                "department": "Production",
                "original_language": "en",
                "original_title": "The Departed",
                "job": "Producer",
                "overview": "To take down South Boston is Irish Mafia, the police send in one of their own to infiltrate the underworld, not realizing the syndicate has done likewise. While an undercover cop curries favor with the mob kingpin, a career criminal rises through the police ranks. But both sides soon discover there is a mole among them.",
                "genre_ids": [
                    80,
                    18,
                    53
                ],
                "video": false,
                "media_type": "movie",
                "credit_id": "52fe42f5c3a36847f802ff41",
                "poster_path": "/tGLO9zw5ZtCeyyEWgbYGgsFxC6i.jpg",
                "popularity": 5.68531,
                "backdrop_path": "/8Od5zV7Q7zNOX0y9tyNgpTmoiGA.jpg",
                "vote_count": 3895,
                "title": "The Departed",
                "adult": false,
                "vote_average": 7.9,
                "release_date": "2006-10-05"
                },
                {
                "id": 1988,
                "department": "Production",
                "original_language": "en",
                "original_title": "A Mighty Heart",
                "job": "Producer",
                "overview": "Based on Mariane Pearl is account of the terrifying and unforgettable story of her husband, Wall Street Journal reporter Danny Pearl is life and death.",
                "genre_ids": [
                    18,
                    53
                ],
                "video": false,
                "media_type": "movie",
                "credit_id": "52fe4329c3a36847f803ee3b",
                "poster_path": "/eFhsNdOjLk5sAEaEMcvRpnKc19c.jpg",
                "popularity": 2.099608,
                "backdrop_path": "/iAiiTbxkTdpxlc1FHLzGQXnYHP9.jpg",
                "vote_count": 89,
                "title": "A Mighty Heart",
                "adult": false,
                "vote_average": 6.7,
                "release_date": "2007-01-01"
                },
                {
                "id": 4512,
                "department": "Production",
                "original_language": "en",
                "original_title": "The Assassination of Jesse James by the Coward Robert Ford",
                "job": "Producer",
                "overview": "Outlaw Jesse James is rumored be the fastest gun in the West. An eager recruit into James notorious gang, Robert Ford eventually grows jealous of the famed outlaw and, when Robert and his brother sense an opportunity to kill James, their murderous action elevates their target to near mythical status.",
                "genre_ids": [
                    28,
                    18,
                    37
                ],
                "video": false,
                "media_type": "movie",
                "credit_id": "52fe43c7c3a36847f806ef0b",
                "poster_path": "/lSFYLoaL4eW7Q5VQ7SZQP4EHRCt.jpg",
                "popularity": 3.294203,
                "backdrop_path": "/zAh7HC8Tk2D0q3VdMOP6boqNG9N.jpg",
                "vote_count": 717,
                "title": "The Assassination of Jesse James by the Coward Robert Ford",
                "adult": false,
                "vote_average": 7,
                "release_date": "2007-09-02"
                },
                {
                "id": 23483,
                "department": "Production",
                "original_language": "en",
                "original_title": "Kick-Ass",
                "job": "Producer",
                "overview": "Dave Lizewski is an unnoticed high school student and comic book fan who one day decides to become a super-hero, even though he has no powers, training or meaningful reason to do so.",
                "genre_ids": [
                    28,
                    80
                ],
                "video": false,
                "media_type": "movie",
                "credit_id": "52fe446ac3a368484e021e13",
                "poster_path": "/yZFrniO6qSwjTCosStXweYtczGT.jpg",
                "popularity": 3.916197,
                "backdrop_path": "/qf59pVUHbY9z0Ke9Jg6HQghNJhM.jpg",
                "vote_count": 4202,
                "title": "Kick-Ass",
                "adult": false,
                "vote_average": 7,
                "release_date": "2010-03-22"
                },
                {
                "id": 7510,
                "department": "Production",
                "original_language": "en",
                "original_title": "Running with Scissors",
                "job": "Producer",
                "overview": "Young Augusten Burroughs absorbs experiences that could make for a shocking memoir: the son of an alcoholic father and an unstable mother, he is handed off to his mother is therapist, Dr. Finch, and spends his adolescent years as a member of Finch is bizarre extended family.",
                "genre_ids": [
                    35,
                    18
                ],
                "video": false,
                "media_type": "movie",
                "credit_id": "52fe4481c3a36847f809a065",
                "poster_path": "/pYFF3iMWDPcwXKpRM0GLIsnPf22.jpg",
                "popularity": 1.549846,
                "backdrop_path": "/avrYhsVr9MoFaCNCfPcj9sQfC6n.jpg",
                "vote_count": 72,
                "title": "Running with Scissors",
                "adult": false,
                "vote_average": 5.7,
                "release_date": "2006-10-27"
                },
                {
                "id": 24420,
                "department": "Production",
                "original_language": "en",
                "original_title": "The Time Traveler is Wife",
                "job": "Executive Producer",
                "overview": "Due to a genetic disorder, handsome librarian Henry DeTamble involuntarily zips through time, appearing at various moments in the life of his true love, the beautiful artist Clare Abshire.",
                "genre_ids": [
                    18,
                    14,
                    10749
                ],
                "video": false,
                "media_type": "movie",
                "credit_id": "52fe4495c3a368484e02af99",
                "poster_path": "/ayGp00uS6XRrNfbR59XWrJh9jpC.jpg",
                "popularity": 3.201308,
                "backdrop_path": "/2Po4fvS46AAshzDZGDdjkrVxPo8.jpg",
                "vote_count": 717,
                "title": "The Time Traveler is Wife",
                "adult": false,
                "vote_average": 6.7,
                "release_date": "2009-08-14"
                },
                {
                "id": 38167,
                "department": "Production",
                "original_language": "en",
                "original_title": "Eat Pray Love",
                "job": "Executive Producer",
                "overview": "Liz Gilbert had everything a modern woman is supposed to dream of having – a husband, a house and a successful career – yet like so many others, she found herself lost, confused and searching for what she really wanted in life. Newly divorced and at a crossroads, Gilbert steps out of her comfort zone, risking everything to change her life, embarking on a journey around the world that becomes a quest for self-discovery. In her travels, she discovers the true pleasure of nourishment by eating in Italy, the power of prayer in India and, finally and unexpectedly, the inner peace and balance of true love in Bali.",
                "genre_ids": [
                    18
                ],
                "video": false,
                "media_type": "movie",
                "credit_id": "52fe469c9251416c91059ecf",
                "poster_path": "/s57E4AfPIU1fxwpGGRahk6A0DUl.jpg",
                "popularity": 2.400653,
                "backdrop_path": "/2fwHVLvh6kdwCujsMwtNmwRJAf1.jpg",
                "vote_count": 568,
                "title": "Eat Pray Love",
                "adult": false,
                "vote_average": 5.8,
                "release_date": "2010-08-12"
                },
                {
                "id": 64689,
                "department": "Production",
                "original_language": "en",
                "original_title": "Killing Them Softly",
                "job": "Producer",
                "overview": "Jackie Cogan is an enforcer hired to restore order after three dumb guys rob a Mob protected card game, causing the local criminal economy to collapse.",
                "genre_ids": [
                    80,
                    53
                ],
                "video": false,
                "media_type": "movie",
                "credit_id": "52fe46e4c3a368484e0a9aa7",
                "poster_path": "/3WPa43edrQeLRFgXdiLiWnWV34a.jpg",
                "popularity": 2.22385,
                "backdrop_path": "/jikIWGfMFq8YxYziXVFyqBI7e3o.jpg",
                "vote_count": 695,
                "title": "Killing Them Softly",
                "adult": false,
                "vote_average": 5.8,
                "release_date": "2012-09-20"
                },
                {
                "id": 72190,
                "department": "Production",
                "original_language": "en",
                "original_title": "World War Z",
                "job": "Producer",
                "overview": "Life for former United Nations investigator Gerry Lane and his family seems content. Suddenly, the world is plagued by a mysterious infection turning whole human populations into rampaging mindless zombies. After barely escaping the chaos, Lane is persuaded to go on a mission to investigate this disease. What follows is a perilous trek around the world where Lane must brave horrific dangers and long odds to find answers before human civilization falls.",
                "genre_ids": [
                    28,
                    18,
                    27,
                    878,
                    53
                ],
                "video": false,
                "media_type": "movie",
                "credit_id": "52fe485dc3a368484e0f50f9",
                "poster_path": "/Ha5t0J21eyiq6Az1EXzx0iwsGH.jpg",
                "popularity": 7.710324,
                "backdrop_path": "/xMOQVYLeIKBXenJ9KMeasj7S64y.jpg",
                "vote_count": 5045,
                "title": "World War Z",
                "adult": false,
                "vote_average": 6.7,
                "release_date": "2013-06-20"
                },
                {
                "id": 301502,
                "department": "Production",
                "original_language": "en",
                "original_title": "Blonde",
                "job": "Producer",
                "overview": "A chronicle of the inner life of Marilyn Monroe.",
                "genre_ids": [
                    18
                ],
                "video": false,
                "media_type": "movie",
                "credit_id": "545c379ec3a368536b002903",
                "poster_path": null,
                "popularity": 1.285297,
                "backdrop_path": null,
                "vote_count": 0,
                "title": "Blonde",
                "adult": false,
                "vote_average": 0,
                "release_date": "2018-01-01"
                },
                {
                "id": 228150,
                "department": "Production",
                "original_language": "en",
                "original_title": "Fury",
                "job": "Executive Producer",
                "overview": "Last months of World War II in April 1945. As the Allies make their final push in the European Theater, a battle-hardened U.S. Army sergeant in the 2nd Armored Division named Wardaddy commands a Sherman tank called \"Fury\" and its five-man crew on a deadly mission behind enemy lines. Outnumbered and outgunned, Wardaddy and his men face overwhelming odds in their heroic attempts to strike at the heart of Nazi Germany.",
                "genre_ids": [
                    28,
                    18,
                    10752
                ],
                "video": false,
                "media_type": "movie",
                "credit_id": "5477f63d92514103b80010c0",
                "poster_path": "/pfte7wdMobMF4CVHuOxyu6oqeeA.jpg",
                "popularity": 17.802127,
                "backdrop_path": "/pKawqrtCBMmxarft7o1LbEynys7.jpg",
                "vote_count": 3570,
                "title": "Fury",
                "adult": false,
                "vote_average": 7.4,
                "release_date": "2014-10-15"
                },
                {
                "id": 273895,
                "department": "Production",
                "original_language": "en",
                "original_title": "Selma",
                "job": "Executive Producer",
                "overview": "\"Selma,\" as in Alabama, the place where segregation in the South was at its worst, leading to a march that ended in violence, forcing a famous statement by President Lyndon B. Johnson that ultimately led to the signing of the Civil Rights Act.",
                "genre_ids": [
                    18,
                    36
                ],
                "video": false,
                "media_type": "movie",
                "credit_id": "54aeb6ac9251417aa7000998",
                "poster_path": "/9FK5Jc3uIRXOmMWT6GmRAp9JyQ2.jpg",
                "popularity": 3.031758,
                "backdrop_path": "/dMKslph3Qw0tPvCHjwSvIdivf0V.jpg",
                "vote_count": 773,
                "title": "Selma",
                "adult": false,
                "vote_average": 7.4,
                "release_date": "2014-12-25"
                },
                {
                "id": 344025,
                "department": "Production",
                "original_language": "en",
                "original_title": "Americanah",
                "job": "Producer",
                "overview": "Two Nigerian teenagers, Ifemelu and Obinze, fall in love at a young age but get separated when Ifemelu goes to America for school and Obinze, in a post 9/11 world, gets stuck in London.",
                "genre_ids": [
                    18,
                    10749
                ],
                "video": false,
                "media_type": "movie",
                "credit_id": "5590e8bd925141757a0003a7",
                "poster_path": null,
                "popularity": 1.08788,
                "backdrop_path": null,
                "vote_count": 0,
                "title": "Americanah",
                "adult": false,
                "vote_average": 0,
                "release_date": "2017-07-14"
                },
                {
                "id": 245706,
                "department": "Production",
                "original_language": "en",
                "original_title": "True Story",
                "job": "Executive Producer",
                "overview": "A drama centered around the relationship between journalist Michael Finkel and Christian Longo, an FBI Most Wanted List murderer who for years lived outside the U.S. under Finkel is name.",
                "genre_ids": [
                    80,
                    18,
                    9648
                ],
                "video": false,
                "media_type": "movie",
                "credit_id": "55a5c16a9251410996000596",
                "poster_path": "/2kJCtB5FPfNH3LDYv2vINrtgCRD.jpg",
                "popularity": 2.712028,
                "backdrop_path": "/cZmWjJ9V6tJc12Hxq4Utp42u08V.jpg",
                "vote_count": 464,
                "title": "True Story",
                "adult": false,
                "vote_average": 6,
                "release_date": "2015-04-17"
                },
                {
                "id": 15325,
                "department": "Production",
                "original_language": "en",
                "original_title": "God Grew Tired of Us",
                "job": "Executive Producer",
                "overview": "GOD GREW TIRED OF US explores the indomitable spirit of three “Lost Boys” from the Sudan who leave their homeland, triumph over seemingly insurmountable adversities and move to America, where they build active and fulfilling new lives but remain deeply committed to helping the friends and family they have left behind.",
                "genre_ids": [
                    99
                ],
                "video": false,
                "media_type": "movie",
                "credit_id": "58d06e1f92514159d10013f3",
                "poster_path": "/3L6lIJWdlc9FKjlWZw6NeVgNV6H.jpg",
                "popularity": 1.388883,
                "backdrop_path": "/iGoCheUeBtv116TWbKnyWpaXBIB.jpg",
                "vote_count": 10,
                "title": "God Grew Tired of Us",
                "adult": false,
                "vote_average": 7.4,
                "release_date": "2007-01-12"
                },
                {
                "id": 13574,
                "department": "Production",
                "original_language": "en",
                "original_title": "Year of the Dog",
                "job": "Executive Producer",
                "overview": "A secretary is life changes in unexpected ways after her dog dies.",
                "genre_ids": [
                    35,
                    18,
                    10749
                ],
                "video": false,
                "media_type": "movie",
                "credit_id": "58d06caa92514159d6001183",
                "poster_path": "/e50H8OEShMbIJwqHdbSvP0Gcb9J.jpg",
                "popularity": 1.850182,
                "backdrop_path": "/9f7cNLWRL8ookzUZYWvyhueboF1.jpg",
                "vote_count": 21,
                "title": "Year of the Dog",
                "adult": false,
                "vote_average": 5.1,
                "release_date": "2007-04-13"
                },
                {
                "id": 354287,
                "department": "Production",
                "original_language": "en",
                "original_title": "War Machine",
                "job": "Producer",
                "overview": "A rock star general bent on winning the “impossible” war in Afghanistan takes us inside the complex machinery of modern war. Inspired by the true story of General Stanley McChrystal.",
                "genre_ids": [
                    35,
                    18,
                    10752
                ],
                "video": false,
                "media_type": "movie",
                "credit_id": "58cf9164c3a36850e902fabe",
                "poster_path": "/eEy3AYVAUFLaRqCOV95zYTDkNKL.jpg",
                "popularity": 4.096339,
                "backdrop_path": "/eQsellX1IeGaIjv1w4JBzoOrvmf.jpg",
                "vote_count": 155,
                "title": "War Machine",
                "adult": false,
                "vote_average": 6.1,
                "release_date": "2017-05-26"
                },
                {
                "id": 425980,
                "department": "Production",
                "original_language": "en",
                "original_title": "Brad is Status",
                "job": "Producer",
                "overview": "A father takes his son to tour colleges on the East Coast and meets up with an old friend who makes him feel inferior about his life is choices.",
                "genre_ids": [],
                "video": false,
                "media_type": "movie",
                "credit_id": "58cf91c09251415a41032db7",
                "poster_path": null,
                "popularity": 1.301739,
                "backdrop_path": null,
                "vote_count": 0,
                "title": "Brad is Status",
                "adult": false,
                "vote_average": 0,
                "release_date": "2017-10-26"
                },
                {
                "id": 336002,
                "department": "Production",
                "original_language": "en",
                "original_title": "World War Z 2",
                "job": "Producer",
                "overview": "The plot is currently unknown.",
                "genre_ids": [
                    28,
                    27,
                    53
                ],
                "video": false,
                "media_type": "movie",
                "credit_id": "58cf92069251415a61034a5b",
                "poster_path": null,
                "popularity": 1.52883,
                "backdrop_path": null,
                "vote_count": 4,
                "title": "World War Z 2",
                "adult": false,
                "vote_average": 0,
                "release_date": "2019-12-31"
                },
                {
                "id": 314095,
                "department": "Production",
                "original_language": "en",
                "original_title": "The Lost City of Z",
                "job": "Executive Producer",
                "overview": "At the dawn of the 20th century, British explorer Percy Fawcett journeys into the Amazon, where he discovers evidence of a previously unknown, advanced civilization that may have once inhabited the region. Despite being ridiculed by the scientific establishment, which views indigenous populations as savages, the determined Fawcett, supported by his devoted wife, son, and aide-de-camp, returns to his beloved jungle in an attempt to prove his case.",
                "genre_ids": [
                    28,
                    12,
                    18,
                    36
                ],
                "video": false,
                "media_type": "movie",
                "credit_id": "58cf92ffc3a36850e902fc08",
                "poster_path": "/uLHorVHuWQZ1HugTp0bbD19jef7.jpg",
                "popularity": 13.940931,
                "backdrop_path": "/dAQzSsITJVxyk9ChqPLyBEwtGuC.jpg",
                "vote_count": 315,
                "title": "The Lost City of Z",
                "adult": false,
                "vote_average": 6.1,
                "release_date": "2017-03-15"
                },
                {
                "id": 86822,
                "department": "Production",
                "original_language": "en",
                "original_title": "Voyage of Time: Life is Journey",
                "job": "Producer",
                "overview": "A celebration of the universe, displaying the whole of time, from its start to its final collapse. This film examines all that occurred to prepare the world that stands before us now: science and spirit, birth and death, the grand cosmos and the minute life systems of our planet. (Wide release version with narration by Cate Blanchett.)",
                "genre_ids": [
                    99,
                    18
                ],
                "video": false,
                "media_type": "movie",
                "credit_id": "58cf933ac3a36811ce002515",
                "poster_path": "/lfdinlGEkAwZGa4FOxKN6kMAt61.jpg",
                "popularity": 1.612537,
                "backdrop_path": "/ysTRZL56VFtvAIeFG9iXelm1Ywf.jpg",
                "vote_count": 21,
                "title": "Voyage of Time: Life is Journey",
                "adult": false,
                "vote_average": 5.5,
                "release_date": "2017-04-13"
                },
                {
                "id": 376867,
                "department": "Production",
                "original_language": "en",
                "original_title": "Moonlight",
                "job": "Executive Producer",
                "overview": "The tender, heartbreaking story of a young man’s struggle to find himself, told across three defining chapters in his life as he experiences the ecstasy, pain, and beauty of falling in love, while grappling with his own sexuality.",
                "genre_ids": [
                    18
                ],
                "video": false,
                "media_type": "movie",
                "credit_id": "58cf93e19251415a74033ed4",
                "poster_path": "/qAwFbszz0kRyTuXmMeKQZCX3Q2O.jpg",
                "popularity": 5.737014,
                "backdrop_path": "/1ytaxWeVHDYtb7KPkrn3GNtDJdF.jpg",
                "vote_count": 1482,
                "title": "Moonlight",
                "adult": false,
                "vote_average": 7.3,
                "release_date": "2016-10-21"
                },
                {
                "id": 417198,
                "department": "Production",
                "original_language": "en",
                "original_title": "Voyage of Time: The IMAX Experience",
                "job": "Producer",
                "overview": "A celebration of the universe, displaying the whole of time, from its start to its final collapse. This film examines all that occurred to prepare the world that stands before us now: science and spirit, birth and death, the grand cosmos and the minute life systems of our planet. (Limited release IMAX version with narration by Brad Pitt.)",
                "genre_ids": [
                    99
                ],
                "video": false,
                "media_type": "movie",
                "credit_id": "58cf94f1c3a36851040304c9",
                "poster_path": "/nnjUMLtG2ifo3f9kYWgTeDNObfL.jpg",
                "popularity": 1.15656,
                "backdrop_path": null,
                "vote_count": 4,
                "title": "Voyage of Time: The IMAX Experience",
                "adult": false,
                "vote_average": 5.5,
                "release_date": "2016-10-07"
                },
                {
                "id": 59859,
                "department": "Production",
                "original_language": "en",
                "original_title": "Kick-Ass 2",
                "job": "Producer",
                "overview": "After Kick-Ass’ insane bravery inspires a new wave of self-made masked crusaders, he joins a patrol led by the Colonel Stars and Stripes. When these amateur superheroes are hunted down by Red Mist — reborn as The Mother Fucker — only the blade-wielding Hit-Girl can prevent their annihilation.",
                "genre_ids": [
                    28,
                    12,
                    80
                ],
                "video": false,
                "media_type": "movie",
                "credit_id": "58cf95a0c3a368508c0317d5",
                "poster_path": "/pmdvrKYRdw7QxkLDaJzr6xMEqEZ.jpg",
                "popularity": 3.635202,
                "backdrop_path": "/fGuoOLZeM4elFV8CBcPCLMc1fwj.jpg",
                "vote_count": 2025,
                "title": "Kick-Ass 2",
                "adult": false,
                "vote_average": 6.3,
                "release_date": "2013-07-17"
                },
                {
                "id": 357681,
                "department": "Production",
                "original_language": "en",
                "original_title": "Hitting the Apex",
                "job": "Producer",
                "overview": "Hitting the Apex is the inside story of six fighters – six of the fastest motorcycle racers of all time – and of the fates that awaited them at the peak of the sport. It’s the story of what is at stake for all of them: all that can be won, and all that can be lost, when you go chasing glory at over two hundred miles an hour – on a motorcycle.",
                "genre_ids": [
                    99
                ],
                "video": false,
                "media_type": "movie",
                "credit_id": "58cf95e19251415a8b033147",
                "poster_path": "/8KW3fARQ2CYs7ra4obWCIsUdXtB.jpg",
                "popularity": 1.233615,
                "backdrop_path": "/htyN1EfbSsPbODZcgDfdScKgwRB.jpg",
                "vote_count": 18,
                "title": "Hitting the Apex",
                "adult": false,
                "vote_average": 8.3,
                "release_date": "2015-09-02"
                },
                {
                "id": 277662,
                "department": "Production",
                "original_language": "en",
                "original_title": "Nightingale",
                "job": "Executive Producer",
                "overview": "A lonely war veteran psychologically unravels ahead of an old friend is impending visit.",
                "genre_ids": [
                    18
                ],
                "video": false,
                "media_type": "movie",
                "credit_id": "58cf963fc3a36850fb030af7",
                "poster_path": "/9wQMUOCU253RzJ90ruZOFBlLkS3.jpg",
                "popularity": 2.06242,
                "backdrop_path": "/yVtTGeyiR51MV35t48Pbs0exWsH.jpg",
                "vote_count": 16,
                "title": "Nightingale",
                "adult": false,
                "vote_average": 6.1,
                "release_date": "2015-05-29"
                },
                {
                "id": 84284,
                "department": "Production",
                "original_language": "en",
                "original_title": "The House I Live In",
                "job": "Executive Producer",
                "overview": "In the past 40 years, the War on Drugs has accounted for 45 million arrests, made America the world is largest jailer, and destroyed impoverished communities at home and abroad. Yet drugs are cheaper, purer, and more available today than ever. Where did we go wrong, and what can be done?",
                "genre_ids": [
                    99
                ],
                "video": false,
                "media_type": "movie",
                "credit_id": "58cf969bc3a36850c002c632",
                "poster_path": "/9M0F27OnjPuJ2yiu6NCa1o4mkun.jpg",
                "popularity": 1.202993,
                "backdrop_path": "/SxMEljSnWV896ORubNDAblGVpI.jpg",
                "vote_count": 31,
                "title": "The House I Live In",
                "adult": false,
                "vote_average": 7.4,
                "release_date": "2012-10-05"
                },
                {
                "id": 4475,
                "department": "Production",
                "original_language": "en",
                "original_title": "The Private Lives of Pippa Lee",
                "job": "Executive Producer",
                "overview": "The life you love may be your own.... The wife of a much older man finds herself attracted to their neighbour is son, who is closer to her age.",
                "genre_ids": [
                    35,
                    18,
                    10749
                ],
                "video": false,
                "media_type": "movie",
                "credit_id": "58d06c0592514159f6000ff0",
                "poster_path": "/fVrYHI3YMPVk77DVdltDSxgL0Ew.jpg",
                "popularity": 2.031831,
                "backdrop_path": "/6Q4Jrn2XCmhRYiid29Olu1BWovU.jpg",
                "vote_count": 48,
                "title": "The Private Lives of Pippa Lee",
                "adult": false,
                "vote_average": 6,
                "release_date": "2009-07-07"
                },
                {
                "id": 8967,
                "department": "Production",
                "original_language": "en",
                "original_title": "The Tree of Life",
                "job": "Producer",
                "overview": "The impressionistic story of a Texas family in the 1950s. The film follows the life journey of the eldest son, Jack, through the innocence of childhood to his disillusioned adult years as he tries to reconcile a complicated relationship with his father. Jack finds himself a lost soul in the modern world, seeking answers to the origins and meaning of life while questioning the existence of faith.",
                "genre_ids": [
                    18,
                    14
                ],
                "video": false,
                "media_type": "movie",
                "credit_id": "56392e8892514129fe0122e5",
                "poster_path": "/ptDOdfOg0srtk4TGdeYbLqxv2nd.jpg",
                "popularity": 3.161888,
                "backdrop_path": "/tBs9alJ2weUkOW83RkuBlz8Nlw6.jpg",
                "vote_count": 896,
                "title": "The Tree of Life",
                "adult": false,
                "vote_average": 6.5,
                "release_date": "2011-05-18"
                },
                {
                "id": 318846,
                "department": "Production",
                "original_language": "en",
                "original_title": "The Big Short",
                "job": "Producer",
                "overview": "The men who made millions from a global economic meltdown.",
                "genre_ids": [
                    35,
                    18
                ],
                "video": false,
                "media_type": "movie",
                "credit_id": "568349e09251414f6300f7b7",
                "poster_path": "/p11Ftd4VposrAzthkhF53ifYZRl.jpg",
                "popularity": 4.832312,
                "backdrop_path": "/jmlMLYEsYY1kRc5qHIyTdxCeVmZ.jpg",
                "vote_count": 2357,
                "title": "The Big Short",
                "adult": false,
                "vote_average": 7.3,
                "release_date": "2015-12-11"
                },
                {
                "id": 314385,
                "department": "Production",
                "original_language": "en",
                "original_title": "By the Sea",
                "job": "Producer",
                "overview": "Set in France during the mid-1970s, Vanessa, a former dancer, and her husband Roland, an American writer, travel the country together. They seem to be growing apart, but when they linger in one quiet, seaside town they begin to draw close to some of its more vibrant inhabitants, such as a local bar/café-keeper and a hotel owner.",
                "genre_ids": [
                    18,
                    10749
                ],
                "video": false,
                "media_type": "movie",
                "credit_id": "56c309759251414b850017e4",
                "poster_path": "/vctzmTinuLACl2PIFuPhTNkTc62.jpg",
                "popularity": 2.778817,
                "backdrop_path": "/a2WCcsvWPZcqemlyKbbFEcxjfn0.jpg",
                "vote_count": 138,
                "title": "By the Sea",
                "adult": false,
                "vote_average": 5.4,
                "release_date": "2015-11-12"
                },
                {
                "id": 384678,
                "department": "Production",
                "original_language": "en",
                "original_title": "He Wanted the Moon",
                "job": "Producer",
                "overview": "In the 1920s, Dr. Perry Baird, who was born in Texas and educated at Harvard, begins his career ascent in the field of medicine.",
                "genre_ids": [
                    18
                ],
                "video": false,
                "media_type": "movie",
                "credit_id": "56d042d59251413e590059a3",
                "poster_path": null,
                "popularity": 1.000411,
                "backdrop_path": null,
                "vote_count": 0,
                "title": "He Wanted the Moon",
                "adult": false,
                "vote_average": 0,
                "release_date": "2017-07-14"
                },
                {
                "id": 387426,
                "department": "Production",
                "original_language": "en",
                "original_title": "Okja",
                "job": "Executive Producer",
                "overview": "A young girl named Mija risks everything to prevent a powerful, multi-national company from kidnapping her best friend - a massive animal named Okja.",
                "genre_ids": [
                    12,
                    18,
                    14,
                    878
                ],
                "video": false,
                "media_type": "movie",
                "credit_id": "57cbb037c3a3685c250098f9",
                "poster_path": "/pHlRr2MfjK77VIIAO7p0R4jhsJI.jpg",
                "popularity": 11.218333,
                "backdrop_path": "/qkLZoJ1h998eJEmbuHGPCKZF0y7.jpg",
                "vote_count": 370,
                "title": "Okja",
                "adult": false,
                "vote_average": 7.9,
                "release_date": "2017-05-19"
                }
            ],
            "id": 287
            }', true);
    }

    public function mockGetExternalIdsResponse(): array
    {
        return json_decode('{
            "imdb_id": "nm0319213",
            "facebook_id": null,
            "freebase_mid": "/m/03y9ccy",
            "freebase_id": null,
            "tvrage_id": 67721,
            "twitter_id": null,
            "id": 66633
          }', true);
    }

    public function mockGetImagesResponse(): array
    {
        return json_decode('{
            "id": 66633,
            "profiles": [
              {
                "aspect_ratio": 0.666666666666667,
                "file_path": "/rLSUjr725ez1cK7SKVxC9udO03Y.jpg",
                "height": 819,
                "iso_639_1": null,
                "vote_average": 5.3125,
                "vote_count": 1,
                "width": 546
              },
              {
                "aspect_ratio": 0.666666666666667,
                "file_path": "/lYqC8Amj4owX05xQg5Yo7uUHgah.jpg",
                "height": 3000,
                "iso_639_1": null,
                "vote_average": 0,
                "vote_count": 0,
                "width": 2000
              }
            ]
          }', true);
    }

    public function mockGetTaggedImagesResponse(): array
    {
        return json_decode('{
            "id": 287,
            "page": 1,
            "results": [
              {
                "aspect_ratio": 0.666666666666667,
                "file_path": "/811DjJTon9gD6hZ8nCjSitaIXFQ.jpg",
                "height": 1800,
                "id": "5520e4a59251415c82002fb9",
                "iso_639_1": "en",
                "vote_average": 5.82903040734366,
                "vote_count": 20,
                "width": 1200,
                "image_type": "poster",
                "media": {
                  "adult": false,
                  "backdrop_path": "/8uO0gUM8aNqYLs1OsTBQiXu0fEv.jpg",
                  "genre_ids": [
                    18
                  ],
                  "_id": "4bc88fc1017a3c122d009254",
                  "id": 550,
                  "original_language": "en",
                  "original_title": "Fight Club",
                  "overview": "A ticking-time-bomb insomniac and a slippery soap salesman channel primal male aggression into a shocking new form of therapy. Their concept catches on, with underground \"fight clubs\" forming in every town, until an eccentric gets in the way and ignites an out-of-control spiral toward oblivion.",
                  "release_date": "1999-10-14",
                  "poster_path": "/811DjJTon9gD6hZ8nCjSitaIXFQ.jpg",
                  "popularity": 6.590102,
                  "title": "Fight Club",
                  "video": false,
                  "vote_average": 8.1,
                  "vote_count": 5221
                },
                "media_type": "movie"
              },
              {
                "aspect_ratio": 0.666666666666667,
                "file_path": "/p11Ftd4VposrAzthkhF53ifYZRl.jpg",
                "height": 2100,
                "id": "564536209251410a49006e41",
                "iso_639_1": "en",
                "vote_average": 5.8250276854928,
                "vote_count": 23,
                "width": 1400,
                "image_type": "poster",
                "media": {
                  "adult": false,
                  "backdrop_path": "/jmlMLYEsYY1kRc5qHIyTdxCeVmZ.jpg",
                  "genre_ids": [
                    18,
                    35
                  ],
                  "_id": "54b9978fc3a3686c6b005e71",
                  "id": 318846,
                  "original_language": "en",
                  "original_title": "The Big Short",
                  "overview": "The men who made millions from a global economic meltdown.",
                  "release_date": "2015-12-11",
                  "poster_path": "/p11Ftd4VposrAzthkhF53ifYZRl.jpg",
                  "popularity": 5.46459,
                  "title": "The Big Short",
                  "video": false,
                  "vote_average": 7.2,
                  "vote_count": 1182
                },
                "media_type": "movie"
              },
              {
                "aspect_ratio": 0.709193245778612,
                "file_path": "/1YxnYKJaY3oIdqdOBw8uh7Bb2gI.jpg",
                "height": 1066,
                "id": "4f0776ed19c2957a95000c02",
                "iso_639_1": "pt",
                "vote_average": 5.75933075933076,
                "vote_count": 11,
                "width": 756,
                "image_type": "poster",
                "media": {
                  "adult": false,
                  "backdrop_path": "/8uO0gUM8aNqYLs1OsTBQiXu0fEv.jpg",
                  "genre_ids": [
                    18
                  ],
                  "_id": "4bc88fc1017a3c122d009254",
                  "id": 550,
                  "original_language": "en",
                  "original_title": "Fight Club",
                  "overview": "A ticking-time-bomb insomniac and a slippery soap salesman channel primal male aggression into a shocking new form of therapy. Their concept catches on, with underground \"fight clubs\" forming in every town, until an eccentric gets in the way and ignites an out-of-control spiral toward oblivion.",
                  "release_date": "1999-10-14",
                  "poster_path": "/811DjJTon9gD6hZ8nCjSitaIXFQ.jpg",
                  "popularity": 6.590102,
                  "title": "Fight Club",
                  "video": false,
                  "vote_average": 8.1,
                  "vote_count": 5221
                },
                "media_type": "movie"
              },
              {
                "aspect_ratio": 0.666666666666667,
                "file_path": "/zgB9CCTDlXRv50Z70ZI4elJtNEk.jpg",
                "height": 1500,
                "id": "4ea5dd882c058837cb000eb7",
                "iso_639_1": "en",
                "vote_average": 5.6468253968254,
                "vote_count": 57,
                "width": 1000,
                "image_type": "poster",
                "media": {
                  "adult": false,
                  "backdrop_path": "/ba4CpvnaxvAgff2jHiaqJrVpZJ5.jpg",
                  "genre_ids": [
                    80,
                    9648,
                    53
                  ],
                  "_id": "4bc8929f017a3c122d00e600",
                  "id": 807,
                  "original_language": "en",
                  "original_title": "Se7en",
                  "overview": "Two homicide detectives are on a desperate hunt for a serial killer whose crimes are based on the \"seven deadly sins\" in this dark and haunting film that takes viewers from the tortured remains of one victim to the next. The seasoned Det. Sommerset researches each sin in an effort to get inside the killer is mind, while his novice partner, Mills, scoffs at his efforts to unravel the case.",
                  "release_date": "1995-09-22",
                  "poster_path": "/zgB9CCTDlXRv50Z70ZI4elJtNEk.jpg",
                  "popularity": 5.902422,
                  "title": "Se7en",
                  "video": false,
                  "vote_average": 7.9,
                  "vote_count": 3168
                },
                "media_type": "movie"
              },
              {
                "aspect_ratio": 0.655737704918033,
                "file_path": "/9kGs9M9ZsLbxQSmKwUsc88bDhIi.jpg",
                "height": 976,
                "id": "569ff9b3c3a36858e500b62c",
                "iso_639_1": "pt",
                "vote_average": 5.64050972501677,
                "vote_count": 8,
                "width": 640,
                "image_type": "poster",
                "media": {
                  "adult": false,
                  "backdrop_path": "/jmlMLYEsYY1kRc5qHIyTdxCeVmZ.jpg",
                  "genre_ids": [
                    18,
                    35
                  ],
                  "_id": "54b9978fc3a3686c6b005e71",
                  "id": 318846,
                  "original_language": "en",
                  "original_title": "The Big Short",
                  "overview": "The men who made millions from a global economic meltdown.",
                  "release_date": "2015-12-11",
                  "poster_path": "/p11Ftd4VposrAzthkhF53ifYZRl.jpg",
                  "popularity": 5.46459,
                  "title": "The Big Short",
                  "video": false,
                  "vote_average": 7.2,
                  "vote_count": 1182
                },
                "media_type": "movie"
              },
              {
                "aspect_ratio": 1.77777777777778,
                "file_path": "/pKawqrtCBMmxarft7o1LbEynys7.jpg",
                "height": 1080,
                "id": "53f0efa70e0a2675b2003d2a",
                "iso_639_1": null,
                "vote_average": 5.62038900067069,
                "vote_count": 8,
                "width": 1920,
                "image_type": "backdrop",
                "media": {
                  "adult": false,
                  "backdrop_path": "/pKawqrtCBMmxarft7o1LbEynys7.jpg",
                  "genre_ids": [
                    10752,
                    18,
                    28
                  ],
                  "_id": "525e5281760ee314f71982b8",
                  "id": 228150,
                  "original_language": "en",
                  "original_title": "Fury",
                  "overview": "Last months of World War II in April 1945. As the Allies make their final push in the European Theater, a battle-hardened U.S. Army sergeant in the 2nd Armored Division named Wardaddy commands a Sherman tank called \"Fury\" and its five-man crew on a deadly mission behind enemy lines. Outnumbered and outgunned, Wardaddy and his men face overwhelming odds in their heroic attempts to strike at the heart of Nazi Germany.",
                  "release_date": "2014-10-15",
                  "poster_path": "/il9XWx5CbNd2KdDUwrcClEZiLkv.jpg",
                  "popularity": 9.085474,
                  "title": "Fury",
                  "video": false,
                  "vote_average": 7.4,
                  "vote_count": 2328
                },
                "media_type": "movie"
              },
              {
                "aspect_ratio": 1.77777777777778,
                "file_path": "/pxlaSPleGSNI8jJZYGhXH5LdI1B.jpg",
                "height": 1080,
                "id": "4ec2de3c5e73d648f4002d2b",
                "iso_639_1": null,
                "vote_average": 5.58862433862434,
                "vote_count": 9,
                "width": 1920,
                "image_type": "backdrop",
                "media": {
                  "adult": false,
                  "backdrop_path": "/pxlaSPleGSNI8jJZYGhXH5LdI1B.jpg",
                  "genre_ids": [
                    18
                  ],
                  "_id": "4d90ec565e73d67c4400102a",
                  "id": 60308,
                  "original_language": "en",
                  "original_title": "Moneyball",
                  "overview": "The story of Oakland Athletics general manager Billy Beane is successful attempt to put together a baseball team on a budget, by employing computer-generated analysis to draft his players.",
                  "release_date": "2011-09-22",
                  "poster_path": "/3oAa8mJJ97CH9AeGEY6vjAxqcvZ.jpg",
                  "popularity": 2.522691,
                  "title": "Moneyball",
                  "video": false,
                  "vote_average": 6.9,
                  "vote_count": 809
                },
                "media_type": "movie"
              },
              {
                "aspect_ratio": 1.77777777777778,
                "file_path": "/jikIWGfMFq8YxYziXVFyqBI7e3o.jpg",
                "height": 1080,
                "id": "50df15e4760ee37e16475592",
                "iso_639_1": "xx",
                "vote_average": 5.58503401360544,
                "vote_count": 7,
                "width": 1920,
                "image_type": "backdrop",
                "media": {
                  "adult": false,
                  "backdrop_path": "/jikIWGfMFq8YxYziXVFyqBI7e3o.jpg",
                  "genre_ids": [
                    80,
                    53
                  ],
                  "_id": "4dd7b7dd5e73d64185007af7",
                  "id": 64689,
                  "original_language": "en",
                  "original_title": "Killing Them Softly",
                  "overview": "Jackie Cogan is an enforcer hired to restore order after three dumb guys rob a Mob protected card game, causing the local criminal economy to collapse.",
                  "release_date": "2012-09-20",
                  "poster_path": "/3WPa43edrQeLRFgXdiLiWnWV34a.jpg",
                  "popularity": 2.266419,
                  "title": "Killing Them Softly",
                  "video": false,
                  "vote_average": 5.7,
                  "vote_count": 442
                },
                "media_type": "movie"
              },
              {
                "aspect_ratio": 1.77777777777778,
                "file_path": "/r9BCMru6cPtuXeIRKGGkf4NNRrU.jpg",
                "height": 1080,
                "id": "4ea5f7694f13c137cc00228b",
                "iso_639_1": null,
                "vote_average": 5.54468362687541,
                "vote_count": 10,
                "width": 1920,
                "image_type": "backdrop",
                "media": {
                  "adult": false,
                  "backdrop_path": "/r9BCMru6cPtuXeIRKGGkf4NNRrU.jpg",
                  "genre_ids": [
                    35,
                    18
                  ],
                  "_id": "4bc89f7e017a3c122d02efd9",
                  "id": 4944,
                  "original_language": "en",
                  "original_title": "Burn After Reading",
                  "overview": "This is a comedic tale of espionage. An ousted CIA official is memoir accidentally falls into the hands of two unwise gym employees intent on exploiting their find.",
                  "release_date": "2008-09-05",
                  "poster_path": "/y4YeryDK5PuDlCHNTXJqwAwq9rf.jpg",
                  "popularity": 2.014229,
                  "title": "Burn After Reading",
                  "video": false,
                  "vote_average": 6.3,
                  "vote_count": 664
                },
                "media_type": "movie"
              },
              {
                "aspect_ratio": 1.77777777777778,
                "file_path": "/ba4CpvnaxvAgff2jHiaqJrVpZJ5.jpg",
                "height": 1080,
                "id": "4f75feaa19c29542930005f1",
                "iso_639_1": null,
                "vote_average": 5.53990610328638,
                "vote_count": 8,
                "width": 1920,
                "image_type": "backdrop",
                "media": {
                  "adult": false,
                  "backdrop_path": "/ba4CpvnaxvAgff2jHiaqJrVpZJ5.jpg",
                  "genre_ids": [
                    80,
                    9648,
                    53
                  ],
                  "_id": "4bc8929f017a3c122d00e600",
                  "id": 807,
                  "original_language": "en",
                  "original_title": "Se7en",
                  "overview": "Two homicide detectives are on a desperate hunt for a serial killer whose crimes are based on the \"seven deadly sins\" in this dark and haunting film that takes viewers from the tortured remains of one victim to the next. The seasoned Det. Sommerset researches each sin in an effort to get inside the killer is mind, while his novice partner, Mills, scoffs at his efforts to unravel the case.",
                  "release_date": "1995-09-22",
                  "poster_path": "/zgB9CCTDlXRv50Z70ZI4elJtNEk.jpg",
                  "popularity": 5.902422,
                  "title": "Se7en",
                  "video": false,
                  "vote_average": 7.9,
                  "vote_count": 3168
                },
                "media_type": "movie"
              },
              {
                "aspect_ratio": 1.77777777777778,
                "file_path": "/u4izHlsHk8jwalt5m7E2uzP8q9E.jpg",
                "height": 1080,
                "id": "4ea5f4672c058837cb0022cb",
                "iso_639_1": null,
                "vote_average": 5.49603174603175,
                "vote_count": 9,
                "width": 1920,
                "image_type": "backdrop",
                "media": {
                  "adult": false,
                  "backdrop_path": "/u4izHlsHk8jwalt5m7E2uzP8q9E.jpg",
                  "genre_ids": [
                    14,
                    18,
                    53,
                    9648,
                    10749
                  ],
                  "_id": "4bc89f67017a3c122d02eb5b",
                  "id": 4922,
                  "original_language": "en",
                  "original_title": "The Curious Case of Benjamin Button",
                  "overview": "Tells the story of Benjamin Button, a man who starts aging backwards with bizarre consequences.",
                  "release_date": "2008-11-24",
                  "poster_path": "/4O4INOPtWTfHq3dd5vYTPV0TCwa.jpg",
                  "popularity": 3.575855,
                  "title": "The Curious Case of Benjamin Button",
                  "video": false,
                  "vote_average": 7.2,
                  "vote_count": 1673
                },
                "media_type": "movie"
              },
              {
                "aspect_ratio": 0.666666666666667,
                "file_path": "/il9XWx5CbNd2KdDUwrcClEZiLkv.jpg",
                "height": 2100,
                "id": "54b6b4bec3a3686c6f000253",
                "iso_639_1": "en",
                "vote_average": 5.46457607433217,
                "vote_count": 19,
                "width": 1400,
                "image_type": "poster",
                "media": {
                  "adult": false,
                  "backdrop_path": "/pKawqrtCBMmxarft7o1LbEynys7.jpg",
                  "genre_ids": [
                    10752,
                    18,
                    28
                  ],
                  "_id": "525e5281760ee314f71982b8",
                  "id": 228150,
                  "original_language": "en",
                  "original_title": "Fury",
                  "overview": "Last months of World War II in April 1945. As the Allies make their final push in the European Theater, a battle-hardened U.S. Army sergeant in the 2nd Armored Division named Wardaddy commands a Sherman tank called \"Fury\" and its five-man crew on a deadly mission behind enemy lines. Outnumbered and outgunned, Wardaddy and his men face overwhelming odds in their heroic attempts to strike at the heart of Nazi Germany.",
                  "release_date": "2014-10-15",
                  "poster_path": "/il9XWx5CbNd2KdDUwrcClEZiLkv.jpg",
                  "popularity": 9.085474,
                  "title": "Fury",
                  "video": false,
                  "vote_average": 7.4,
                  "vote_count": 2328
                },
                "media_type": "movie"
              },
              {
                "aspect_ratio": 1.77777777777778,
                "file_path": "/y9LxwLkIYows2NcIU4oAAk3Xfgt.jpg",
                "height": 1080,
                "id": "53566f67c3a36841cf002514",
                "iso_639_1": "xx",
                "vote_average": 5.45518207282913,
                "vote_count": 5,
                "width": 1920,
                "image_type": "backdrop",
                "media": {
                  "adult": false,
                  "backdrop_path": "/ba4CpvnaxvAgff2jHiaqJrVpZJ5.jpg",
                  "genre_ids": [
                    80,
                    9648,
                    53
                  ],
                  "_id": "4bc8929f017a3c122d00e600",
                  "id": 807,
                  "original_language": "en",
                  "original_title": "Se7en",
                  "overview": "Two homicide detectives are on a desperate hunt for a serial killer whose crimes are based on the \"seven deadly sins\" in this dark and haunting film that takes viewers from the tortured remains of one victim to the next. The seasoned Det. Sommerset researches each sin in an effort to get inside the killer is mind, while his novice partner, Mills, scoffs at his efforts to unravel the case.",
                  "release_date": "1995-09-22",
                  "poster_path": "/zgB9CCTDlXRv50Z70ZI4elJtNEk.jpg",
                  "popularity": 5.902422,
                  "title": "Se7en",
                  "video": false,
                  "vote_average": 7.9,
                  "vote_count": 3168
                },
                "media_type": "movie"
              },
              {
                "aspect_ratio": 1.77777777777778,
                "file_path": "/uHx9E9xqSgOBoRvL4shmMNu8Ojc.jpg",
                "height": 1080,
                "id": "4ea5e2754f13c137cc001229",
                "iso_639_1": null,
                "vote_average": 5.45454545454546,
                "vote_count": 3,
                "width": 1920,
                "image_type": "backdrop",
                "media": {
                  "adult": false,
                  "backdrop_path": "/uHx9E9xqSgOBoRvL4shmMNu8Ojc.jpg",
                  "genre_ids": [
                    18
                  ],
                  "_id": "4bc894b6017a3c122d01272a",
                  "id": 1164,
                  "original_language": "en",
                  "original_title": "Babel",
                  "overview": "Tragedy strikes a married couple on vacation in the Moroccan desert, touching off an interlocking story involving four different families.",
                  "release_date": "2006-09-08",
                  "poster_path": "/fxneN0EQZwTfAfhTGUvUuIn6PLi.jpg",
                  "popularity": 2.372059,
                  "title": "Babel",
                  "video": false,
                  "vote_average": 6.7,
                  "vote_count": 527
                },
                "media_type": "movie"
              },
              {
                "aspect_ratio": 0.700073691967576,
                "file_path": "/uQaUIbbLJJkQBrqAP4GSMuKlRtx.jpg",
                "height": 2714,
                "id": "552677c8c3a3687df3003f87",
                "iso_639_1": "it",
                "vote_average": 5.45454545454546,
                "vote_count": 3,
                "width": 1900,
                "image_type": "poster",
                "media": {
                  "adult": false,
                  "backdrop_path": "/pKawqrtCBMmxarft7o1LbEynys7.jpg",
                  "genre_ids": [
                    10752,
                    18,
                    28
                  ],
                  "_id": "525e5281760ee314f71982b8",
                  "id": 228150,
                  "original_language": "en",
                  "original_title": "Fury",
                  "overview": "Last months of World War II in April 1945. As the Allies make their final push in the European Theater, a battle-hardened U.S. Army sergeant in the 2nd Armored Division named Wardaddy commands a Sherman tank called \"Fury\" and its five-man crew on a deadly mission behind enemy lines. Outnumbered and outgunned, Wardaddy and his men face overwhelming odds in their heroic attempts to strike at the heart of Nazi Germany.",
                  "release_date": "2014-10-15",
                  "poster_path": "/il9XWx5CbNd2KdDUwrcClEZiLkv.jpg",
                  "popularity": 9.085474,
                  "title": "Fury",
                  "video": false,
                  "vote_average": 7.4,
                  "vote_count": 2328
                },
                "media_type": "movie"
              },
              {
                "aspect_ratio": 1.77777777777778,
                "file_path": "/ucfWS1l0mVHKOtgL8ew5Y10IZMM.jpg",
                "height": 1080,
                "id": "52cbd1c719c29553e4000204",
                "iso_639_1": null,
                "vote_average": 5.45454545454546,
                "vote_count": 3,
                "width": 1920,
                "image_type": "backdrop",
                "media": {
                  "adult": false,
                  "backdrop_path": "/ucfWS1l0mVHKOtgL8ew5Y10IZMM.jpg",
                  "genre_ids": [
                    53,
                    80
                  ],
                  "_id": "4bc8af94017a3c122d0557b9",
                  "id": 10909,
                  "original_language": "en",
                  "original_title": "Kalifornia",
                  "overview": "A journalist duo go on a tour of serial killer murder sites with two companions, unaware that one of them is a serial killer himself.",
                  "release_date": "1993-09-01",
                  "poster_path": "/2mKtsNtQ2yMZPrBL1wXWzolvxaZ.jpg",
                  "popularity": 1.488432,
                  "title": "Kalifornia",
                  "video": false,
                  "vote_average": 6.1,
                  "vote_count": 84
                },
                "media_type": "movie"
              },
              {
                "aspect_ratio": 0.666666666666667,
                "file_path": "/fIHF63oznk2PXlYM6pPfhnOB3SD.jpg",
                "height": 3000,
                "id": "53f0eed8c3a3685ae7002f0f",
                "iso_639_1": "en",
                "vote_average": 5.45264259549974,
                "vote_count": 28,
                "width": 2000,
                "image_type": "poster",
                "media": {
                  "adult": false,
                  "backdrop_path": "/pKawqrtCBMmxarft7o1LbEynys7.jpg",
                  "genre_ids": [
                    10752,
                    18,
                    28
                  ],
                  "_id": "525e5281760ee314f71982b8",
                  "id": 228150,
                  "original_language": "en",
                  "original_title": "Fury",
                  "overview": "Last months of World War II in April 1945. As the Allies make their final push in the European Theater, a battle-hardened U.S. Army sergeant in the 2nd Armored Division named Wardaddy commands a Sherman tank called \"Fury\" and its five-man crew on a deadly mission behind enemy lines. Outnumbered and outgunned, Wardaddy and his men face overwhelming odds in their heroic attempts to strike at the heart of Nazi Germany.",
                  "release_date": "2014-10-15",
                  "poster_path": "/il9XWx5CbNd2KdDUwrcClEZiLkv.jpg",
                  "popularity": 9.085474,
                  "title": "Fury",
                  "video": false,
                  "vote_average": 7.4,
                  "vote_count": 2328
                },
                "media_type": "movie"
              },
              {
                "aspect_ratio": 0.666666666666667,
                "file_path": "/3oAa8mJJ97CH9AeGEY6vjAxqcvZ.jpg",
                "height": 1500,
                "id": "4eecb3a919c29554e7000522",
                "iso_639_1": "en",
                "vote_average": 5.45189504373178,
                "vote_count": 35,
                "width": 1000,
                "image_type": "poster",
                "media": {
                  "adult": false,
                  "backdrop_path": "/pxlaSPleGSNI8jJZYGhXH5LdI1B.jpg",
                  "genre_ids": [
                    18
                  ],
                  "_id": "4d90ec565e73d67c4400102a",
                  "id": 60308,
                  "original_language": "en",
                  "original_title": "Moneyball",
                  "overview": "The story of Oakland Athletics general manager Billy Beane is successful attempt to put together a baseball team on a budget, by employing computer-generated analysis to draft his players.",
                  "release_date": "2011-09-22",
                  "poster_path": "/3oAa8mJJ97CH9AeGEY6vjAxqcvZ.jpg",
                  "popularity": 2.522691,
                  "title": "Moneyball",
                  "video": false,
                  "vote_average": 6.9,
                  "vote_count": 809
                },
                "media_type": "movie"
              },
              {
                "aspect_ratio": 1.77777777777778,
                "file_path": "/T9a9Q6Pin6Pra7dNMwWzAibxkk.jpg",
                "height": 1080,
                "id": "4efc381d760ee30492008da9",
                "iso_639_1": null,
                "vote_average": 5.44117647058823,
                "vote_count": 5,
                "width": 1920,
                "image_type": "backdrop",
                "media": {
                  "adult": false,
                  "backdrop_path": "/pxlaSPleGSNI8jJZYGhXH5LdI1B.jpg",
                  "genre_ids": [
                    18
                  ],
                  "_id": "4d90ec565e73d67c4400102a",
                  "id": 60308,
                  "original_language": "en",
                  "original_title": "Moneyball",
                  "overview": "The story of Oakland Athletics general manager Billy Beane is successful attempt to put together a baseball team on a budget, by employing computer-generated analysis to draft his players.",
                  "release_date": "2011-09-22",
                  "poster_path": "/3oAa8mJJ97CH9AeGEY6vjAxqcvZ.jpg",
                  "popularity": 2.522691,
                  "title": "Moneyball",
                  "video": false,
                  "vote_average": 6.9,
                  "vote_count": 809
                },
                "media_type": "movie"
              },
              {
                "aspect_ratio": 0.674666666666667,
                "file_path": "/9wr4yJKMjPCNPI9S8AZYHnUZdFu.jpg",
                "height": 1500,
                "id": "4ea724a934f863633c00586b",
                "iso_639_1": "en",
                "vote_average": 5.43171114599686,
                "vote_count": 28,
                "width": 1012,
                "image_type": "poster",
                "media": {
                  "adult": false,
                  "backdrop_path": "/pxlaSPleGSNI8jJZYGhXH5LdI1B.jpg",
                  "genre_ids": [
                    18
                  ],
                  "_id": "4d90ec565e73d67c4400102a",
                  "id": 60308,
                  "original_language": "en",
                  "original_title": "Moneyball",
                  "overview": "The story of Oakland Athletics general manager Billy Beane is successful attempt to put together a baseball team on a budget, by employing computer-generated analysis to draft his players.",
                  "release_date": "2011-09-22",
                  "poster_path": "/3oAa8mJJ97CH9AeGEY6vjAxqcvZ.jpg",
                  "popularity": 2.522691,
                  "title": "Moneyball",
                  "video": false,
                  "vote_average": 6.9,
                  "vote_count": 809
                },
                "media_type": "movie"
              }
            ],
            "total_pages": 5,
            "total_results": 94
          }', true);
    }

    public function mockGetTranslationsResponse(): array
    {
        return json_decode('{
            "translations": [
              {
                "iso_639_1": "en",
                "iso_3166_1": "US",
                "name": "English",
                "data": {
                  "biography": "William Bradley \"Brad\" Pitt (born December 18, 1963) is an American actor and film producer. Pitt has received two Academy Award nominations and four Golden Globe Award nominations, winning one. He has been described as one of the world is most attractive men, a label for which he has received substantial media attention. Pitt began his acting career with television guest appearances, including a role on the CBS prime-time soap opera Dallas in 1987. He later gained recognition as the cowboy hitchhiker who seduces Geena Davis is character in the 1991 road movie Thelma & Louise. Pitt is first leading roles in big-budget productions came with A River Runs Through It (1992) and Interview with the Vampire (1994). He was cast opposite Anthony Hopkins in the 1994 drama Legends of the Fall, which earned him his first Golden Globe nomination. In 1995 he gave critically acclaimed performances in the crime thriller Seven and the science fiction film 12 Monkeys, the latter securing him a Golden Globe Award for Best Supporting Actor and an Academy Award nomination.\n\nFour years later, in 1999, Pitt starred in the cult hit Fight Club. He then starred in the major international hit as Rusty Ryan in Ocean is Eleven (2001) and its sequels, Ocean is Twelve (2004) and Ocean is Thirteen (2007). His greatest commercial successes have been Troy (2004) and Mr. & Mrs. Smith (2005).\n\nPitt received his second Academy Award nomination for his title role performance in the 2008 film The Curious Case of Benjamin Button. Following a high-profile relationship with actress Gwyneth Paltrow, Pitt was married to actress Jennifer Aniston for five years. Pitt lives with actress Angelina Jolie in a relationship that has generated wide publicity. He and Jolie have six children—Maddox, Pax, Zahara, Shiloh, Knox, and Vivienne.\n\nSince beginning his relationship with Jolie, he has become increasingly involved in social issues both in the United States and internationally. Pitt owns a production company named Plan B Entertainment, whose productions include the 2007 Academy Award winning Best Picture, The Departed."
                },
                "english_name": "en"
              },
              {
                "iso_639_1": "pt",
                "iso_3166_1": "BR",
                "name": "Português",
                "data": {
                  "biography": "William Bradley Pitt mais conhecido como Brad Pitt (Shawnee, 18 de Dezembro de 1963), é um ator, produtor cinematográfico e empresário norte-americano, fundador e atualmente único dono da produtora de filmes Plan B Entertainment e viticultor e dono da vinícola Miraval.\n\nFonte: Wikipédia, a enciclopédia livre."
                },
                "english_name": "pt"
              },
              {
                "iso_639_1": "fr",
                "iso_3166_1": "FR",
                "name": "Français",
                "data": {
                  "biography": "William Bradley Pitt, dit Brad Pitt, est un acteur et producteur de cinéma américain né le 18 décembre 1963 à Shawnee (Oklahoma).\n\nRepéré dans une publicité pour Levi is, Brad Pitt sort de lanonymat grâce à un petit rôle dans le film Thelma et Louise de Ridley Scott. En très peu de temps, il devient une véritable star et sa collaboration avec le réalisateur David Fincher donne naissance aux films cultes Seven, Fight Club et LÉtrange Histoire de Benjamin Button. Il tourne dans de nombreux autres succès comme Entretien avec un vampire de Neil Jordan, Ocean is Eleven et ses suites de Steven Soderbergh, Troie de Wolfgang Petersen, Inglourious Basterds de Quentin Tarantino et World War Z de Marc Forster. Au cours de sa carrière, il a reçu quatre nominations aux Oscars et cinq nominations aux Golden Globes, dont un remporté pour LArmée des douze singes de Terry Gilliam en 1996.\n\nSex-symbol des années 1990, Brad Pitt est le premier acteur élu deux fois « Homme le plus sexy du monde » par le magazine People en 1995 et en 2000. Avec sa femme Angelina Jolie (rencontrée sur le tournage de Mr et Mrs Smith et qui a demandé le divorce en septembre 2016), il est le père de 6 enfants. Leur couple est très médiatisé dans les années 2000, y compris dans leurs actions humanitaires (à loccasion notamment du tsunami de 2004 et de louragan Katrina).\n\nÀ partir de 2002, il sinvestit dans la production via sa société Plan B Entertainment avec des films tels que Les Infiltrés de Martin Scorsese et Twelve Years a Slave de Steve McQueen, qui ont chacun été récompensés par lOscar du meilleur film en 2007 et 2014, The Tree of Life de Terrence Malick, qui a reçu la Palme dor au Festival de Cannes en 2011, ou des succès publics comme World War Z."
                },
                "english_name": "fr"
              },
              {
                "iso_639_1": "lt",
                "iso_3166_1": "LT",
                "name": "Lietuvikai",
                "data": {
                  "biography": ""
                },
                "english_name": "lt"
              },
              {
                "iso_639_1": "uk",
                "iso_3166_1": "UA",
                "name": "Український",
                "data": {
                  "biography": ""
                },
                "english_name": "uk"
              },
              {
                "iso_639_1": "de",
                "iso_3166_1": "DE",
                "name": "Deutsch",
                "data": {
                  "biography": ""
                },
                "english_name": "de"
              },
              {
                "iso_639_1": "cs",
                "iso_3166_1": "CZ",
                "name": "Český",
                "data": {
                  "biography": ""
                },
                "english_name": "cs"
              },
              {
                "iso_639_1": "es",
                "iso_3166_1": "ES",
                "name": "Español",
                "data": {
                  "biography": "William Bradley Pitt (Shawnee, Oklahoma; 18 de diciembre de 1963) es un actor y productor de cine estadounidense. Además de por su trabajo interpretativo, por el que ha sido nominado en tres ocasiones a los Premios Óscar y en cuatro a los Premios Globo de Oro.\n\nPitt comenzó su carrera interpretativa al aparecer como invitado en programas de televisión, entre los cuales se incluye un papel en el serial televisivo de CBS, Dallas (1987). Posteriormente, obtuvo reconocimiento de la prensa con la interpretación del cowboy autoestopista que seduce al personaje de Geena Davis en la película Thelma & Louise (1991). Los primeros papeles protagónicos de Pitt en producciones de alto presupuesto fueron A River Runs Through It (1992) y Entrevista con el vampiro (1994). También participó junto con Anthony Hopkins en el drama Leyendas de pasión (1994), papel que le hizo obtener su primera nominación a los Premios Globo de Oro.\n\nEn 1995 recibió aclamación de la crítica por sus interpretaciones en el filme de suspense Se7en y en el de ciencia ficción Doce monos, siendo esta última la que lo hizo ganar un Globo de Oro en la categoría de «mejor actor de reparto» y una nominación al Premio Óscar. Cuatro años más tarde, protagonizó el éxito de culto Fight Club (1999), y poco después actuó en el exitoso filme Ocean is Eleven (2001)."
                },
                "english_name": "es"
              },
              {
                "iso_639_1": "ru",
                "iso_3166_1": "RU",
                "name": "Pусский",
                "data": {
                  "biography": "Уи́льям Брэ́дли Питт (англ. William Bradley Pitt; 18 декабря 1963 года, Шони, Оклахома, США), более известный как Брэд Питт (Brad Pitt) — американский актёр и продюсер. Лауреат премии «Золотой глобус» за 1995 год — за роль второго плана в ленте «Двенадцать обезьян». Обладатель премии «Оскар» как один из продюсеров фильма «12 лет рабства» — победителя в категории «Лучший фильм» на церемонии 2014 года; до этой победы четыре раза становился «оскаровским» номинантом: трижды — как актёр и один раз — как продюсер.\n\nУильям Брэдли Питт родился в городе Шони (штат Оклахома, США), вырос в очень религиозной американской семье. Его отец, Уильям Питт, работал менеджером в компании, занимавшейся грузоперевозками, мать, Джейн Этта Хиллхаус, — преподавателем в местной школе. Он, его брат Даг Питт и сестра Джулия Питт росли в Спрингфилде (штат Миссури), куда семья переехала вскоре после его рождения. В школе Питт занимался спортом, состоял в дебатном клубе, музыкальной секции и участвовал в студенческом самоуправлении. После школы Уильям поступил в университет Миссури — Колумбия, где изучал журналистику и рекламное дело. Однако после окончания университета по профессии работать он не пошёл, а отправился в Голливуд с целью начать актёрскую карьеру. Там он сменил своё имя на «Брэд Питт»"
                },
                "english_name": "ru"
              },
              {
                "iso_639_1": "bg",
                "iso_3166_1": "BG",
                "name": "български език",
                "data": {
                  "biography": ""
                },
                "english_name": "bg"
              },
              {
                "iso_639_1": "pt",
                "iso_3166_1": "PT",
                "name": "Português",
                "data": {
                  "biography": ""
                },
                "english_name": "pt"
              },
              {
                "iso_639_1": "hr",
                "iso_3166_1": "HR",
                "name": "Hrvatski",
                "data": {
                  "biography": ""
                },
                "english_name": "hr"
              },
              {
                "iso_639_1": "tr",
                "iso_3166_1": "TR",
                "name": "Türkçe",
                "data": {
                  "biography": ""
                },
                "english_name": "tr"
              }
            ],
            "id": 287
          }', true);
    }

    public function mockGetLatestResponse(): array
    {
        return json_decode('{
            "adult": false,
            "also_known_as": [],
            "biography": null,
            "birthday": null,
            "deathday": null,
            "gender": 0,
            "homepage": null,
            "id": 1671971,
            "imdb_id": null,
            "name": "Midnight Syndicate",
            "place_of_birth": null,
            "popularity": 0,
            "profile_path": null
          }', true);
    }

    public function mockGetPopularResponse(): array
    {
        return json_decode('{
            "page": 1,
            "results": [
              {
                "profile_path": "/z3sLuRKP7hQVrvSTsqdLjGSldwG.jpg",
                "adult": false,
                "id": 28782,
                "known_for": [
                  {
                    "poster_path": "/hE24GYddaxB9MVZl1CaiI86M3kp.jpg",
                    "adult": false,
                    "overview": "A cryptic message from Bond’s past sends him on a trail to uncover a sinister organization. While M battles political forces to keep the secret service alive, Bond peels back the layers of deceit to reveal the terrible truth behind SPECTRE.",
                    "release_date": "2015-10-26",
                    "original_title": "Spectre",
                    "genre_ids": [
                      28,
                      12,
                      80
                    ],
                    "id": 206647,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Spectre",
                    "backdrop_path": "/wVTYlkKPKrljJfugXN7UlLNjtuJ.jpg",
                    "popularity": 7.090211,
                    "vote_count": 2956,
                    "video": false,
                    "vote_average": 6.2
                  },
                  {
                    "poster_path": "/ezIurBz2fdUc68d98Fp9dRf5ihv.jpg",
                    "adult": false,
                    "overview": "Six months after the events depicted in The Matrix, Neo has proved to be a good omen for the free humans, as more and more humans are being freed from the matrix and brought to Zion, the one and only stronghold of the Resistance. Neo himself has discovered his superpowers including super speed, ability to see the codes of the things inside the matrix and a certain degree of pre-cognition. But a nasty piece of news hits the human resistance: 250,000 machine sentinels are digging to Zion and would reach them in 72 hours. As Zion prepares for the ultimate war, Neo, Morpheus and Trinity are advised by the Oracle to find the Keymaker who would help them reach the Source. Meanwhile Neo is recurrent dreams depicting Trinity is death have got him worried and as if it was not enough, Agent Smith has somehow escaped deletion, has become more powerful than before and has fixed Neo as his next target.",
                    "release_date": "2003-05-15",
                    "original_title": "The Matrix Reloaded",
                    "genre_ids": [
                      12,
                      28,
                      53,
                      878
                    ],
                    "id": 604,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "The Matrix Reloaded",
                    "backdrop_path": "/1jgulSytTJcATkGX8syGbD2glXD.jpg",
                    "popularity": 3.41123,
                    "vote_count": 2187,
                    "video": false,
                    "vote_average": 6.57
                  },
                  {
                    "poster_path": "/sKogjhfs5q3azmpW7DFKKAeLEG8.jpg",
                    "adult": false,
                    "overview": "The human city of Zion defends itself against the massive invasion of the machines as Neo fights to end the war at another front while also opposing the rogue Agent Smith.",
                    "release_date": "2003-11-05",
                    "original_title": "The Matrix Revolutions",
                    "genre_ids": [
                      12,
                      28,
                      53,
                      878
                    ],
                    "id": 605,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "The Matrix Revolutions",
                    "backdrop_path": "/pdVHUsb2eEz9ALNTr6wfRJe5xVa.jpg",
                    "popularity": 3.043018,
                    "vote_count": 1971,
                    "video": false,
                    "vote_average": 6.35
                  }
                ],
                "name": "Monica Bellucci",
                "popularity": 48.609344
              },
              {
                "profile_path": "/tDPS8QHdOmdmu400haPcYum8BHC.jpg",
                "adult": false,
                "id": 21911,
                "known_for": [
                  {
                    "poster_path": "/vD5plFV1ec9CSIsdlPe9icCDRTL.jpg",
                    "adult": false,
                    "overview": "Former Special Forces officer Frank Martin will deliver anything to anyone for the right price, and his no-questions-asked policy puts him in high demand. But when he realizes his latest cargo is alive, it sets in motion a dangerous chain of events. The bound and gagged Lai is being smuggled to France by a shady American businessman, and Frank works to save her as his own illegal activities are uncovered by a French detective.",
                    "release_date": "2002-10-02",
                    "original_title": "The Transporter",
                    "genre_ids": [
                      28,
                      80,
                      53
                    ],
                    "id": 4108,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "The Transporter",
                    "backdrop_path": "/poKaphSqmgC1vtUYGagzyU4KP2m.jpg",
                    "popularity": 2.99031,
                    "vote_count": 988,
                    "video": false,
                    "vote_average": 6.52
                  },
                  {
                    "poster_path": "/tCUEJ6Svr9eqcUOpxlRbFKlEVqm.jpg",
                    "adult": false,
                    "overview": "Asian Hawk (Jackie Chan) leads a mercenary team to recover several lost artifacts from the Old Summer Palace, the bronze heads of the 12 Chinese Zodiac animals which were sacked by the French and British armies from the imperial Summer Palace in Beijing in 1860. Assisted by a Chinese student and a Parisian lady, Hawk stops at nothing to accomplish the mission.",
                    "release_date": "2012-12-20",
                    "original_title": "Chinese Zodiac",
                    "genre_ids": [
                      28,
                      12
                    ],
                    "id": 98567,
                    "media_type": "movie",
                    "original_language": "cn",
                    "title": "Chinese Zodiac",
                    "backdrop_path": "/b8i4Zg7gzMgRmjP9oRxtx8HoiS6.jpg",
                    "popularity": 2.325203,
                    "vote_count": 181,
                    "video": false,
                    "vote_average": 6.15
                  },
                  {
                    "poster_path": "/roKhZLvRRzqdVY9rvDv1i5ZAmmx.jpg",
                    "adult": false,
                    "overview": "Ten vignettes in New York City: a pickpocket meets his match; a young Hasidic woman, on the eve of her marriage, reveals herself to an Indian businessman; a writer tries a pick-up line; an artist seeks a model; a composer needs to read; two women connect; a man takes a child to Central Park; lovers meet; a couple takes a walk on their anniversary; a kid goes to the prom with a girl in a wheelchair; a retired singer contemplates suicide. There are eight million stories in the naked city: these have been ten of them.",
                    "release_date": "2008-09-01",
                    "original_title": "New York, I Love You",
                    "genre_ids": [
                      18,
                      35,
                      10749
                    ],
                    "id": 12572,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "New York, I Love You",
                    "backdrop_path": "/boT0X1wTI399zK6jJ2Dgtqhjkdj.jpg",
                    "popularity": 1.989928,
                    "vote_count": 101,
                    "video": false,
                    "vote_average": 5.51
                  }
                ],
                "name": "Shu Qi",
                "popularity": 35.790232
              },
              {
                "profile_path": "/ylF5eBdfev0bgmFx8BFRmClqStM.jpg",
                "adult": false,
                "id": 234352,
                "known_for": [
                  {
                    "poster_path": "/vK1o5rZGqxyovfIhZyMELhk03wO.jpg",
                    "adult": false,
                    "overview": "A New York stockbroker refuses to cooperate in a large securities fraud case involving corruption on Wall Street, corporate banking world and mob infiltration. Based on Jordan Belfort is autobiography.",
                    "release_date": "2013-12-25",
                    "original_title": "The Wolf of Wall Street",
                    "genre_ids": [
                      80,
                      18,
                      35
                    ],
                    "id": 106646,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "The Wolf of Wall Street",
                    "backdrop_path": "/dYtAyg4vD88hIfrR1VKDnVGhnE6.jpg",
                    "popularity": 6.013736,
                    "vote_count": 3602,
                    "video": false,
                    "vote_average": 7.92
                  },
                  {
                    "poster_path": "/9IElGiLkxPLUWZ3avy31bNSG3Tq.jpg",
                    "adult": false,
                    "overview": "A veteran grifter takes a young, attractive woman under his wing, but things get complicated when they become romantically involved.",
                    "release_date": "2015-02-25",
                    "original_title": "Focus",
                    "genre_ids": [
                      10749,
                      35,
                      80,
                      18
                    ],
                    "id": 256591,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Focus",
                    "backdrop_path": "/bd8RdP2OduLBGkUMdc8PZPjdtbI.jpg",
                    "popularity": 3.90442,
                    "vote_count": 1639,
                    "video": false,
                    "vote_average": 6.71
                  },
                  {
                    "poster_path": "/e1mjopzAS2KNsvpbpahQ1a6SkSn.jpg",
                    "adult": false,
                    "overview": "From DC Comics comes the Suicide Squad, an antihero team of incarcerated supervillains who act as deniable assets for the United States government, undertaking high-risk black ops missions in exchange for commuted prison sentences.",
                    "release_date": "2016-08-03",
                    "original_title": "Suicide Squad",
                    "genre_ids": [
                      14,
                      28,
                      80
                    ],
                    "id": 297761,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Suicide Squad",
                    "backdrop_path": "/ndlQ2Cuc3cjTL7lTynw6I4boP4S.jpg",
                    "popularity": 48.261451,
                    "vote_count": 1466,
                    "video": false,
                    "vote_average": 5.91
                  }
                ],
                "name": "Margot Robbie",
                "popularity": 34.014752
              },
              {
                "profile_path": "/iqvYezRoEY5k8wnlfHriHQfl5dX.jpg",
                "adult": false,
                "id": 8167,
                "known_for": [
                  {
                    "poster_path": "/b9gTJKLdSbwcQRKzmqMq3dMfRwI.jpg",
                    "adult": false,
                    "overview": "Hobbs has Dominic and Brian reassemble their crew to take down a team of mercenaries: Dominic unexpectedly gets convoluted also facing his presumed deceased girlfriend, Letty.",
                    "release_date": "2013-05-06",
                    "original_title": "Fast & Furious 6",
                    "genre_ids": [
                      28,
                      53,
                      80
                    ],
                    "id": 82992,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Fast & Furious 6",
                    "backdrop_path": "/qjfE7SkPXpqFs8FX8rIaG6eO2aK.jpg",
                    "popularity": 1.737593,
                    "vote_count": 4233,
                    "video": false,
                    "vote_average": 6.63
                  },
                  {
                    "poster_path": "/dCgm7efXDmiABSdWDHBDBx2jwmn.jpg",
                    "adult": false,
                    "overview": "Deckard Shaw seeks revenge against Dominic Toretto and his family for his comatose brother.",
                    "release_date": "2015-04-01",
                    "original_title": "Furious 7",
                    "genre_ids": [
                      28,
                      80,
                      53
                    ],
                    "id": 168259,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Furious 7",
                    "backdrop_path": "/ypyeMfKydpyuuTMdp36rMlkGDUL.jpg",
                    "popularity": 13.659073,
                    "vote_count": 2718,
                    "video": false,
                    "vote_average": 7.39
                  },
                  {
                    "poster_path": "/x4So4OkqnjfOSBCCNd5uosMmQiB.jpg",
                    "adult": false,
                    "overview": "Domenic Toretto is a Los Angeles street racer suspected of masterminding a series of big-rig hijackings. When undercover cop Brian OConner infiltrates Toretto is iconoclastic crew, he falls for Toretto is sister and must choose a side: the gang or the LAPD.",
                    "release_date": "2001-06-18",
                    "original_title": "The Fast and the Furious",
                    "genre_ids": [
                      28,
                      80,
                      53
                    ],
                    "id": 9799,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "The Fast and the Furious",
                    "backdrop_path": "/lmIqH8Qsv3IvDg0PTFUuVr89eBT.jpg",
                    "popularity": 1.651117,
                    "vote_count": 2375,
                    "video": false,
                    "vote_average": 6.41
                  }
                ],
                "name": "Paul Walker",
                "popularity": 30.990128
              },
              {
                "profile_path": "/tB1nE2LJH81f5UMiGhKCSlaqsF1.jpg",
                "adult": false,
                "id": 1223786,
                "known_for": [
                  {
                    "poster_path": "/5JU9ytZJyR3zmClGmVm9q4Geqbd.jpg",
                    "adult": false,
                    "overview": "The year is 2029. John Connor, leader of the resistance continues the war against the machines. At the Los Angeles offensive, John is fears of the unknown future begin to emerge when TECOM spies reveal a new plot by SkyNet that will attack him from both fronts; past and future, and will ultimately change warfare forever.",
                    "release_date": "2015-06-23",
                    "original_title": "Terminator Genisys",
                    "genre_ids": [
                      878,
                      28,
                      53,
                      12
                    ],
                    "id": 87101,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Terminator Genisys",
                    "backdrop_path": "/bIlYH4l2AyYvEysmS2AOfjO7Dn8.jpg",
                    "popularity": 13.438976,
                    "vote_count": 2334,
                    "video": false,
                    "vote_average": 5.91
                  },
                  {
                    "poster_path": "/jIhL6mlT7AblhbHJgEoiBIOUVl1.jpg",
                    "popularity": 29.780826,
                    "id": 1399,
                    "overview": "Seven noble families fight for control of the mythical land of Westeros. Friction between the houses leads to full-scale war. All while a very ancient evil awakens in the farthest north. Amidst the war, a neglected military order of misfits, the Night is Watch, is all that stands between the realms of men and icy horrors beyond.",
                    "backdrop_path": "/mUkuc2wyV9dHLG0D0Loaw5pO2s8.jpg",
                    "vote_average": 7.91,
                    "media_type": "tv",
                    "first_air_date": "2011-04-17",
                    "origin_country": [
                      "US"
                    ],
                    "genre_ids": [
                      10765,
                      10759,
                      18
                    ],
                    "original_language": "en",
                    "vote_count": 1172,
                    "name": "Game of Thrones",
                    "original_name": "Game of Thrones"
                  },
                  {
                    "poster_path": "/kJ6eMKlY1I8vVUosWtfP7qbCugL.jpg",
                    "adult": false,
                    "overview": "A small town girl is caught between dead-end jobs. A high-profile, successful man becomes wheelchair bound following an accident. The man decides his life is not worth living until the girl is hired for six months to be his new caretaker. Worlds apart and trapped together by circumstance, the two get off to a rocky start. But the girl becomes determined to prove to the man that life is worth living and as they embark on a series of adventures together, each finds their world changing in ways neither of them could begin to imagine.",
                    "release_date": "2016-03-03",
                    "original_title": "Me Before You",
                    "genre_ids": [
                      18,
                      10749
                    ],
                    "id": 296096,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Me Before You",
                    "backdrop_path": "/o4lxNwKJz8oq3R0kLOIsDlHbDhZ.jpg",
                    "popularity": 8.553487,
                    "vote_count": 501,
                    "video": false,
                    "vote_average": 7.43
                  }
                ],
                "name": "Emilia Clarke",
                "popularity": 26.38716
              },
              {
                "profile_path": "/idDAi1sjaHDIlDc78D8G9HaJ8le.jpg",
                "adult": false,
                "id": 109513,
                "known_for": [
                  {
                    "poster_path": "/qey0tdcOp9kCDdEZuJ87yE3crSe.jpg",
                    "adult": false,
                    "overview": "In the aftermath of a massive earthquake in California, a rescue-chopper pilot makes a dangerous journey across the state in order to rescue his estranged daughter.",
                    "release_date": "2015-05-27",
                    "original_title": "San Andreas",
                    "genre_ids": [
                      28,
                      18,
                      53
                    ],
                    "id": 254128,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "San Andreas",
                    "backdrop_path": "/cUfGqafAVQkatQ7N4y08RNV3bgu.jpg",
                    "popularity": 6.990629,
                    "vote_count": 1866,
                    "video": false,
                    "vote_average": 6.09
                  },
                  {
                    "poster_path": "/5NhyXkodMzDRW8uqtPqlxJsoBhf.jpg",
                    "adult": false,
                    "overview": "Accident prone teenager, Percy discovers he is actually a demi-God, the son of Poseidon, and he is needed when Zeus lightning is stolen. Percy must master his new found skills in order to prevent a war between the Gods that could devastate the entire world.",
                    "release_date": "2010-02-01",
                    "original_title": "Percy Jackson & the Olympians: The Lightning Thief",
                    "genre_ids": [
                      12,
                      14,
                      10751
                    ],
                    "id": 32657,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Percy Jackson & the Olympians: The Lightning Thief",
                    "backdrop_path": "/uHQzRMqhs1bA1fLEP6J1Qc19Nfg.jpg",
                    "popularity": 3.835911,
                    "vote_count": 1047,
                    "video": false,
                    "vote_average": 5.98
                  },
                  {
                    "poster_path": "/k1bhUW7XM5X0yD3iewAEvloFBEo.jpg",
                    "adult": false,
                    "overview": "In their quest to confront the ultimate evil, Percy and his friends battle swarms of mythical creatures to find the mythical Golden Fleece and to stop an ancient evil from rising.",
                    "release_date": "2013-08-07",
                    "original_title": "Percy Jackson: Sea of Monsters",
                    "genre_ids": [
                      12,
                      10751,
                      14
                    ],
                    "id": 76285,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Percy Jackson: Sea of Monsters",
                    "backdrop_path": "/3NK02PLJSs01SY1hsXUAcqbG3WP.jpg",
                    "popularity": 2.444386,
                    "vote_count": 958,
                    "video": false,
                    "vote_average": 5.97
                  }
                ],
                "name": "Alexandra Daddario",
                "popularity": 25.880198
              },
              {
                "profile_path": "/PhWiWgasncGWD9LdbsGcmxkV4r.jpg",
                "adult": false,
                "id": 976,
                "known_for": [
                  {
                    "poster_path": "/b9gTJKLdSbwcQRKzmqMq3dMfRwI.jpg",
                    "adult": false,
                    "overview": "Hobbs has Dominic and Brian reassemble their crew to take down a team of mercenaries: Dominic unexpectedly gets convoluted also facing his presumed deceased girlfriend, Letty.",
                    "release_date": "2013-05-06",
                    "original_title": "Fast & Furious 6",
                    "genre_ids": [
                      28,
                      53,
                      80
                    ],
                    "id": 82992,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Fast & Furious 6",
                    "backdrop_path": "/qjfE7SkPXpqFs8FX8rIaG6eO2aK.jpg",
                    "popularity": 1.737593,
                    "vote_count": 4233,
                    "video": false,
                    "vote_average": 6.63
                  },
                  {
                    "poster_path": "/dCgm7efXDmiABSdWDHBDBx2jwmn.jpg",
                    "adult": false,
                    "overview": "Deckard Shaw seeks revenge against Dominic Toretto and his family for his comatose brother.",
                    "release_date": "2015-04-01",
                    "original_title": "Furious 7",
                    "genre_ids": [
                      28,
                      80,
                      53
                    ],
                    "id": 168259,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Furious 7",
                    "backdrop_path": "/ypyeMfKydpyuuTMdp36rMlkGDUL.jpg",
                    "popularity": 13.659073,
                    "vote_count": 2718,
                    "video": false,
                    "vote_average": 7.39
                  },
                  {
                    "poster_path": "/dJPnTe1qOcO7XqsJvESFph83m6m.jpg",
                    "adult": false,
                    "overview": "Mr. Church reunites the Expendables for what should be an easy paycheck, but when one of their men is murdered on the job, their quest for revenge puts them deep in enemy territory and up against an unexpected threat.",
                    "release_date": "2012-08-08",
                    "original_title": "The Expendables 2",
                    "genre_ids": [
                      28,
                      12,
                      53
                    ],
                    "id": 76163,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "The Expendables 2",
                    "backdrop_path": "/pIjnoUnXdLpROFzIRPNziPzgBUp.jpg",
                    "popularity": 3.511878,
                    "vote_count": 2105,
                    "video": false,
                    "vote_average": 6
                  }
                ],
                "name": "Jason Statham",
                "popularity": 24.287554
              },
              {
                "profile_path": "/2iYXDlCvLyVO49louRyDDXagZ0G.jpg",
                "adult": false,
                "id": 2888,
                "known_for": [
                  {
                    "poster_path": "/l9hrvXyGq19f6jPRZhSVRibTMwW.jpg",
                    "adult": false,
                    "overview": "Agents J (Will Smith) and K (Tommy Lee Jones) are back...in time. J has seen some inexplicable things in his 15 years with the Men in Black, but nothing, not even aliens, perplexes him as much as his wry, reticent partner. But when K is life and the fate of the planet are put at stake, Agent J will have to travel back in time to put things right. J discovers that there are secrets to the universe that K never told him - secrets that will reveal themselves as he teams up with the young Agent K (Josh Brolin) to save his partner, the agency, and the future of humankind.",
                    "release_date": "2012-05-23",
                    "original_title": "Men in Black 3",
                    "genre_ids": [
                      28,
                      35,
                      878
                    ],
                    "id": 41154,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Men in Black 3",
                    "backdrop_path": "/7u3UyejCbhM3jXcZ86xzA9JJxge.jpg",
                    "popularity": 3.121988,
                    "vote_count": 2925,
                    "video": false,
                    "vote_average": 6.14
                  },
                  {
                    "poster_path": "/pfvQ3kkSbFsIPC5exKPUf5nOf60.jpg",
                    "adult": false,
                    "overview": "Robert Neville is a scientist who was unable to stop the spread of the terrible virus that was incurable and man-made. Immune, Neville is now the last human survivor in what is left of New York City and perhaps the world. For three years, Neville has faithfully sent out daily radio messages, desperate to find any other survivors who might be out there. But he is not alone.",
                    "release_date": "2007-12-14",
                    "original_title": "I Am Legend",
                    "genre_ids": [
                      18,
                      27,
                      28,
                      53,
                      878
                    ],
                    "id": 6479,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "I Am Legend",
                    "backdrop_path": "/u6Qg7TH7Oh1IFWCQSRr4htFFt0A.jpg",
                    "popularity": 2.867238,
                    "vote_count": 2730,
                    "video": false,
                    "vote_average": 6.81
                  },
                  {
                    "poster_path": "/f24UVKq3UiQWLqGWdqjwkzgB8j8.jpg",
                    "adult": false,
                    "overview": "Men in Black follows the exploits of agents Kay and Jay, members of a top-secret organization established to monitor and police alien activity on Earth. The two Men in Black find themselves in the middle of the deadly plot by an intergalactic terrorist who has arrived on Earth to assassinate two ambassadors from opposing galaxies. In order to prevent worlds from colliding, the MiB must track down the terrorist and prevent the destruction of Earth. It is just another typical day for the Men in Black.",
                    "release_date": "1997-07-01",
                    "original_title": "Men in Black",
                    "genre_ids": [
                      28,
                      12,
                      35,
                      878
                    ],
                    "id": 607,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Men in Black",
                    "backdrop_path": "/uiZShvmW4rva88cSk800RLnGK01.jpg",
                    "popularity": 5.062027,
                    "vote_count": 2570,
                    "video": false,
                    "vote_average": 6.64
                  }
                ],
                "name": "Will Smith",
                "popularity": 23.94618
              },
              {
                "profile_path": "/8EueDe6rPF0jQU4LSpsH2Rmrqac.jpg",
                "adult": false,
                "id": 1245,
                "known_for": [
                  {
                    "poster_path": "/cezWGskPY5x7GaglTTRN4Fugfb8.jpg",
                    "adult": false,
                    "overview": "When an unexpected enemy emerges and threatens global safety and security, Nick Fury, director of the international peacekeeping agency known as S.H.I.E.L.D., finds himself in need of a team to pull the world back from the brink of disaster. Spanning the globe, a daring recruitment effort begins!",
                    "release_date": "2012-04-25",
                    "original_title": "The Avengers",
                    "genre_ids": [
                      878,
                      28,
                      12
                    ],
                    "id": 24428,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "The Avengers",
                    "backdrop_path": "/hbn46fQaRmlpBuUrEiFqv0GDL6Y.jpg",
                    "popularity": 7.353212,
                    "vote_count": 8503,
                    "video": false,
                    "vote_average": 7.33
                  },
                  {
                    "poster_path": "/ArqpkNYGfcTIA6umWt6xihfIZZv.jpg",
                    "adult": false,
                    "overview": "With the world now aware of his dual life as the armored superhero Iron Man, billionaire inventor Tony Stark faces pressure from the government, the press, and the public to share his technology with the military. Unwilling to let go of his invention, Stark, along with Pepper Potts, and James \"Rhodey\" Rhodes at his side, must forge new alliances - and confront powerful enemies.",
                    "release_date": "2010-04-28",
                    "original_title": "Iron Man 2",
                    "genre_ids": [
                      12,
                      28,
                      878
                    ],
                    "id": 10138,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Iron Man 2",
                    "backdrop_path": "/jxdSxqAFrdioKgXwgTs5Qfbazjq.jpg",
                    "popularity": 4.559376,
                    "vote_count": 4639,
                    "video": false,
                    "vote_average": 6.62
                  },
                  {
                    "poster_path": "/t90Y3G8UGQp0f0DrP60wRu9gfrH.jpg",
                    "adult": false,
                    "overview": "When Tony Stark tries to jumpstart a dormant peacekeeping program, things go awry and Earth’s Mightiest Heroes are put to the ultimate test as the fate of the planet hangs in the balance. As the villainous Ultron emerges, it is up to The Avengers to stop him from enacting his terrible plans, and soon uneasy alliances and unexpected action pave the way for an epic and unique global adventure.",
                    "release_date": "2015-04-22",
                    "original_title": "Avengers: Age of Ultron",
                    "genre_ids": [
                      28,
                      12,
                      878
                    ],
                    "id": 99861,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Avengers: Age of Ultron",
                    "backdrop_path": "/570qhjGZmGPrBGnfx70jcwIuBr4.jpg",
                    "popularity": 7.557812,
                    "vote_count": 3924,
                    "video": false,
                    "vote_average": 7.4
                  }
                ],
                "name": "Scarlett Johansson",
                "popularity": 22.293639
              },
              {
                "profile_path": "/oGJQhOpT8S1M56tvSsbEBePV5O1.jpg",
                "adult": false,
                "id": 192,
                "known_for": [
                  {
                    "poster_path": "/1hRoyzDtpgMU7Dz4JF22RANzQO7.jpg",
                    "adult": false,
                    "overview": "Batman raises the stakes in his war on crime. With the help of Lt. Jim Gordon and District Attorney Harvey Dent, Batman sets out to dismantle the remaining criminal organizations that plague the streets. The partnership proves to be effective, but they soon find themselves prey to a reign of chaos unleashed by a rising criminal mastermind known to the terrified citizens of Gotham as the Joker.",
                    "release_date": "2008-07-16",
                    "original_title": "The Dark Knight",
                    "genre_ids": [
                      18,
                      28,
                      80,
                      53
                    ],
                    "id": 155,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "The Dark Knight",
                    "backdrop_path": "/nnMC0BM6XbjIIrT4miYmMtPGcQV.jpg",
                    "popularity": 8.090715,
                    "vote_count": 7744,
                    "video": false,
                    "vote_average": 8.06
                  },
                  {
                    "poster_path": "/dEYnvnUfXrqvqeRSqvIEtmzhoA8.jpg",
                    "adult": false,
                    "overview": "Following the death of District Attorney Harvey Dent, Batman assumes responsibility for Dent is crimes to protect the late attorney is reputation and is subsequently hunted by the Gotham City Police Department. Eight years later, Batman encounters the mysterious Selina Kyle and the villainous Bane, a new terrorist leader who overwhelms Gotham is finest. The Dark Knight resurfaces to protect a city that has branded him an enemy.",
                    "release_date": "2012-07-16",
                    "original_title": "The Dark Knight Rises",
                    "genre_ids": [
                      28,
                      80,
                      18,
                      53
                    ],
                    "id": 49026,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "The Dark Knight Rises",
                    "backdrop_path": "/3bgtUfKQKNi3nJsAB5URpP2wdRt.jpg",
                    "popularity": 6.836486,
                    "vote_count": 6385,
                    "video": false,
                    "vote_average": 7.47
                  },
                  {
                    "poster_path": "/9O7gLzmreU0nGkIB6K3BsJbzvNv.jpg",
                    "adult": false,
                    "overview": "Framed in the 1940s for the double murder of his wife and her lover, upstanding banker Andy Dufresne begins a new life at the Shawshank prison, where he puts his accounting skills to work for an amoral warden. During his long stretch in prison, Dufresne comes to be admired by the other inmates -- including an older prisoner named Red -- for his integrity and unquenchable sense of hope.",
                    "release_date": "1994-09-10",
                    "original_title": "The Shawshank Redemption",
                    "genre_ids": [
                      18,
                      80
                    ],
                    "id": 278,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "The Shawshank Redemption",
                    "backdrop_path": "/xBKGJQsAIeweesB79KC89FpBrVr.jpg",
                    "popularity": 6.741296,
                    "vote_count": 5238,
                    "video": false,
                    "vote_average": 8.32
                  }
                ],
                "name": "Morgan Freeman",
                "popularity": 20.526443
              },
              {
                "profile_path": "/laJdQNmsuR2iblYUggEqr49LvwJ.jpg",
                "adult": false,
                "id": 9827,
                "known_for": [
                  {
                    "poster_path": "/7SSm7BfzFoVzmd6fCDccj7qRxc8.jpg",
                    "adult": false,
                    "overview": "Before Charles Xavier and Erik Lensherr took the names Professor X and Magneto, they were two young men discovering their powers for the first time. Before they were arch-enemies, they were closest of friends, working together with other mutants (some familiar, some new), to stop the greatest threat the world has ever known.",
                    "release_date": "2011-05-24",
                    "original_title": "X-Men: First Class",
                    "genre_ids": [
                      28,
                      878,
                      12
                    ],
                    "id": 49538,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "X-Men: First Class",
                    "backdrop_path": "/39nstYsfjR6ggyKTtB4Joga2fs8.jpg",
                    "popularity": 1.129395,
                    "vote_count": 3444,
                    "video": false,
                    "vote_average": 6.97
                  },
                  {
                    "poster_path": "/2vcNFtrZXNwIcBgH5e2xXCmVR8t.jpg",
                    "adult": false,
                    "overview": "Ten years after the invasion of Naboo, the galaxy is on the brink of civil war. Under the leadership of a renegade Jedi named Count Dooku, thousands of solar systems threaten to break away from the Galactic Republic. When an assassination attempt is made on Senator Padmé Amidala, the former Queen of Naboo, twenty-year-old Jedi apprentice Anakin Skywalker is assigned to protect her. In the course of his mission, Anakin discovers his love for Padmé as well as his own darker side. Soon, Anakin, Padmé, and Obi-Wan Kenobi are drawn into the heart of the Separatist movement and the beginning of the Clone Wars.",
                    "release_date": "2002-05-15",
                    "original_title": "Star Wars: Episode II - Attack of the Clones",
                    "genre_ids": [
                      12,
                      28,
                      878
                    ],
                    "id": 1894,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Star Wars: Episode II - Attack of the Clones",
                    "backdrop_path": "/560F7BPaxRy8BsOfVU6cW4ivM46.jpg",
                    "popularity": 2.824467,
                    "vote_count": 2282,
                    "video": false,
                    "vote_average": 6.35
                  },
                  {
                    "poster_path": "/49Akyhe0gnuokaDIKKDldFRBoru.jpg",
                    "adult": false,
                    "overview": "A desk-bound CIA analyst volunteers to go undercover to infiltrate the world of a deadly arms dealer, and prevent diabolical global disaster.",
                    "release_date": "2015-05-06",
                    "original_title": "Spy",
                    "genre_ids": [
                      28,
                      35,
                      80
                    ],
                    "id": 238713,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Spy",
                    "backdrop_path": "/AoYGqtWxcNmQjQIpRCMtzpFfL1T.jpg",
                    "popularity": 3.645483,
                    "vote_count": 1687,
                    "video": false,
                    "vote_average": 6.96
                  }
                ],
                "name": "Rose Byrne",
                "popularity": 19.830977
              },
              {
                "profile_path": "/p745afG6B5yt1L0kFAMIUKzqxa.jpg",
                "adult": false,
                "id": 10990,
                "known_for": [
                  {
                    "poster_path": "/lR4drT4VGfts32j9jYTZUc1a3Pa.jpg",
                    "adult": false,
                    "overview": "Harry Potter has lived under the stairs at his aunt and uncle is house his whole life. But on his 11th birthday, he learns he is a powerful wizard -- with a place waiting for him at the Hogwarts School of Witchcraft and Wizardry. As he learns to harness his newfound powers with the help of the school is kindly headmaster, Harry uncovers the truth about his parents deaths -- and about the villain who is to blame.",
                    "release_date": "2001-11-16",
                    "original_title": "Harry Potter and the Philosopher is Stone",
                    "genre_ids": [
                      12,
                      14,
                      10751
                    ],
                    "id": 671,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Harry Potter and the Philosopher is Stone",
                    "backdrop_path": "/uD93T339xX1k3fnDUaeopZBiajY.jpg",
                    "popularity": 6.742273,
                    "vote_count": 3793,
                    "video": false,
                    "vote_average": 7.15
                  },
                  {
                    "poster_path": "/fTplI1NCSuEDP4ITLcTps739fcC.jpg",
                    "adult": false,
                    "overview": "In the second installment of the two-part conclusion, Harry and his best friends, Ron and Hermione, continue their quest to vanquish the evil Voldemort once and for all. Just as things begin to look hopeless for the young wizards, Harry discovers a trio of magical objects that endow him with powers to rival Voldemort is formidable skills.",
                    "release_date": "2011-07-07",
                    "original_title": "Harry Potter and the Deathly Hallows: Part 2",
                    "genre_ids": [
                      12,
                      10751,
                      14
                    ],
                    "id": 12445,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Harry Potter and the Deathly Hallows: Part 2",
                    "backdrop_path": "/gblLAEIDoWRN0vBLJyFGUZnf6j5.jpg",
                    "popularity": 5.77306,
                    "vote_count": 3347,
                    "video": false,
                    "vote_average": 7.65
                  },
                  {
                    "poster_path": "/maP4MTfPCeVD2FZbKTLUgriOW4R.jpg",
                    "adult": false,
                    "overview": "The end begins as Harry, Ron, and Hermione walk away from their last year at Hogwarts to find and destroy the remaining Horcruxes, putting an end to Voldemort is bid for immortality. But with Harry is beloved Dumbledore dead and Voldemort is unscrupulous Death Eaters on the loose, the world is more dangerous than ever.",
                    "release_date": "2010-10-17",
                    "original_title": "Harry Potter and the Deathly Hallows: Part 1",
                    "genre_ids": [
                      12,
                      14,
                      10751
                    ],
                    "id": 12444,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Harry Potter and the Deathly Hallows: Part 1",
                    "backdrop_path": "/8YA36faYlkpfp6aozcGsqq68pZ9.jpg",
                    "popularity": 4.326054,
                    "vote_count": 3100,
                    "video": false,
                    "vote_average": 7.28
                  }
                ],
                "name": "Emma Watson",
                "popularity": 19.738189
              },
              {
                "profile_path": "/lrhth7yK9p3vy6p7AabDUM1THKl.jpg",
                "adult": false,
                "id": 74568,
                "known_for": [
                  {
                    "poster_path": "/cezWGskPY5x7GaglTTRN4Fugfb8.jpg",
                    "adult": false,
                    "overview": "When an unexpected enemy emerges and threatens global safety and security, Nick Fury, director of the international peacekeeping agency known as S.H.I.E.L.D., finds himself in need of a team to pull the world back from the brink of disaster. Spanning the globe, a daring recruitment effort begins!",
                    "release_date": "2012-04-25",
                    "original_title": "The Avengers",
                    "genre_ids": [
                      878,
                      28,
                      12
                    ],
                    "id": 24428,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "The Avengers",
                    "backdrop_path": "/hbn46fQaRmlpBuUrEiFqv0GDL6Y.jpg",
                    "popularity": 7.353212,
                    "vote_count": 8503,
                    "video": false,
                    "vote_average": 7.33
                  },
                  {
                    "poster_path": "/bIuOWTtyFPjsFDevqvF3QrD1aun.jpg",
                    "adult": false,
                    "overview": "Against his father Odin is will, The Mighty Thor -a powerful but arrogant warrior god -recklessly reignites an ancient war. Thor is cast down to Earth and forced to live among humans as punishment. Once here, Thor learns what it takes to be a true hero when the most dangerous villain of his world sends the darkest forces of Asgard to invade Earth.",
                    "release_date": "2011-04-21",
                    "original_title": "Thor",
                    "genre_ids": [
                      12,
                      14,
                      28
                    ],
                    "id": 10195,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Thor",
                    "backdrop_path": "/6UxFfo8K3vcihtUpX1ek2ucGeEZ.jpg",
                    "popularity": 5.293285,
                    "vote_count": 4217,
                    "video": false,
                    "vote_average": 6.51
                  },
                  {
                    "poster_path": "/t90Y3G8UGQp0f0DrP60wRu9gfrH.jpg",
                    "adult": false,
                    "overview": "When Tony Stark tries to jumpstart a dormant peacekeeping program, things go awry and Earth’s Mightiest Heroes are put to the ultimate test as the fate of the planet hangs in the balance. As the villainous Ultron emerges, it is up to The Avengers to stop him from enacting his terrible plans, and soon uneasy alliances and unexpected action pave the way for an epic and unique global adventure.",
                    "release_date": "2015-04-22",
                    "original_title": "Avengers: Age of Ultron",
                    "genre_ids": [
                      28,
                      12,
                      878
                    ],
                    "id": 99861,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Avengers: Age of Ultron",
                    "backdrop_path": "/570qhjGZmGPrBGnfx70jcwIuBr4.jpg",
                    "popularity": 7.557812,
                    "vote_count": 3924,
                    "video": false,
                    "vote_average": 7.4
                  }
                ],
                "name": "Chris Hemsworth",
                "popularity": 19.209345
              },
              {
                "profile_path": "/rFuETZeyOAfIqBahOObF7Soq5Dh.jpg",
                "adult": false,
                "id": 8784,
                "known_for": [
                  {
                    "poster_path": "/lQCkPLDxFONmgzrWLvq085v1g2d.jpg",
                    "adult": false,
                    "overview": "When Bond is latest assignment goes gravely wrong and agents around the world are exposed, MI6 is attacked forcing M to relocate the agency. These events cause her authority and position to be challenged by Gareth Mallory (Ralph Fiennes), the new Chairman of the Intelligence and Security Committee. With MI6 now compromised from both inside and out, M is left with one ally she can trust: Bond. 007 takes to the shadows - aided only by field agent, Eve (Naomie Harris) - following a trail to the mysterious Silva (Javier Bardem), whose lethal and hidden motives have yet to reveal themselves.",
                    "release_date": "2012-10-25",
                    "original_title": "Skyfall",
                    "genre_ids": [
                      28,
                      12,
                      53
                    ],
                    "id": 37724,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Skyfall",
                    "backdrop_path": "/AunH2MIKIbnU9khgFp45eJlydPu.jpg",
                    "popularity": 5.038792,
                    "vote_count": 5845,
                    "video": false,
                    "vote_average": 6.81
                  },
                  {
                    "poster_path": "/weUSwMdQIa3NaXVzwUoIIcAi85d.jpg",
                    "adult": false,
                    "overview": "Thirty years after defeating the Galactic Empire, Han Solo and his allies face a new threat from the evil Kylo Ren and his army of Stormtroopers.",
                    "release_date": "2015-12-15",
                    "original_title": "Star Wars: The Force Awakens",
                    "genre_ids": [
                      28,
                      12,
                      878,
                      14
                    ],
                    "id": 140607,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Star Wars: The Force Awakens",
                    "backdrop_path": "/c2Ax8Rox5g6CneChwy1gmu4UbSb.jpg",
                    "popularity": 8.83227,
                    "vote_count": 4697,
                    "video": false,
                    "vote_average": 7.55
                  },
                  {
                    "poster_path": "/hE24GYddaxB9MVZl1CaiI86M3kp.jpg",
                    "adult": false,
                    "overview": "A cryptic message from Bond’s past sends him on a trail to uncover a sinister organization. While M battles political forces to keep the secret service alive, Bond peels back the layers of deceit to reveal the terrible truth behind SPECTRE.",
                    "release_date": "2015-10-26",
                    "original_title": "Spectre",
                    "genre_ids": [
                      28,
                      12,
                      80
                    ],
                    "id": 206647,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Spectre",
                    "backdrop_path": "/wVTYlkKPKrljJfugXN7UlLNjtuJ.jpg",
                    "popularity": 7.090211,
                    "vote_count": 2956,
                    "video": false,
                    "vote_average": 6.2
                  }
                ],
                "name": "Daniel Craig",
                "popularity": 18.961886
              },
              {
                "profile_path": "/kc3M04QQAuZ9woUvH3Ju5T7ZqG5.jpg",
                "adult": false,
                "id": 287,
                "known_for": [
                  {
                    "poster_path": "/811DjJTon9gD6hZ8nCjSitaIXFQ.jpg",
                    "adult": false,
                    "overview": "A ticking-time-bomb insomniac and a slippery soap salesman channel primal male aggression into a shocking new form of therapy. Their concept catches on, with underground \"fight clubs\" forming in every town, until an eccentric gets in the way and ignites an out-of-control spiral toward oblivion.",
                    "release_date": "1999-10-14",
                    "original_title": "Fight Club",
                    "genre_ids": [
                      18
                    ],
                    "id": 550,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Fight Club",
                    "backdrop_path": "/8uO0gUM8aNqYLs1OsTBQiXu0fEv.jpg",
                    "popularity": 6.590102,
                    "vote_count": 5221,
                    "video": false,
                    "vote_average": 8.05
                  },
                  {
                    "poster_path": "/6zYuTKyvcwmtNvXXvJZNT0IgBL0.jpg",
                    "adult": false,
                    "overview": "In Nazi-occupied France during World War II, a group of Jewish-American soldiers known as \"The Basterds\" are chosen specifically to spread fear throughout the Third Reich by scalping and brutally killing Nazis. The Basterds, lead by Lt. Aldo Raine soon cross paths with a French-Jewish teenage girl who runs a movie theater in Paris which is targeted by the soldiers.",
                    "release_date": "2009-08-18",
                    "original_title": "Inglourious Basterds",
                    "genre_ids": [
                      18,
                      28,
                      53,
                      10752
                    ],
                    "id": 16869,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Inglourious Basterds",
                    "backdrop_path": "/bk0GylJLneaSbpQZXpgTwleYigq.jpg",
                    "popularity": 5.650904,
                    "vote_count": 3535,
                    "video": false,
                    "vote_average": 7.72
                  },
                  {
                    "poster_path": "/Ha5t0J21eyiq6Az1EXzx0iwsGH.jpg",
                    "adult": false,
                    "overview": "Life for former United Nations investigator Gerry Lane and his family seems content. Suddenly, the world is plagued by a mysterious infection turning whole human populations into rampaging mindless zombies. After barely escaping the chaos, Lane is persuaded to go on a mission to investigate this disease. What follows is a perilous trek around the world where Lane must brave horrific dangers and long odds to find answers before human civilization falls.",
                    "release_date": "2013-06-20",
                    "original_title": "World War Z",
                    "genre_ids": [
                      28,
                      18,
                      27,
                      878,
                      53
                    ],
                    "id": 72190,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "World War Z",
                    "backdrop_path": "/xMOQVYLeIKBXenJ9KMeasj7S64y.jpg",
                    "popularity": 3.205127,
                    "vote_count": 3520,
                    "video": false,
                    "vote_average": 6.75
                  }
                ],
                "name": "Brad Pitt",
                "popularity": 18.796367
              },
              {
                "profile_path": "/r7WLn4Kbnqb6oJ8TmSI0e4LkWTj.jpg",
                "adult": false,
                "id": 3223,
                "known_for": [
                  {
                    "poster_path": "/cezWGskPY5x7GaglTTRN4Fugfb8.jpg",
                    "adult": false,
                    "overview": "When an unexpected enemy emerges and threatens global safety and security, Nick Fury, director of the international peacekeeping agency known as S.H.I.E.L.D., finds himself in need of a team to pull the world back from the brink of disaster. Spanning the globe, a daring recruitment effort begins!",
                    "release_date": "2012-04-25",
                    "original_title": "The Avengers",
                    "genre_ids": [
                      878,
                      28,
                      12
                    ],
                    "id": 24428,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "The Avengers",
                    "backdrop_path": "/hbn46fQaRmlpBuUrEiFqv0GDL6Y.jpg",
                    "popularity": 7.353212,
                    "vote_count": 8503,
                    "video": false,
                    "vote_average": 7.33
                  },
                  {
                    "poster_path": "/1Ilv6ryHUv6rt9zIsbSEJUmmbEi.jpg",
                    "adult": false,
                    "overview": "The brash-but-brilliant industrialist Tony Stark faces an enemy whose reach knows no bounds. When Stark finds his personal world destroyed at his enemy’s hands, he embarks on a harrowing quest to find those responsible. This journey, at every turn, will test his mettle. With his back against the wall, Stark is left to survive by his own devices, relying on his ingenuity and instincts to protect those closest to him. As he fights his way back, Stark discovers the answer to the question that has secretly haunted him: does the man make the suit or does the suit make the man?",
                    "release_date": "2013-04-18",
                    "original_title": "Iron Man 3",
                    "genre_ids": [
                      28,
                      12,
                      878
                    ],
                    "id": 68721,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Iron Man 3",
                    "backdrop_path": "/n9X2DKItL3V0yq1q1jrk8z5UAki.jpg",
                    "popularity": 4.993196,
                    "vote_count": 6598,
                    "video": false,
                    "vote_average": 6.87
                  },
                  {
                    "poster_path": "/s2IG9qXfhJYxIttKyroYFBsHwzQ.jpg",
                    "adult": false,
                    "overview": "Tony Stark. Genius, billionaire, playboy, philanthropist. Son of legendary inventor and weapons contractor Howard Stark. When Tony Stark is assigned to give a weapons presentation to an Iraqi unit led by Lt. Col. James Rhodes, he is given a ride on enemy lines. That ride ends badly when Stark is Humvee that he is riding in is attacked by enemy combatants. He survives - barely - with a chest full of shrapnel and a car battery attached to his heart. In order to survive he comes up with a way to miniaturize the battery and figures out that the battery can power something else. Thus Iron Man is born. He uses the primitive device to escape from the cave in Iraq. Once back home, he then begins work on perfecting the Iron Man suit. But the man who was put in charge of Stark Industries has plans of his own to take over Tony is technology for other matters.",
                    "release_date": "2008-04-30",
                    "original_title": "Iron Man",
                    "genre_ids": [
                      28,
                      878,
                      12
                    ],
                    "id": 1726,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Iron Man",
                    "backdrop_path": "/ZQixhAZx6fH1VNafFXsqa1B8QI.jpg",
                    "popularity": 6.393385,
                    "vote_count": 5745,
                    "video": false,
                    "vote_average": 7.23
                  }
                ],
                "name": "Robert Downey Jr.",
                "popularity": 18.773202
              },
              {
                "profile_path": "/3RdYMTLoL1X16djGF52cFtJovDT.jpg",
                "adult": false,
                "id": 12835,
                "known_for": [
                  {
                    "poster_path": "/y31QB9kn3XSudA15tV7UWQ9XLuW.jpg",
                    "adult": false,
                    "overview": "Light years from Earth, 26 years after being abducted, Peter Quill finds himself the prime target of a manhunt after discovering an orb wanted by Ronan the Accuser.",
                    "release_date": "2014-07-30",
                    "original_title": "Guardians of the Galaxy",
                    "genre_ids": [
                      28,
                      878,
                      12
                    ],
                    "id": 118340,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Guardians of the Galaxy",
                    "backdrop_path": "/bHarw8xrmQeqf3t8HpuMY7zoK4x.jpg",
                    "popularity": 9.267731,
                    "vote_count": 5002,
                    "video": false,
                    "vote_average": 7.97
                  },
                  {
                    "poster_path": "/b9gTJKLdSbwcQRKzmqMq3dMfRwI.jpg",
                    "adult": false,
                    "overview": "Hobbs has Dominic and Brian reassemble their crew to take down a team of mercenaries: Dominic unexpectedly gets convoluted also facing his presumed deceased girlfriend, Letty.",
                    "release_date": "2013-05-06",
                    "original_title": "Fast & Furious 6",
                    "genre_ids": [
                      28,
                      53,
                      80
                    ],
                    "id": 82992,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Fast & Furious 6",
                    "backdrop_path": "/qjfE7SkPXpqFs8FX8rIaG6eO2aK.jpg",
                    "popularity": 1.737593,
                    "vote_count": 4233,
                    "video": false,
                    "vote_average": 6.63
                  },
                  {
                    "poster_path": "/gc7IN6bWNaWXv4vI6cxSmeB7PeO.jpg",
                    "adult": false,
                    "overview": "As U.S. troops storm the beaches of Normandy, three brothers lie dead on the battlefield, with a fourth trapped behind enemy lines. Ranger captain John Miller and seven men are tasked with penetrating German-held territory and bringing the boy home.",
                    "release_date": "1998-07-24",
                    "original_title": "Saving Private Ryan",
                    "genre_ids": [
                      18,
                      36,
                      10752
                    ],
                    "id": 857,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Saving Private Ryan",
                    "backdrop_path": "/gRtLcCQOpYUI9ThdVzi4VUP8QO3.jpg",
                    "popularity": 4.108465,
                    "vote_count": 3058,
                    "video": false,
                    "vote_average": 7.65
                  }
                ],
                "name": "Vin Diesel",
                "popularity": 18.512198
              },
              {
                "profile_path": "/rHV63ATO7fTVlZOey9YaJsEvRUe.jpg",
                "adult": false,
                "id": 227454,
                "known_for": [
                  {
                    "poster_path": "/btbRB7BrD887j5NrvjxceRDmaot.jpg",
                    "adult": false,
                    "overview": "Caleb, a 26 year old coder at the world is largest internet company, wins a competition to spend a week at a private mountain retreat belonging to Nathan, the reclusive CEO of the company. But when Caleb arrives at the remote location he finds that he will have to participate in a strange and fascinating experiment in which he must interact with the world is first true artificial intelligence, housed in the body of a beautiful robot girl.",
                    "release_date": "2015-01-21",
                    "original_title": "Ex Machina",
                    "genre_ids": [
                      18,
                      878
                    ],
                    "id": 264660,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Ex Machina",
                    "backdrop_path": "/9X3cDZb4GYGQeOnZHLwMcCFz2Ro.jpg",
                    "popularity": 5.279412,
                    "vote_count": 2397,
                    "video": false,
                    "vote_average": 7.59
                  },
                  {
                    "poster_path": "/5ttOaThDVmTpV8iragbrhdfxEep.jpg",
                    "adult": false,
                    "overview": "At the height of the Cold War, a mysterious criminal organization plans to use nuclear weapons and technology to upset the fragile balance of power between the United States and Soviet Union. CIA agent Napoleon Solo and KGB agent Illya Kuryakin are forced to put aside their hostilities and work together to stop the evildoers in their tracks. The duo is only lead is the daughter of a missing German scientist, whom they must find soon to prevent a global catastrophe.",
                    "release_date": "2015-08-13",
                    "original_title": "The Man from U.N.C.L.E.",
                    "genre_ids": [
                      35,
                      28,
                      12
                    ],
                    "id": 203801,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "The Man from U.N.C.L.E.",
                    "backdrop_path": "/bKxcCNv2xq8M3GD5iSrv9bMGDVa.jpg",
                    "popularity": 6.033553,
                    "vote_count": 1351,
                    "video": false,
                    "vote_average": 6.98
                  },
                  {
                    "poster_path": "/seWQ6UKCrhGH0eP7dFZvmIBQtKF.jpg",
                    "adult": false,
                    "overview": "When Gerda Wegener asks her husband Einar to fill in as a portrait model, Einar discovers the person she is meant to be and begins living her life as Lili Elbe. Having realized her true self and with Gerda is love and support, Lili embarks on a groundbreaking journey as a transgender pioneer.",
                    "release_date": "2015-11-27",
                    "original_title": "The Danish Girl",
                    "genre_ids": [
                      18
                    ],
                    "id": 306819,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "The Danish Girl",
                    "backdrop_path": "/oXRoRYROJdoi7so8H9cHzS9jp6K.jpg",
                    "popularity": 3.395735,
                    "vote_count": 655,
                    "video": false,
                    "vote_average": 7.18
                  }
                ],
                "name": "Alicia Vikander",
                "popularity": 17.66672
              },
              {
                "profile_path": "/7wbHIn7GziFlJLPl8Zu1XVl24EG.jpg",
                "adult": false,
                "id": 1892,
                "known_for": [
                  {
                    "poster_path": "/nBNZadXqJSdt05SHLqgT0HuC5Gm.jpg",
                    "adult": false,
                    "overview": "Interstellar chronicles the adventures of a group of explorers who make use of a newly discovered wormhole to surpass the limitations on human space travel and conquer the vast distances involved in an interstellar voyage.",
                    "release_date": "2014-11-05",
                    "original_title": "Interstellar",
                    "genre_ids": [
                      12,
                      18,
                      878
                    ],
                    "id": 157336,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Interstellar",
                    "backdrop_path": "/xu9zaAevzQ5nnrsXN6JcahLnG4i.jpg",
                    "popularity": 12.481061,
                    "vote_count": 5600,
                    "video": false,
                    "vote_average": 8.12
                  },
                  {
                    "poster_path": "/5aGhaIHYuQbqlHWvWYqMCnj40y2.jpg",
                    "adult": false,
                    "overview": "During a manned mission to Mars, Astronaut Mark Watney is presumed dead after a fierce storm and left behind by his crew. But Watney has survived and finds himself stranded and alone on the hostile planet. With only meager supplies, he must draw upon his ingenuity, wit and spirit to subsist and find a way to signal to Earth that he is alive.",
                    "release_date": "2015-09-30",
                    "original_title": "The Martian",
                    "genre_ids": [
                      18,
                      12,
                      878
                    ],
                    "id": 286217,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "The Martian",
                    "backdrop_path": "/sy3e2e4JwdAtd2oZGA2uUilZe8j.jpg",
                    "popularity": 9.539478,
                    "vote_count": 3946,
                    "video": false,
                    "vote_average": 7.6
                  },
                  {
                    "poster_path": "/gc7IN6bWNaWXv4vI6cxSmeB7PeO.jpg",
                    "adult": false,
                    "overview": "As U.S. troops storm the beaches of Normandy, three brothers lie dead on the battlefield, with a fourth trapped behind enemy lines. Ranger captain John Miller and seven men are tasked with penetrating German-held territory and bringing the boy home.",
                    "release_date": "1998-07-24",
                    "original_title": "Saving Private Ryan",
                    "genre_ids": [
                      18,
                      36,
                      10752
                    ],
                    "id": 857,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Saving Private Ryan",
                    "backdrop_path": "/gRtLcCQOpYUI9ThdVzi4VUP8QO3.jpg",
                    "popularity": 4.108465,
                    "vote_count": 3058,
                    "video": false,
                    "vote_average": 7.65
                  }
                ],
                "name": "Matt Damon",
                "popularity": 16.612174
              },
              {
                "profile_path": "/wjeugSO0XY6zak76s9V7hhLOPNS.jpg",
                "adult": false,
                "id": 3293,
                "known_for": [
                  {
                    "poster_path": "/7qzLIcYR7ev7iXngY8NKHBZHwwT.jpg",
                    "adult": false,
                    "overview": "Oscar Diggs, a small-time circus illusionist and con-artist, is whisked from Kansas to the Land of Oz where the inhabitants assume he is the great wizard of prophecy, there to save Oz from the clutches of evil.",
                    "release_date": "2013-03-07",
                    "original_title": "Oz: The Great and Powerful",
                    "genre_ids": [
                      14,
                      12,
                      10751
                    ],
                    "id": 68728,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Oz: The Great and Powerful",
                    "backdrop_path": "/4jv4TsBccZt60ltlPYmL8vaG8cu.jpg",
                    "popularity": 3.438461,
                    "vote_count": 2744,
                    "video": false,
                    "vote_average": 5.62
                  },
                  {
                    "poster_path": "/AnKnLsybNhnibvA3mba1ct9Nnb6.jpg",
                    "adult": false,
                    "overview": "The fourth installment of the highly successful Bourne series sidelines main character Jason Bourne in order to focus on a fellow estranged assassin Aaron Cross. The story centers on new CIA operative, Aaron Cross as he experiences life-or-death stakes that have been triggered by the previous actions of Jason Bourne.",
                    "release_date": "2012-08-08",
                    "original_title": "The Bourne Legacy",
                    "genre_ids": [
                      28,
                      53
                    ],
                    "id": 49040,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "The Bourne Legacy",
                    "backdrop_path": "/8kdXppXTbg50prSXsnLJikithmT.jpg",
                    "popularity": 4.976063,
                    "vote_count": 1972,
                    "video": false,
                    "vote_average": 5.88
                  },
                  {
                    "poster_path": "/cftmDzVCWKynKMfY9oyFj7igFqJ.jpg",
                    "adult": false,
                    "overview": "Dashing legionnaire Rick OConnell and Beni, his weasel of a companion, stumble upon the hidden ruins of Hamunaptra while in the midst of a battle in 1923, 3,000 years after Imhotep has suffered a fate worse than death; his body will remain undead for all eternity as a punishment for a forbidden love.",
                    "release_date": "1999-05-06",
                    "original_title": "The Mummy",
                    "genre_ids": [
                      12,
                      14,
                      27,
                      28,
                      53
                    ],
                    "id": 564,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "The Mummy",
                    "backdrop_path": "/3qthpSSyBY6Efeu1sqkO8L1Eyyb.jpg",
                    "popularity": 3.271678,
                    "vote_count": 1400,
                    "video": false,
                    "vote_average": 6.21
                  }
                ],
                "name": "Rachel Weisz",
                "popularity": 16.458675
              }
            ],
            "total_results": 19671,
            "total_pages": 984
          }', true);
    }
}
