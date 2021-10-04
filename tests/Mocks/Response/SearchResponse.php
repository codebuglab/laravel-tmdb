<?php

namespace CodeBugLab\Tmdb\Tests\Mocks\Response;

trait SearchResponse
{
    public function mockGetCompaniesResponse(): array
    {
        return json_decode('{
            "page": 1,
            "results": [
              {
                "id": 34,
                "logo_path": "/GagSvqWlyPdkFHMfQ3pNq6ix9P.png",
                "name": "Sony Pictures"
              },
              {
                "id": 15454,
                "logo_path": null,
                "name": "Sony / Monumental Pictures"
              },
              {
                "id": 8285,
                "logo_path": null,
                "name": "Sony Pictures Studio"
              },
              {
                "id": 30692,
                "logo_path": null,
                "name": "Sony Pictures Imageworks (SPI)"
              },
              {
                "id": 3045,
                "logo_path": null,
                "name": "Sony Pictures Releasing"
              },
              {
                "id": 5752,
                "logo_path": "/sFg00KK0vVq3oqvkCxRQWApYB83.png",
                "name": "Sony Pictures Entertainment"
              },
              {
                "id": 7431,
                "logo_path": null,
                "name": "Sony Pictures Entertainment (SPE)"
              },
              {
                "id": 63520,
                "logo_path": null,
                "name": "Sony Pictures International"
              },
              {
                "id": 65451,
                "logo_path": null,
                "name": "Sony Pictures Digital"
              },
              {
                "id": 94444,
                "logo_path": null,
                "name": "Sony Pictures Networks"
              },
              {
                "id": 86203,
                "logo_path": null,
                "name": "Sony Pictures Television International"
              },
              {
                "id": 82346,
                "logo_path": null,
                "name": "Sony Pictures Entertainment Japan"
              },
              {
                "id": 101555,
                "logo_path": null,
                "name": "Sony Pictures Productions"
              },
              {
                "id": 5388,
                "logo_path": "/i6tbNeVEi7s1uN97s2o0LhEMuF0.png",
                "name": "Sony Pictures Home Entertainment"
              },
              {
                "id": 11073,
                "logo_path": "/wHs44fktdoj6c378ZbSWfzKsM2Z.png",
                "name": "Sony Pictures Television"
              },
              {
                "id": 58,
                "logo_path": "/voYCwlBHJQANtjvm5MNIkCF1dDH.png",
                "name": "Sony Pictures Classics"
              },
              {
                "id": 2251,
                "logo_path": "/8PUjvTVmtJDdDXURTaSoPID0Boj.png",
                "name": "Sony Pictures Animation"
              },
              {
                "id": 34686,
                "logo_path": null,
                "name": "Sony Pictures Entertainment Inc."
              },
              {
                "id": 14577,
                "logo_path": null,
                "name": "Sony Pictures Worldwide Acquisitions (SPWA)"
              }
            ],
            "total_pages": 1,
            "total_results": 19
          }', true);
    }

    public function mockGetCollectionsResponse(): array
    {
        return json_decode('{
            "page": 1,
            "results": [
              {
                "id": 9485,
                "backdrop_path": "/z5A5W3WYJc3UVEWljSGwdjDgQ0j.jpg",
                "name": "The Fast and the Furious Collection",
                "poster_path": "/uv63yAGg1zETAs1XQsOQpava87l.jpg"
              }
            ],
            "total_pages": 1,
            "total_results": 1
          }', true);
    }

    public function mockGetKeywordsResponse(): array
    {
        return json_decode('{
            "page": 1,
            "results": [
              {
                "id": 9951,
                "name": "alien"
              },
              {
                "id": 4939,
                "name": "alien phenomenons"
              },
              {
                "id": 10158,
                "name": "alien planet"
              },
              {
                "id": 14909,
                "name": "alien invasion"
              },
              {
                "id": 15250,
                "name": "alien infection"
              },
              {
                "id": 12553,
                "name": "alien abduction"
              },
              {
                "id": 160515,
                "name": "alien contact"
              },
              {
                "id": 163488,
                "name": "human alien"
              },
              {
                "id": 162459,
                "name": "alien language"
              },
              {
                "id": 163252,
                "name": "alien race"
              },
              {
                "id": 163386,
                "name": "alien possession"
              },
              {
                "id": 183787,
                "name": "alien monster"
              },
              {
                "id": 190042,
                "name": "alien world"
              },
              {
                "id": 193907,
                "name": "evil alien"
              },
              {
                "id": 218016,
                "name": "alien autopsy"
              },
              {
                "id": 220392,
                "name": "alien parasites"
              },
              {
                "id": 197194,
                "name": "alien friendship"
              },
              {
                "id": 200099,
                "name": "space alien"
              },
              {
                "id": 206281,
                "name": "alien fugitive"
              },
              {
                "id": 209033,
                "name": "alien baby"
              }
            ],
            "total_pages": 2,
            "total_results": 39
          }', true);
    }

    public function mockGetMoviesResponse(): array
    {
        return json_decode('{
            "page": 1,
            "results": [
              {
                "poster_path": "/cezWGskPY5x7GaglTTRN4Fugfb8.jpg",
                "adult": false,
                "overview": "When an unexpected enemy emerges and threatens global safety and security, Nick Fury, director of the international peacekeeping agency known as S.H.I.E.L.D., finds himself in need of a team to pull the world back from the brink of disaster. Spanning the globe, a daring recruitment effort begins!",
                "release_date": "2012-04-25",
                "genre_ids": [
                  878,
                  28,
                  12
                ],
                "id": 24428,
                "original_title": "The Avengers",
                "original_language": "en",
                "title": "The Avengers",
                "backdrop_path": "/hbn46fQaRmlpBuUrEiFqv0GDL6Y.jpg",
                "popularity": 7.353212,
                "vote_count": 8503,
                "video": false,
                "vote_average": 7.33
              },
              {
                "poster_path": "/7cJGRajXMU2aYdTbElIl6FtzOl2.jpg",
                "adult": false,
                "overview": "British Ministry agent John Steed, under direction from \"Mother\", investigates a diabolical plot by arch-villain Sir August de Wynter to rule the world with his weather control machine. Steed investigates the beautiful Doctor Mrs. Emma Peel, the only suspect, but simultaneously falls for her and joins forces with her to combat Sir August.",
                "release_date": "1998-08-13",
                "genre_ids": [
                  53
                ],
                "id": 9320,
                "original_title": "The Avengers",
                "original_language": "en",
                "title": "The Avengers",
                "backdrop_path": "/8YW4rwWQgC2JRlBcpStMNUko13k.jpg",
                "popularity": 2.270454,
                "vote_count": 111,
                "video": false,
                "vote_average": 4.7
              },
              {
                "poster_path": "/t90Y3G8UGQp0f0DrP60wRu9gfrH.jpg",
                "adult": false,
                "overview": "When Tony Stark tries to jumpstart a dormant peacekeeping program, things go awry and Earth’s Mightiest Heroes are put to the ultimate test as the fate of the planet hangs in the balance. As the villainous Ultron emerges, it is up to The Avengers to stop him from enacting his terrible plans, and soon uneasy alliances and unexpected action pave the way for an epic and unique global adventure.",
                "release_date": "2015-04-22",
                "genre_ids": [
                  28,
                  12,
                  878
                ],
                "id": 99861,
                "original_title": "Avengers: Age of Ultron",
                "original_language": "en",
                "title": "Avengers: Age of Ultron",
                "backdrop_path": "/570qhjGZmGPrBGnfx70jcwIuBr4.jpg",
                "popularity": 7.557812,
                "vote_count": 3924,
                "video": false,
                "vote_average": 7.4
              },
              {
                "poster_path": "/imTUeuHuxVLxC7sxKqi2G0RPF7k.jpg",
                "adult": false,
                "overview": "This Australian children is film is about scientist Bill Stewart goes to Fiji with his son Tim to investigate the appearance of the Crown of Thorns starfish in the reefs off the island.",
                "release_date": "1973-10-20",
                "genre_ids": [],
                "id": 392031,
                "original_title": "Avengers of the Reef",
                "original_language": "en",
                "title": "Avengers of the Reef",
                "backdrop_path": null,
                "popularity": 1.05,
                "vote_count": 0,
                "video": false,
                "vote_average": 0
              },
              {
                "poster_path": "/u7vvexSU81Qk20yU7Vog23Ogob.jpg",
                "adult": false,
                "overview": "Mysterious Wakanda lies in the darkest heart of Africa, unknown to most of the world. An isolated land hidden behind closed borders, fiercely protected by its young king - the Black Panther. But when brutal alien invaders attack, the threat leaves the Black Panther with no option but to go against the sacred decrees of his people and ask for help from outsiders.",
                "release_date": "2006-08-08",
                "genre_ids": [
                  16,
                  28,
                  878
                ],
                "id": 14611,
                "original_title": "Ultimate Avengers 2",
                "original_language": "en",
                "title": "Ultimate Avengers 2",
                "backdrop_path": "/85NqI4WuCim6dZexmTPUAi13Af0.jpg",
                "popularity": 1.912805,
                "vote_count": 33,
                "video": false,
                "vote_average": 6.33
              },
              {
                "poster_path": "/we6igIU5gXVwuSL6M6pJP75TwEf.jpg",
                "adult": false,
                "overview": "When a nuclear missile was fired at Washington in 1945, Captain America managed to detonate it in the upper atmosphere. But then he fell miles into the icy depths of the North Atlantic, where he remained lost for over sixty years. But now, with the world facing the very same evil, Captain America must rise again as our last hope for survival.",
                "release_date": "2006-02-21",
                "genre_ids": [
                  28,
                  16,
                  878
                ],
                "id": 14609,
                "original_title": "Ultimate Avengers",
                "original_language": "en",
                "title": "Ultimate Avengers",
                "backdrop_path": "/mZO4V0ALx15QTgWr4SaXYGT7i60.jpg",
                "popularity": 1.691503,
                "vote_count": 44,
                "video": false,
                "vote_average": 6.44
              },
              {
                "poster_path": "/cVg2esz4zheJo6iCA3FhkQtJ3NR.jpg",
                "adult": false,
                "overview": "A brilliant continuation of the saga, now in the city. The target of young patriots is a map held in the safe locker in the headquarters of secret police!",
                "release_date": "1968-06-06",
                "genre_ids": [
                  28,
                  12,
                  10751
                ],
                "id": 65591,
                "original_title": "Novye Priklyucheniya Neulovimykh",
                "original_language": "en",
                "title": "The New Adventures of the Elusive Avengers",
                "backdrop_path": "/6ajw8PjpnelE6l28VZRB6PX4KM.jpg",
                "popularity": 1.00372,
                "vote_count": 3,
                "video": false,
                "vote_average": 3.67
              },
              {
                "poster_path": "/42oHwWmalovP2ihGdwi2GPgOU6n.jpg",
                "adult": false,
                "overview": "The famous story of the Shaolin Temple is betrayal by the White-Browed Hermit, and the subsequent revenge by Shaolin firebrand Fang Shih-yu, is the stuff of legend. It has been filmed many times by many directors, but few are remembered as fondly as this production. The potent combination of director Chang Cheh and international idol Alexander Fu Sheng caught lightning in a lens.",
                "release_date": "1976-06-18",
                "genre_ids": [
                  28,
                  10769
                ],
                "id": 109088,
                "original_title": "Fang Shih Yu yu Hu Hui Chien",
                "original_language": "zh",
                "title": "The Shaolin Avengers",
                "backdrop_path": "/cx3GroQGuwJGYfhD13iLyNMV9X8.jpg",
                "popularity": 1.180417,
                "vote_count": 4,
                "video": false,
                "vote_average": 4.63
              },
              {
                "poster_path": "/hKWIeFDfaTnar4zsLwAP8AktSma.jpg",
                "adult": false,
                "overview": "Horse race tipster and journalist Metcalfe is picked for the job of foreign correspondent in Norway when Hitler invades Poland. On the way to Norway his boat is attacked by a German U-Boat, however when he tells the navy about it they disbelief him and, to make matters worse, he is removed from his job. When German forces invade Norway, Metcalfe returns determined to uncover what is going on and stop the Germans in their tracks.",
                "release_date": "1942-06-08",
                "genre_ids": [
                  18,
                  10752
                ],
                "id": 64128,
                "original_title": "The Day Will Dawn",
                "original_language": "en",
                "title": "The Day Will Dawn",
                "backdrop_path": "/cd3VcJBzLJs3gjX0LpE1ZL7hHqs.jpg",
                "popularity": 1.000175,
                "vote_count": 0,
                "video": false,
                "vote_average": 0
              },
              {
                "poster_path": "/nTqwcAsxZyvp0ggSTWGcI3Qezrw.jpg",
                "adult": false,
                "overview": "When two acrobats are fired for fighting with punks in the audience, they go to live with an aunt who is being pressured to sell her house for a real estate development. The developer is nasty son, Lee Fu, decides to muscle the sale, and soon he is at war with the acrobats, plus their unlikely ally, an American named John who used to be Lee Fu is friend. The acrobats open a kung fu school, the scene of several battles with Lee Fu is thugs. A fight to the death, jail time, auntie is surprise decision, a budding acting career, a possessive girlfriend, a debilitating injury, a friendship that needs recalibrating, and Lee Fu is avenger are all in the mix before the end.",
                "release_date": "1979-03-15",
                "genre_ids": [
                  28,
                  18
                ],
                "id": 275663,
                "original_title": "The Lama Avenger",
                "original_language": "en",
                "title": "The Lama Avenger",
                "backdrop_path": null,
                "popularity": 1.032625,
                "vote_count": 0,
                "video": false,
                "vote_average": 0
              },
              {
                "poster_path": null,
                "adult": false,
                "overview": "An insider is look at the first year of an activist group known as the Lesbian Avengers.",
                "release_date": "1993-01-01",
                "genre_ids": [
                  99
                ],
                "id": 377364,
                "original_title": "Lesbian Avengers Eat Fire Too",
                "original_language": "en",
                "title": "Lesbian Avengers Eat Fire Too",
                "backdrop_path": null,
                "popularity": 1.006075,
                "vote_count": 0,
                "video": false,
                "vote_average": 0
              },
              {
                "poster_path": "/2VRvIFsc7QI5nnn5YP7b7Jgx2Xr.jpg",
                "adult": false,
                "overview": "Crippled Avengers is a 1978 Shaw Brothers kung fu film directed by Chang Cheh and starring four members of the Venom Mob. It has been released in North America as Mortal Combat and Return of the 5 Deadly Venoms. The film follows a group of martial artists seeking revenge after being crippled by Tu Tin-To (Chen Kuan Tai), a martial arts master, and his son (Lu Feng).",
                "release_date": "1978-12-20",
                "genre_ids": [
                  28,
                  18,
                  10769
                ],
                "id": 40081,
                "original_title": "Can que",
                "original_language": "en",
                "title": "Crippled Avengers",
                "backdrop_path": "/5nwuBYksiGkrACCVgq086L9zwWm.jpg",
                "popularity": 1.154824,
                "vote_count": 10,
                "video": false,
                "vote_average": 7.5
              },
              {
                "poster_path": "/11jaY0ZOIjR1UcCmZuC56KnMyLi.jpg",
                "adult": false,
                "overview": "Hercules, having agreed to restore justice to Mycenae, confronts evil Prince Myles. The villain is invested with power over giant bronze warriors by his mother Pasiphaë, a sorceress in Hades. Myles assassinates the king and abducts his cousin, Queen Ate, through whom he plans to inherit the throne. Although Zeus temporarily removes Hercules strength for killing Eurystheus, an innocent man framed by Myles, the god restores his powers. Hercules then saves Ate and destroys Myles, Pasiphaë, and the giant warriors.",
                "release_date": "1964-01-30",
                "genre_ids": [
                  12
                ],
                "id": 187745,
                "original_title": "Il trionfo di Ercole",
                "original_language": "it",
                "title": "Hercules vs. the Giant Warriors",
                "backdrop_path": null,
                "popularity": 1.000646,
                "vote_count": 1,
                "video": false,
                "vote_average": 7
              },
              {
                "poster_path": "/pMdTc3kYCD1869UX6cdYUT8Xe49.jpg",
                "adult": false,
                "overview": "Feature-length documentary about the rise of Marvel Studios and their films leading up to, and including, The Avengers.",
                "release_date": "2012-09-25",
                "genre_ids": [
                  99
                ],
                "id": 161097,
                "original_title": "Marvel Studios: Building a Cinematic Universe",
                "original_language": "en",
                "title": "Marvel Studios: Building a Cinematic Universe",
                "backdrop_path": "/yeKT2gNFxHGbTT3Htj5PE9IerGJ.jpg",
                "popularity": 1.136598,
                "vote_count": 4,
                "video": false,
                "vote_average": 3.88
              }
            ],
            "total_results": 14,
            "total_pages": 1
          }', true);
    }

    public function mockGetMultiResponse(): array
    {
        return json_decode('{
            "page": 1,
            "results": [
              {
                "poster_path": null,
                "popularity": 1,
                "id": 24511,
                "overview": "",
                "backdrop_path": null,
                "vote_average": 0,
                "media_type": "tv",
                "first_air_date": "",
                "origin_country": [
                  "GB"
                ],
                "genre_ids": [],
                "original_language": "en",
                "vote_count": 0,
                "name": "Bradley",
                "original_name": "Bradley"
              },
              {
                "poster_path": "/dl4ftVOH532YmV1I9jOLYwexv2F.jpg",
                "popularity": 1,
                "id": 19532,
                "overview": "The Mrs Bradley Mysteries is a 1998-99 British drama series starring Diana Rigg as Adela Bradley, and Neil Dudgeon as her chauffeur George Moody. The series was produced by the BBC for its BBC One channel, based on the character created by detective writer Gladys Mitchell. Five episodes were produced, including a pilot special. Graham Dalby provided the theme music You are the Cream in My Coffee and he appeared with his orchestra in two episodes. Stylish images of the 1920s are featured, including a classic Rolls Royce limousine and art deco fashions and jewellery worn by the title character.\n\nThe series was shown in the United States by PBS broadcaster WGBH as part of its Mystery! anthology strand, and introduced by Diana Rigg. The full series was also aired in Australia in 2011 by the Seven Network is station 7Two.",
                "backdrop_path": "/lHebXNadF0WDJWTxO4Zud3xM8he.jpg",
                "vote_average": 0,
                "media_type": "tv",
                "first_air_date": "",
                "origin_country": [],
                "genre_ids": [
                  18
                ],
                "original_language": "en",
                "vote_count": 0,
                "name": "The Mrs Bradley Mysteries",
                "original_name": "The Mrs Bradley Mysteries"
              },
              {
                "poster_path": "/jksXcyWURdXMcGgShL0aMSR7g8d.jpg",
                "adult": false,
                "overview": "Bradley vs. Provodnikov for the WBO Welterweight title was fought on March 16th, 2012 at The Home Depot Center in Carson, California, USA.",
                "release_date": "2013-03-16",
                "original_title": "Bradley vs. Provodnikov",
                "genre_ids": [],
                "id": 179821,
                "media_type": "movie",
                "original_language": "en",
                "title": "Bradley vs. Provodnikov",
                "backdrop_path": "/jzqQCuTQyZAglGMTV8fSE3HKpma.jpg",
                "popularity": 1.001714,
                "vote_count": 0,
                "video": true,
                "vote_average": 0
              },
              {
                "profile_path": "/2daC5DeXqwkFND0xxutbnSVKN6c.jpg",
                "adult": false,
                "id": 51329,
                "media_type": "person",
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
                    "poster_path": "/eshEkiG7NmU4ekA8CtpIdYiYufZ.jpg",
                    "adult": false,
                    "overview": "When three friends finally come to after a raucous night of bachelor-party revelry, they find a baby in the closet and a tiger in the bathroom. But they ca not seem to locate their best friend, Doug -- who is supposed to be tying the knot. Launching a frantic search for Doug, the trio perseveres through a nasty hangover to try to make it to the church on time.",
                    "release_date": "2009-06-05",
                    "original_title": "The Hangover",
                    "genre_ids": [
                      35
                    ],
                    "id": 18785,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "The Hangover",
                    "backdrop_path": "/39LohvXfll5dGCQIV9B9VJ16ImE.jpg",
                    "popularity": 3.69347,
                    "vote_count": 3761,
                    "video": false,
                    "vote_average": 7.08
                  },
                  {
                    "poster_path": "/ilrZAV2klTB0FLxLb01bOp5pzD9.jpg",
                    "adult": false,
                    "overview": "After spending eight months in a mental institution, a former teacher moves back in with his parents and tries to reconcile with his ex-wife.",
                    "release_date": "2012-09-08",
                    "original_title": "Silver Linings Playbook",
                    "genre_ids": [
                      18,
                      35,
                      10749
                    ],
                    "id": 82693,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Silver Linings Playbook",
                    "backdrop_path": "/4MKAnhMC32FIXFKSQmKkxLtHHfs.jpg",
                    "popularity": 3.277653,
                    "vote_count": 3074,
                    "video": false,
                    "vote_average": 6.9
                  }
                ],
                "name": "Bradley Cooper",
                "popularity": 6.431053
              },
              {
                "poster_path": "/3impN03bMWR6io6NlXM1Wci0Lr3.jpg",
                "adult": false,
                "overview": "Manny Pacquiao takes the ring, perhaps for the very last time, against Timothy Bradley on Sunday.",
                "release_date": "2016-04-09",
                "original_title": "Pacquiao VS Bradley 3",
                "genre_ids": [],
                "id": 392316,
                "media_type": "movie",
                "original_language": "en",
                "title": "Pacquiao VS Bradley 3",
                "backdrop_path": "/A1AR3gsHve1YqfqYM0r2EhPxRUj.jpg",
                "popularity": 1.017608,
                "vote_count": 0,
                "video": false,
                "vote_average": 0
              },
              {
                "poster_path": "/sZ7H6g4GrEZZr2rzAEH8Md2cgUc.jpg",
                "adult": false,
                "overview": "Manny Pacquiao is not perfect. He is not unbeatable. He is not impossible to root against. Imagine that. In the last seven months, nothing has quantitatively changed for Pacquiao, who is still on a winning streak and still one of the most insanely famous people in the world. And yet it feels like things are on the precipice of changing. There is no need to trot out the \"oh, how the mighty have fallen\" cliché for him just yet. But there is something vaguely in flux about the Filipino living legend is aura, and the idea of the mighty falling is suddenly conceivable.",
                "release_date": "2012-06-09",
                "original_title": "Pacquiao vs Bradley",
                "genre_ids": [
                  28
                ],
                "id": 116103,
                "media_type": "movie",
                "original_language": "en",
                "title": "Pacquiao vs Bradley",
                "backdrop_path": null,
                "popularity": 1.003596,
                "vote_count": 0,
                "video": false,
                "vote_average": 0
              },
              {
                "poster_path": null,
                "adult": false,
                "overview": "The chat logs of Wikileaks activist soldier Bradley Manning rendered in the visual equivalent of chiptune.",
                "release_date": "2012-07-20",
                "original_title": "Bradley Manning Had Secrets",
                "genre_ids": [],
                "id": 174121,
                "media_type": "movie",
                "original_language": "en",
                "title": "Bradley Manning Had Secrets",
                "backdrop_path": null,
                "popularity": 1.001429,
                "vote_count": 0,
                "video": false,
                "vote_average": 0
              },
              {
                "poster_path": "/yadRYI6DKae9vLyhGoJWjpXjxBY.jpg",
                "adult": false,
                "overview": "Timothy Bradley vs. Juan Manuel Márquez, is a boxing welterweight championship fight. The bout was held on October 12, 2013, at the Thomas &amp; Mack Center in Las Vegas, Nevada, United States on HBO Pay-Per-View.",
                "release_date": "2013-10-12",
                "original_title": "HBO Boxing Bradley vs Marquez",
                "genre_ids": [],
                "id": 315466,
                "media_type": "movie",
                "original_language": "en",
                "title": "HBO Boxing Bradley vs Marquez",
                "backdrop_path": "/j6oaJ0pH2NxIV3h1CvoCDmh4Muf.jpg",
                "popularity": 1.003308,
                "vote_count": 1,
                "video": false,
                "vote_average": 0.5
              },
              {
                "poster_path": "/uFX8c2TpABsv2N2T3RGSkBplzpc.jpg",
                "adult": false,
                "overview": "The incredible rise to fame of 63-year-old aspiring soul singer Charles Bradley, whose debut album took him from a hard life in the Brooklyn Housing Projects to Rolling Stone Magazine is top 50 albums of 2011.",
                "release_date": "2012-03-09",
                "original_title": "Charles Bradley: Soul of America",
                "genre_ids": [
                  10402,
                  99
                ],
                "id": 98069,
                "media_type": "movie",
                "original_language": "en",
                "title": "Charles Bradley: Soul of America",
                "backdrop_path": "/rj2UQvyOboXABW9XD7rcNtPxmCf.jpg",
                "popularity": 1.001373,
                "vote_count": 4,
                "video": false,
                "vote_average": 6.88
              },
              {
                "poster_path": "/kOwu4EU7NKjvh1Obh4S1vis9W7s.jpg",
                "adult": false,
                "overview": "Eight-division world champion Manny Pacquiao is taking on undefeated champion Timothy Bradley Jr. to avenge one of the most controversial decisions in boxing history.",
                "release_date": "2014-04-12",
                "original_title": "Pacquiao vs. Bradley 2",
                "genre_ids": [
                  28
                ],
                "id": 264534,
                "media_type": "movie",
                "original_language": "en",
                "title": "Pacquiao vs. Bradley 2",
                "backdrop_path": "/sOJN953z8RQ2CvnoiQssUWzLHi2.jpg",
                "popularity": 1.005433,
                "vote_count": 0,
                "video": true,
                "vote_average": 0
              },
              {
                "poster_path": "/6z9qJWD7G3rjfdhfCaRO1AB5C6K.jpg",
                "adult": false,
                "overview": "Timothy Bradley vs. Juan Manuel Márquez, is a boxing welterweight championship fight. The bout was held on October 12, 2013, at the Thomas &amp; Mack Center in Las Vegas, Nevada, United States on HBO Pay-Per-View.",
                "release_date": "2013-10-12",
                "original_title": "Timothy Bradley vs Juan Manuel Marquez",
                "genre_ids": [],
                "id": 227684,
                "media_type": "movie",
                "original_language": "en",
                "title": "Timothy Bradley vs Juan Manuel Marquez",
                "backdrop_path": "/jpzsyyIBxXmfx8rjpdZ95W8qcPn.jpg",
                "popularity": 1.010706,
                "vote_count": 2,
                "video": false,
                "vote_average": 6.5
              },
              {
                "poster_path": "/6lT6uDV2azAE3liGO0QW1tll6Ef.jpg",
                "adult": false,
                "overview": "",
                "release_date": "2013-10-19",
                "original_title": "Charles Bradley & His Extraordinaires - Crossroads Festival",
                "genre_ids": [
                  10402
                ],
                "id": 268547,
                "media_type": "movie",
                "original_language": "it",
                "title": "Charles Bradley & His Extraordinaires - Crossroads Festival",
                "backdrop_path": "/jfYHiPlhZHJHdx6rWnZPhDE6EtK.jpg",
                "popularity": 1.002143,
                "vote_count": 1,
                "video": false,
                "vote_average": 5.5
              },
              {
                "poster_path": "/1nrqyUAIeQ7S91QnG0tPqNLgmft.jpg",
                "adult": false,
                "overview": "An in-depth, no-holds barred documentary that explores the life of one of Britain’s brightest sport stars. Cameras follow Wiggins as he takes on some of Europe’s toughest races and tries to balance his professional and personal life. With exclusive access to those closest to him, the film captures the man behind all the headlines and sporting achievements, from his arduous training schedule that sees him taken away from his family for months at a time to struggling to cope with enormous media pressure.",
                "release_date": "2012-11-20",
                "original_title": "Bradley Wiggins: A Year in Yellow",
                "genre_ids": [
                  99
                ],
                "id": 191290,
                "media_type": "movie",
                "original_language": "en",
                "title": "Bradley Wiggins: A Year in Yellow",
                "backdrop_path": "/m9Q2XssO5AwjD8YLVmHDGswMjKf.jpg",
                "popularity": 1.001572,
                "vote_count": 0,
                "video": false,
                "vote_average": 0
              },
              {
                "profile_path": "/4XAtJsz67pmpIsCQ9SBKfqayk2d.jpg",
                "adult": false,
                "id": 154689,
                "media_type": "person",
                "known_for": [
                  {
                    "poster_path": "/xn3QM6aInhQp631K2lXpGFox2Kc.jpg",
                    "popularity": 6.605526,
                    "id": 60866,
                    "overview": "A medical student who becomes a zombie joins a Coroner is Office in order to gain access to the brains she must reluctantly eat so that she can maintain her humanity. But every brain she eats, she also inherits their memories and must now solve their deaths with help from the Medical examiner and a police detective.",
                    "backdrop_path": "/d2YDPTQPe3mI2LqBWwb0CchN54f.jpg",
                    "vote_average": 6.01,
                    "media_type": "tv",
                    "first_air_date": "2015-03-17",
                    "origin_country": [
                      "US"
                    ],
                    "genre_ids": [
                      27,
                      18,
                      80,
                      10765
                    ],
                    "original_language": "en",
                    "vote_count": 69,
                    "name": "iZombie",
                    "original_name": "iZombie"
                  },
                  {
                    "poster_path": "/uK7Y7ajLx9bmM34COQzQ35HqlSr.jpg",
                    "popularity": 7.267267,
                    "id": 7225,
                    "overview": "Merlin is a British fantasy-adventure television programme by Julian Jones, Jake Michie, Julian Murphy and Johnny Capps. It was broadcast on BBC One from 20 September 2008 to 24 December 2012. The show is loosely based on the Arthurian legends of the young wizard Merlin and his relationship with Arthur Pendragon but differs from traditional versions in many ways. The show was influenced by the US drama series Smallville, about the early years of Superman, and was produced by independent production company Shine Limited.\n\nThe show was greenlit by the BBC in 2006, after unsuccessful attempts. The series premiered in 2008 to mixed reviews but decent ratings, and proved popular on the BBC is digital catch-up service, iPlayer. It was commissioned by the BBC for a second series, and was picked up in the United States by one of the main broadcasters, NBC, though it later moved to the cable network Syfy due to low ratings. In 2012, the show is producers announced that its fifth series would be its last, with a two-part finale finishing the show on 24 December 2012.",
                    "backdrop_path": "/c1nR2MRShXYqY04I6V3qwebvkB7.jpg",
                    "vote_average": 6.45,
                    "media_type": "tv",
                    "first_air_date": "2008-09-20",
                    "origin_country": [
                      "GB"
                    ],
                    "genre_ids": [
                      10759,
                      18,
                      10751,
                      10765
                    ],
                    "original_language": "en",
                    "vote_count": 20,
                    "name": "Merlin",
                    "original_name": "Merlin"
                  },
                  {
                    "poster_path": "/wa1nzcXxjwKRadtd78tIA9VJqbe.jpg",
                    "popularity": 2.109448,
                    "id": 19033,
                    "overview": "After discovering his origins, Damien Thorn must cope with life as the Anti-Christ.",
                    "backdrop_path": "/yBHu4S7ZXlFOSUVT4tRQAuEQx9f.jpg",
                    "vote_average": 6.35,
                    "media_type": "tv",
                    "first_air_date": "2016-03-07",
                    "origin_country": [
                      "US"
                    ],
                    "genre_ids": [
                      18
                    ],
                    "original_language": "en",
                    "vote_count": 10,
                    "name": "Damien",
                    "original_name": "Damien"
                  }
                ],
                "name": "Bradley James",
                "popularity": 2.67723
              },
              {
                "profile_path": "/5BPFRv4io7U1zxkYHtKaE9a8FDD.jpg",
                "adult": false,
                "id": 11180,
                "media_type": "person",
                "known_for": [
                  {
                    "poster_path": "/dlIPGXPxXQTp9kFrRzn0RsfUelx.jpg",
                    "adult": false,
                    "overview": "Predominantly set during World War II, Steve Rogers is a sickly man from Brooklyn who is transformed into super-soldier Captain America to aid in the war effort. Rogers must stop the Red Skull – Adolf Hitler is ruthless head of weaponry, and the leader of an organization that intends to use a mysterious device of untold powers for world domination.",
                    "release_date": "2011-07-22",
                    "original_title": "Captain America: The First Avenger",
                    "genre_ids": [
                      28,
                      12,
                      878
                    ],
                    "id": 1771,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Captain America: The First Avenger",
                    "backdrop_path": "/pmZtj1FKvQqISS6iQbkiLg5TAsr.jpg",
                    "popularity": 7.065554,
                    "vote_count": 4733,
                    "video": false,
                    "vote_average": 6.44
                  },
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
                  }
                ],
                "name": "David Bradley",
                "popularity": 2.62283
              },
              {
                "poster_path": null,
                "adult": false,
                "overview": "Archive biographies of the four greatest American generals of World War II. Patton - Known by his troops as \"Old Blood and Guts\". He could march his men over 100 miles in a day to recapture a town from the Germans. \"Attack, attack and attack again\" was his motto. He predicted a spectacular death for himself, but sadly, he died from injuries suffered from an auto accident. MacArthur - He had a spirit of intense determination. When he left the Philippines he promised he would return, rescuing every prisoner in Manila. Toward the end of his military career he said, \"That old soldiers never die, they just fade away\". Eisenhower - A graduate of West Point, He was Chief of Staff of the 3rd Army and became 34th President of the U.S.",
                "release_date": "2014-01-01",
                "original_title": "Great American Generals - Patton, MacArthur, Eisenhower, Bradley",
                "genre_ids": [],
                "id": 321855,
                "media_type": "movie",
                "original_language": "en",
                "title": "Great American Generals - Patton, MacArthur, Eisenhower, Bradley",
                "backdrop_path": null,
                "popularity": 1.002295,
                "vote_count": 0,
                "video": false,
                "vote_average": 0
              },
              {
                "profile_path": "/zFXwtsdvUCeNkzCzYpYZdAmTkJY.jpg",
                "adult": false,
                "id": 23680,
                "media_type": "person",
                "known_for": [
                  {
                    "poster_path": "/vOipe2myi26UDwP978hsYOrnUWC.jpg",
                    "adult": false,
                    "overview": "An orphan boy is raised in the Jungle with the help of a pack of wolves, a bear and a black panther.",
                    "release_date": "2016-04-07",
                    "original_title": "The Jungle Book",
                    "genre_ids": [
                      12,
                      18,
                      14
                    ],
                    "id": 278927,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "The Jungle Book",
                    "backdrop_path": "/eIOTsGg9FCVrBc4r2nXaV61JF4F.jpg",
                    "popularity": 21.104822,
                    "vote_count": 1093,
                    "video": false,
                    "vote_average": 6.4
                  },
                  {
                    "poster_path": "/5kO6hVZrtBZ98VfpgHvwivjXgMg.jpg",
                    "adult": false,
                    "overview": "The story follows the adventures of Aang, a young successor to a long line of Avatars, who must put his childhood ways aside and stop the Fire Nation from enslaving the Water, Earth and Air nations.",
                    "release_date": "2010-06-30",
                    "original_title": "The Last Airbender",
                    "genre_ids": [
                      28,
                      12,
                      10751,
                      14
                    ],
                    "id": 10196,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "The Last Airbender",
                    "backdrop_path": "/fuINagU2N0RxoQWenf00txtXfV5.jpg",
                    "popularity": 2.426624,
                    "vote_count": 669,
                    "video": false,
                    "vote_average": 4.73
                  },
                  {
                    "poster_path": "/bJhVLribUKCrKv1h1WFqv4QmRWM.jpg",
                    "adult": false,
                    "overview": "Michael Jordan agrees to help the Looney Tunes play a basketball game against alien slavers to determine their freedom.",
                    "release_date": "1996-11-15",
                    "original_title": "Space Jam",
                    "genre_ids": [
                      16,
                      35,
                      18,
                      10751,
                      14
                    ],
                    "id": 2300,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Space Jam",
                    "backdrop_path": "/kBTdPNTAzagAY6UiwY957KCDGuu.jpg",
                    "popularity": 2.368469,
                    "vote_count": 593,
                    "video": false,
                    "vote_average": 6.29
                  }
                ],
                "name": "Dee Bradley Baker",
                "popularity": 3.167041
              },
              {
                "profile_path": null,
                "adult": false,
                "id": 1512800,
                "media_type": "person",
                "known_for": [
                  {
                    "poster_path": "/blPtZ68I3Mbwxid0YBLRVMWK8LW.jpg",
                    "adult": false,
                    "overview": "Arrowhead is a tale of survival set amongst the distant stars. Kye is a prisoner of war caught between two armies that he does not believe in. When offered an opportunity for freedom, Kye sets out on one last rescue mission, only to become stranded on a desert moon when his ship - the Arrowhead - crash lands. Kye has to learn to survive when we discovers a new life form that will challenge his very body and soul.",
                    "release_date": "2016-01-01",
                    "original_title": "Arrowhead",
                    "genre_ids": [
                      878,
                      12,
                      9648,
                      28
                    ],
                    "id": 360799,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Arrowhead",
                    "backdrop_path": "/t6dtZYcpmtm2gobh1tIGDPIIpFj.jpg",
                    "popularity": 2.079074,
                    "vote_count": 12,
                    "video": false,
                    "vote_average": 4.29
                  }
                ],
                "name": "Akira Bradley",
                "popularity": 1.91
              },
              {
                "profile_path": null,
                "adult": false,
                "id": 1357431,
                "media_type": "person",
                "known_for": [
                  {
                    "poster_path": "/oQTs1pOzPP8AkzSHTXSFcLEYw3F.jpg",
                    "adult": false,
                    "overview": "Homeless and on the run from a military court martial, a damaged ex-special forces soldier navigating London is criminal underworld seizes an opportunity to assume another man is identity, transforming into an avenging angel in the process.",
                    "release_date": "2013-05-07",
                    "original_title": "Redemption",
                    "genre_ids": [
                      28,
                      53
                    ],
                    "id": 136418,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Redemption",
                    "backdrop_path": "/1ZRCJL17jnAfT0EnKIeP9ncOeN6.jpg",
                    "popularity": 2.574478,
                    "vote_count": 384,
                    "video": false,
                    "vote_average": 5.66
                  },
                  {
                    "poster_path": "/siS5cFpMDxmsS3AS536LHLT9Uxb.jpg",
                    "adult": false,
                    "overview": "A young, English working-class boy spends his free time caring for and training his pet falcon.",
                    "release_date": "1969-11-18",
                    "original_title": "Kes",
                    "genre_ids": [
                      18
                    ],
                    "id": 13384,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Kes",
                    "backdrop_path": "/enAU4bPyOPEd6UreUufSANW0fx7.jpg",
                    "popularity": 1.571478,
                    "vote_count": 36,
                    "video": false,
                    "vote_average": 7.39
                  },
                  {
                    "poster_path": "/o9s0BcPYzn8b19RZOgzpWHV9jjL.jpg",
                    "adult": false,
                    "overview": "In 1879, the British suffer a great loss at the Battle of Isandlwana due to incompetent leadership. Cy Endfield co-wrote the epic prequel Zulu Dawn 15 years after his enormously popular Zulu. Set in 1879, this film depicts the catastrophic Battle of Isandhlwana, which remains the worst defeat of the British army by natives, with the British contingent outnumbered 16-to-1 by the Zulu tribesmen. The film is opinion of events is made immediately clear in its title sequence: ebullient African village life presided over by King Cetshwayo is contrasted with aristocratic artifice under the arrogant eye of General Lord Chelmsford (Peter OToole). Chelmsford is at the heart of all that goes wrong, initiating the catastrophic battle with an ultimatum made seemingly for the sake of giving his troops something to do. His detached  manner leads to one mistake after another.",
                    "release_date": "1979-05-14",
                    "original_title": "Zulu Dawn",
                    "genre_ids": [
                      12,
                      18,
                      36,
                      10752
                    ],
                    "id": 18061,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Zulu Dawn",
                    "backdrop_path": "/Wm0gjfAOi1kOMGILTZJJk5krPU.jpg",
                    "popularity": 1.150859,
                    "vote_count": 7,
                    "video": false,
                    "vote_average": 5.43
                  }
                ],
                "name": "David Bradley",
                "popularity": 1.89775
              },
              {
                "profile_path": "/66brylvzWLg94TRMd6QFrVyMOei.jpg",
                "adult": false,
                "id": 11367,
                "media_type": "person",
                "known_for": [
                  {
                    "poster_path": "/t8cW3FSCDYCaWRiNHSvI6SDuWeA.jpg",
                    "adult": false,
                    "overview": "Five college friends spend the weekend at a remote cabin in the woods, where they get more than they bargained for. Together, they must discover the truth behind the cabin in the woods.",
                    "release_date": "2012-04-12",
                    "original_title": "The Cabin in the Woods",
                    "genre_ids": [
                      27,
                      53
                    ],
                    "id": 22970,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "The Cabin in the Woods",
                    "backdrop_path": "/214TKe8WBBbFXVrBRV9RECeE4oW.jpg",
                    "popularity": 2.071572,
                    "vote_count": 1281,
                    "video": false,
                    "vote_average": 6.47
                  },
                  {
                    "poster_path": "/mvs3reS18RP6IhjLwwLeVtkoeg0.jpg",
                    "adult": false,
                    "overview": "Author P.L. Travers travels from London to Hollywood as Walt Disney Pictures adapts her novel Mary Poppins for the big screen.",
                    "release_date": "2013-11-16",
                    "original_title": "Saving Mr. Banks",
                    "genre_ids": [
                      35,
                      18,
                      36
                    ],
                    "id": 140823,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Saving Mr. Banks",
                    "backdrop_path": "/fJQ5kjLx4UdK05MC323Vlzwr6S8.jpg",
                    "popularity": 3.007257,
                    "vote_count": 718,
                    "video": false,
                    "vote_average": 7.28
                  },
                  {
                    "poster_path": "/pt57Kwkd2g2xdYFZKx3yCoz9Xim.jpg",
                    "adult": false,
                    "overview": "Richard Martin buys a gift, a new NDR-114 robot. The product is named Andrew by the youngest of the family is children. \"Bicentennial Man\" follows the life and times of Andrew, a robot purchased as a household appliance programmed to perform menial tasks. As Andrew begins to experience emotions and creative thought, the Martin family soon discovers they do not have an ordinary robot.",
                    "release_date": "1999-12-17",
                    "original_title": "Bicentennial Man",
                    "genre_ids": [
                      35,
                      878
                    ],
                    "id": 2277,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Bicentennial Man",
                    "backdrop_path": "/cbldDMSYdasHMewxzPqZH7sQGnz.jpg",
                    "popularity": 2.935055,
                    "vote_count": 471,
                    "video": false,
                    "vote_average": 6.68
                  }
                ],
                "name": "Bradley Whitford",
                "popularity": 1.863993
              }
            ],
            "total_results": 382,
            "total_pages": 20
          }', true);
    }

    public function mockGetPeopleResponse(): array
    {
        return json_decode('{
            "page": 1,
            "results": [
              {
                "profile_path": "/2daC5DeXqwkFND0xxutbnSVKN6c.jpg",
                "adult": false,
                "id": 51329,
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
                    "poster_path": "/eshEkiG7NmU4ekA8CtpIdYiYufZ.jpg",
                    "adult": false,
                    "overview": "When three friends finally come to after a raucous night of bachelor-party revelry, they find a baby in the closet and a tiger in the bathroom. But they ca not seem to locate their best friend, Doug -- who is supposed to be tying the knot. Launching a frantic search for Doug, the trio perseveres through a nasty hangover to try to make it to the church on time.",
                    "release_date": "2009-06-05",
                    "original_title": "The Hangover",
                    "genre_ids": [
                      35
                    ],
                    "id": 18785,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "The Hangover",
                    "backdrop_path": "/39LohvXfll5dGCQIV9B9VJ16ImE.jpg",
                    "popularity": 3.69347,
                    "vote_count": 3761,
                    "video": false,
                    "vote_average": 7.08
                  },
                  {
                    "poster_path": "/ilrZAV2klTB0FLxLb01bOp5pzD9.jpg",
                    "adult": false,
                    "overview": "After spending eight months in a mental institution, a former teacher moves back in with his parents and tries to reconcile with his ex-wife.",
                    "release_date": "2012-09-08",
                    "original_title": "Silver Linings Playbook",
                    "genre_ids": [
                      18,
                      35,
                      10749
                    ],
                    "id": 82693,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Silver Linings Playbook",
                    "backdrop_path": "/4MKAnhMC32FIXFKSQmKkxLtHHfs.jpg",
                    "popularity": 3.277653,
                    "vote_count": 3074,
                    "video": false,
                    "vote_average": 6.9
                  }
                ],
                "name": "Bradley Cooper",
                "popularity": 6.431053
              },
              {
                "profile_path": "/4XAtJsz67pmpIsCQ9SBKfqayk2d.jpg",
                "adult": false,
                "id": 154689,
                "known_for": [
                  {
                    "poster_path": "/xn3QM6aInhQp631K2lXpGFox2Kc.jpg",
                    "popularity": 6.605526,
                    "id": 60866,
                    "overview": "A medical student who becomes a zombie joins a Coroner is Office in order to gain access to the brains she must reluctantly eat so that she can maintain her humanity. But every brain she eats, she also inherits their memories and must now solve their deaths with help from the Medical examiner and a police detective.",
                    "backdrop_path": "/d2YDPTQPe3mI2LqBWwb0CchN54f.jpg",
                    "vote_average": 6.01,
                    "media_type": "tv",
                    "first_air_date": "2015-03-17",
                    "origin_country": [
                      "US"
                    ],
                    "genre_ids": [
                      27,
                      18,
                      80,
                      10765
                    ],
                    "original_language": "en",
                    "vote_count": 69,
                    "name": "iZombie",
                    "original_name": "iZombie"
                  },
                  {
                    "poster_path": "/uK7Y7ajLx9bmM34COQzQ35HqlSr.jpg",
                    "popularity": 7.267267,
                    "id": 7225,
                    "overview": "Merlin is a British fantasy-adventure television programme by Julian Jones, Jake Michie, Julian Murphy and Johnny Capps. It was broadcast on BBC One from 20 September 2008 to 24 December 2012. The show is loosely based on the Arthurian legends of the young wizard Merlin and his relationship with Arthur Pendragon but differs from traditional versions in many ways. The show was influenced by the US drama series Smallville, about the early years of Superman, and was produced by independent production company Shine Limited.\n\nThe show was greenlit by the BBC in 2006, after unsuccessful attempts. The series premiered in 2008 to mixed reviews but decent ratings, and proved popular on the BBC is digital catch-up service, iPlayer. It was commissioned by the BBC for a second series, and was picked up in the United States by one of the main broadcasters, NBC, though it later moved to the cable network Syfy due to low ratings. In 2012, the show is producers announced that its fifth series would be its last, with a two-part finale finishing the show on 24 December 2012.",
                    "backdrop_path": "/c1nR2MRShXYqY04I6V3qwebvkB7.jpg",
                    "vote_average": 6.45,
                    "media_type": "tv",
                    "first_air_date": "2008-09-20",
                    "origin_country": [
                      "GB"
                    ],
                    "genre_ids": [
                      10759,
                      18,
                      10751,
                      10765
                    ],
                    "original_language": "en",
                    "vote_count": 20,
                    "name": "Merlin",
                    "original_name": "Merlin"
                  },
                  {
                    "poster_path": "/wa1nzcXxjwKRadtd78tIA9VJqbe.jpg",
                    "popularity": 2.109448,
                    "id": 19033,
                    "overview": "After discovering his origins, Damien Thorn must cope with life as the Anti-Christ.",
                    "backdrop_path": "/yBHu4S7ZXlFOSUVT4tRQAuEQx9f.jpg",
                    "vote_average": 6.35,
                    "media_type": "tv",
                    "first_air_date": "2016-03-07",
                    "origin_country": [
                      "US"
                    ],
                    "genre_ids": [
                      18
                    ],
                    "original_language": "en",
                    "vote_count": 10,
                    "name": "Damien",
                    "original_name": "Damien"
                  }
                ],
                "name": "Bradley James",
                "popularity": 2.67723
              },
              {
                "profile_path": "/5BPFRv4io7U1zxkYHtKaE9a8FDD.jpg",
                "adult": false,
                "id": 11180,
                "known_for": [
                  {
                    "poster_path": "/dlIPGXPxXQTp9kFrRzn0RsfUelx.jpg",
                    "adult": false,
                    "overview": "Predominantly set during World War II, Steve Rogers is a sickly man from Brooklyn who is transformed into super-soldier Captain America to aid in the war effort. Rogers must stop the Red Skull – Adolf Hitler is ruthless head of weaponry, and the leader of an organization that intends to use a mysterious device of untold powers for world domination.",
                    "release_date": "2011-07-22",
                    "original_title": "Captain America: The First Avenger",
                    "genre_ids": [
                      28,
                      12,
                      878
                    ],
                    "id": 1771,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Captain America: The First Avenger",
                    "backdrop_path": "/pmZtj1FKvQqISS6iQbkiLg5TAsr.jpg",
                    "popularity": 7.065554,
                    "vote_count": 4733,
                    "video": false,
                    "vote_average": 6.44
                  },
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
                  }
                ],
                "name": "David Bradley",
                "popularity": 2.62283
              },
              {
                "profile_path": "/zFXwtsdvUCeNkzCzYpYZdAmTkJY.jpg",
                "adult": false,
                "id": 23680,
                "known_for": [
                  {
                    "poster_path": "/vOipe2myi26UDwP978hsYOrnUWC.jpg",
                    "adult": false,
                    "overview": "An orphan boy is raised in the Jungle with the help of a pack of wolves, a bear and a black panther.",
                    "release_date": "2016-04-07",
                    "original_title": "The Jungle Book",
                    "genre_ids": [
                      12,
                      18,
                      14
                    ],
                    "id": 278927,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "The Jungle Book",
                    "backdrop_path": "/eIOTsGg9FCVrBc4r2nXaV61JF4F.jpg",
                    "popularity": 21.104822,
                    "vote_count": 1093,
                    "video": false,
                    "vote_average": 6.4
                  },
                  {
                    "poster_path": "/5kO6hVZrtBZ98VfpgHvwivjXgMg.jpg",
                    "adult": false,
                    "overview": "The story follows the adventures of Aang, a young successor to a long line of Avatars, who must put his childhood ways aside and stop the Fire Nation from enslaving the Water, Earth and Air nations.",
                    "release_date": "2010-06-30",
                    "original_title": "The Last Airbender",
                    "genre_ids": [
                      28,
                      12,
                      10751,
                      14
                    ],
                    "id": 10196,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "The Last Airbender",
                    "backdrop_path": "/fuINagU2N0RxoQWenf00txtXfV5.jpg",
                    "popularity": 2.426624,
                    "vote_count": 669,
                    "video": false,
                    "vote_average": 4.73
                  },
                  {
                    "poster_path": "/bJhVLribUKCrKv1h1WFqv4QmRWM.jpg",
                    "adult": false,
                    "overview": "Michael Jordan agrees to help the Looney Tunes play a basketball game against alien slavers to determine their freedom.",
                    "release_date": "1996-11-15",
                    "original_title": "Space Jam",
                    "genre_ids": [
                      16,
                      35,
                      18,
                      10751,
                      14
                    ],
                    "id": 2300,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Space Jam",
                    "backdrop_path": "/kBTdPNTAzagAY6UiwY957KCDGuu.jpg",
                    "popularity": 2.368469,
                    "vote_count": 593,
                    "video": false,
                    "vote_average": 6.29
                  }
                ],
                "name": "Dee Bradley Baker",
                "popularity": 3.167041
              },
              {
                "profile_path": null,
                "adult": false,
                "id": 1512800,
                "known_for": [
                  {
                    "poster_path": "/blPtZ68I3Mbwxid0YBLRVMWK8LW.jpg",
                    "adult": false,
                    "overview": "Arrowhead is a tale of survival set amongst the distant stars. Kye is a prisoner of war caught between two armies that he does not believe in. When offered an opportunity for freedom, Kye sets out on one last rescue mission, only to become stranded on a desert moon when his ship - the Arrowhead - crash lands. Kye has to learn to survive when we discovers a new life form that will challenge his very body and soul.",
                    "release_date": "2016-01-01",
                    "original_title": "Arrowhead",
                    "genre_ids": [
                      878,
                      12,
                      9648,
                      28
                    ],
                    "id": 360799,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Arrowhead",
                    "backdrop_path": "/t6dtZYcpmtm2gobh1tIGDPIIpFj.jpg",
                    "popularity": 2.079074,
                    "vote_count": 12,
                    "video": false,
                    "vote_average": 4.29
                  }
                ],
                "name": "Akira Bradley",
                "popularity": 1.91
              },
              {
                "profile_path": null,
                "adult": false,
                "id": 1357431,
                "known_for": [
                  {
                    "poster_path": "/oQTs1pOzPP8AkzSHTXSFcLEYw3F.jpg",
                    "adult": false,
                    "overview": "Homeless and on the run from a military court martial, a damaged ex-special forces soldier navigating London is criminal underworld seizes an opportunity to assume another man is identity, transforming into an avenging angel in the process.",
                    "release_date": "2013-05-07",
                    "original_title": "Redemption",
                    "genre_ids": [
                      28,
                      53
                    ],
                    "id": 136418,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Redemption",
                    "backdrop_path": "/1ZRCJL17jnAfT0EnKIeP9ncOeN6.jpg",
                    "popularity": 2.574478,
                    "vote_count": 384,
                    "video": false,
                    "vote_average": 5.66
                  },
                  {
                    "poster_path": "/siS5cFpMDxmsS3AS536LHLT9Uxb.jpg",
                    "adult": false,
                    "overview": "A young, English working-class boy spends his free time caring for and training his pet falcon.",
                    "release_date": "1969-11-18",
                    "original_title": "Kes",
                    "genre_ids": [
                      18
                    ],
                    "id": 13384,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Kes",
                    "backdrop_path": "/enAU4bPyOPEd6UreUufSANW0fx7.jpg",
                    "popularity": 1.571478,
                    "vote_count": 36,
                    "video": false,
                    "vote_average": 7.39
                  },
                  {
                    "poster_path": "/o9s0BcPYzn8b19RZOgzpWHV9jjL.jpg",
                    "adult": false,
                    "overview": "In 1879, the British suffer a great loss at the Battle of Isandlwana due to incompetent leadership. Cy Endfield co-wrote the epic prequel Zulu Dawn 15 years after his enormously popular Zulu. Set in 1879, this film depicts the catastrophic Battle of Isandhlwana, which remains the worst defeat of the British army by natives, with the British contingent outnumbered 16-to-1 by the Zulu tribesmen. The film is opinion of events is made immediately clear in its title sequence: ebullient African village life presided over by King Cetshwayo is contrasted with aristocratic artifice under the arrogant eye of General Lord Chelmsford (Peter OToole). Chelmsford is at the heart of all that goes wrong, initiating the catastrophic battle with an ultimatum made seemingly for the sake of giving his troops something to do. His detached  manner leads to one mistake after another.",
                    "release_date": "1979-05-14",
                    "original_title": "Zulu Dawn",
                    "genre_ids": [
                      12,
                      18,
                      36,
                      10752
                    ],
                    "id": 18061,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Zulu Dawn",
                    "backdrop_path": "/Wm0gjfAOi1kOMGILTZJJk5krPU.jpg",
                    "popularity": 1.150859,
                    "vote_count": 7,
                    "video": false,
                    "vote_average": 5.43
                  }
                ],
                "name": "David Bradley",
                "popularity": 1.89775
              },
              {
                "profile_path": "/66brylvzWLg94TRMd6QFrVyMOei.jpg",
                "adult": false,
                "id": 11367,
                "known_for": [
                  {
                    "poster_path": "/t8cW3FSCDYCaWRiNHSvI6SDuWeA.jpg",
                    "adult": false,
                    "overview": "Five college friends spend the weekend at a remote cabin in the woods, where they get more than they bargained for. Together, they must discover the truth behind the cabin in the woods.",
                    "release_date": "2012-04-12",
                    "original_title": "The Cabin in the Woods",
                    "genre_ids": [
                      27,
                      53
                    ],
                    "id": 22970,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "The Cabin in the Woods",
                    "backdrop_path": "/214TKe8WBBbFXVrBRV9RECeE4oW.jpg",
                    "popularity": 2.071572,
                    "vote_count": 1281,
                    "video": false,
                    "vote_average": 6.47
                  },
                  {
                    "poster_path": "/mvs3reS18RP6IhjLwwLeVtkoeg0.jpg",
                    "adult": false,
                    "overview": "Author P.L. Travers travels from London to Hollywood as Walt Disney Pictures adapts her novel Mary Poppins for the big screen.",
                    "release_date": "2013-11-16",
                    "original_title": "Saving Mr. Banks",
                    "genre_ids": [
                      35,
                      18,
                      36
                    ],
                    "id": 140823,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Saving Mr. Banks",
                    "backdrop_path": "/fJQ5kjLx4UdK05MC323Vlzwr6S8.jpg",
                    "popularity": 3.007257,
                    "vote_count": 718,
                    "video": false,
                    "vote_average": 7.28
                  },
                  {
                    "poster_path": "/pt57Kwkd2g2xdYFZKx3yCoz9Xim.jpg",
                    "adult": false,
                    "overview": "Richard Martin buys a gift, a new NDR-114 robot. The product is named Andrew by the youngest of the family is children. \"Bicentennial Man\" follows the life and times of Andrew, a robot purchased as a household appliance programmed to perform menial tasks. As Andrew begins to experience emotions and creative thought, the Martin family soon discovers they do not have an ordinary robot.",
                    "release_date": "1999-12-17",
                    "original_title": "Bicentennial Man",
                    "genre_ids": [
                      35,
                      878
                    ],
                    "id": 2277,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Bicentennial Man",
                    "backdrop_path": "/cbldDMSYdasHMewxzPqZH7sQGnz.jpg",
                    "popularity": 2.935055,
                    "vote_count": 471,
                    "video": false,
                    "vote_average": 6.68
                  }
                ],
                "name": "Bradley Whitford",
                "popularity": 1.863993
              },
              {
                "profile_path": null,
                "adult": false,
                "id": 1115995,
                "known_for": [
                  {
                    "poster_path": "/8ipBVqInnO3RjTyRf1aU4dE1SKD.jpg",
                    "adult": false,
                    "overview": "After losing contact with Earth, Astronaut Lee Miller becomes stranded in orbit alone aboard the International Space Station. As time passes and life support systems dwindle, Lee battles to maintain his sanity - and simply stay alive. His world is a claustrophobic and lonely existence, until he makes a strange discovery aboard the ship.",
                    "release_date": "2011-02-02",
                    "original_title": "Love",
                    "genre_ids": [
                      18,
                      878
                    ],
                    "id": 54320,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Love",
                    "backdrop_path": "/nt52LkPTb6NmHUJU8OY4XbujTHo.jpg",
                    "popularity": 1.408193,
                    "vote_count": 39,
                    "video": false,
                    "vote_average": 5.04
                  }
                ],
                "name": "Bradley Horne",
                "popularity": 1.7
              },
              {
                "profile_path": null,
                "adult": false,
                "id": 57188,
                "known_for": [
                  {
                    "poster_path": "/jIDxGI6G1ctTLuPY7tA248NXTyI.jpg",
                    "adult": false,
                    "overview": "The career of a disillusioned producer, who is desperate for a hit, is endangered when his star walks off the film set. Forced to think fast, the producer decides to digitally create an actress \"Simone\" to sub for the star--the first totally believable synthetic actress.",
                    "release_date": "2002-08-23",
                    "original_title": "S1m0ne",
                    "genre_ids": [
                      35,
                      18,
                      878
                    ],
                    "id": 9296,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "S1m0ne",
                    "backdrop_path": "/5ew8ofH2G9H3WqULFNjh6F9ZOlc.jpg",
                    "popularity": 1.672482,
                    "vote_count": 114,
                    "video": false,
                    "vote_average": 5.29
                  }
                ],
                "name": "Bradley Cramp",
                "popularity": 1.7
              },
              {
                "profile_path": null,
                "adult": false,
                "id": 1024456,
                "known_for": [
                  {
                    "poster_path": "/sTpx1khjPAyrgH2NUWhRcFHEAZO.jpg",
                    "adult": false,
                    "overview": "Funny, passionate, exciting, and smart: ‘Muse Of Fire’ will change the way you feel about Shakespeare forever. This unique feature documentary follows two actors, Giles Terera and Dan Poole, as they travel the world to find out everything they can about tackling the greatest writer of them all. Together they have directed and produced an inspiring film that aims to demystify and illuminate Shakespeare’s work for everyone: from actors, directors and students of all disciplines, right through to the? man on the street? Denmark with Jude Law, Baz Luhrmann in Hollywood, Prison in Berlin, and on the street with Mark Rylance. Think Shakespeare is boring? Think again!",
                    "release_date": "2013-09-26",
                    "original_title": "Muse of Fire",
                    "genre_ids": [
                      99
                    ],
                    "id": 232599,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Muse of Fire",
                    "backdrop_path": "/hOYbhniH4fkMo3rML3X1LkAMgSX.jpg",
                    "popularity": 1.166596,
                    "vote_count": 0,
                    "video": false,
                    "vote_average": 0
                  }
                ],
                "name": "Richard Bradley",
                "popularity": 1.7
              },
              {
                "profile_path": null,
                "adult": false,
                "id": 1065324,
                "known_for": [
                  {
                    "poster_path": "/nH7jqyYqLB0x2SDfrSAEkVt2LM2.jpg",
                    "adult": false,
                    "overview": "Artists and journalists love to invoke that holy word of American evil  Detroit  whenever they can. After all, what could be cooler than cars, Motown, and murder? And in the aftermath of the recent economic meltdown and auto industry bail-out Detroit has become shorthand for all that ails America. Detroit was once the seat of the greatest economic empire the world has ever seen; the auto industry; but now, Detroit is the face of failure. Failure not of the city is people, but of its leaders and of America itself. Rollin is the true story of the decline of the auto industry and the rise of the drug economy in Detroit.",
                    "release_date": "2010-01-01",
                    "original_title": "Rollin: The Decline of the Auto Industry and Rise of the Drug Economy in Detroit",
                    "genre_ids": [
                      99,
                      80
                    ],
                    "id": 117228,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Rollin: The Decline of the Auto Industry and Rise of the Drug Economy in Detroit",
                    "backdrop_path": null,
                    "popularity": 1.000857,
                    "vote_count": 0,
                    "video": false,
                    "vote_average": 0
                  },
                  {
                    "poster_path": "/3Pk8LyBu9jeLIFjogPlXLkCxFEI.jpg",
                    "adult": false,
                    "overview": "Eddie The Fat Man Jackson and Courtney The Field Marshal Brown were labeled Kingpins in an era where their names reigned supreme in Detroit. Accumulating more than a million dollars a month in heroin sales.",
                    "release_date": "2011-01-01",
                    "original_title": "Motown Mafia: The Story of Eddie Jackson and Courtney Brown",
                    "genre_ids": [
                      99
                    ],
                    "id": 298937,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Motown Mafia: The Story of Eddie Jackson and Courtney Brown",
                    "backdrop_path": null,
                    "popularity": 1.00167,
                    "vote_count": 0,
                    "video": false,
                    "vote_average": 0
                  },
                  {
                    "poster_path": "/y1BXYElkOoNXC7CWkYyWeNaPg3Y.jpg",
                    "adult": false,
                    "overview": "Documentary - Richer than Frank Lucas. More powerful than the Mafia. He was the biggest drug dealer in America. In 1973 he jumped bail and disappeared with 15 million dollars. He has never been seen again. -",
                    "release_date": "2012-01-01",
                    "original_title": "The Frank Matthews Story",
                    "genre_ids": [
                      99
                    ],
                    "id": 273699,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "The Frank Matthews Story",
                    "backdrop_path": null,
                    "popularity": 1.001929,
                    "vote_count": 0,
                    "video": false,
                    "vote_average": 0
                  }
                ],
                "name": "Alan Bradley",
                "popularity": 1.7
              },
              {
                "profile_path": null,
                "adult": false,
                "id": 1335010,
                "known_for": [
                  {
                    "poster_path": "/eQLThQmmiCyEoGDr1MdNGYOjU0M.jpg",
                    "adult": false,
                    "overview": "Why do 11,000 people die in America each year at the hands of gun violence? Talking heads yelling from every TV camera blame everything from Satan to video games. But are we that much different from many other countries? What sets us apart? How have we become both the master and victim of such enormous amounts of violence? This is not a film about gun control. It is a film about the fearful heart and soul of the United States, and the 280 million Americans lucky enough to have the right to a constitutionally protected Uzi. From a look at the Columbine High School security camera tapes to the home of Oscar-winning NRA President Charlton Heston, from a young man who makes homemade napalm with The Anarchist is Cookbook to the murder of a six-year-old girl by another six-year-old, Bowling for Columbine is a journey through America, through our past, hoping to discover why our pursuit of happiness is so riddled with violence.",
                    "release_date": "2002-10-09",
                    "original_title": "Bowling for Columbine",
                    "genre_ids": [
                      99
                    ],
                    "id": 1430,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Bowling for Columbine",
                    "backdrop_path": "/2Dy2nVSIbEv46mLHPNMpzhZYf85.jpg",
                    "popularity": 1.639589,
                    "vote_count": 206,
                    "video": false,
                    "vote_average": 7.13
                  }
                ],
                "name": "Mike Bradley",
                "popularity": 1.7
              },
              {
                "profile_path": "/o6TyiPASzAAVLmJB9CgT2DceZ0v.jpg",
                "adult": false,
                "id": 25530,
                "known_for": [
                  {
                    "poster_path": "/q1P6UHWdrtZNkmdnoprV0ILfLlr.jpg",
                    "adult": false,
                    "overview": "With global superpowers engaged in an increasingly hostile arms race, Superman leads a crusade to rid the world of nuclear weapons. But Lex Luthor, recently sprung from jail, is declaring war on the Man of Steel and his quest to save the planet. Using a strand of Superman is hair, Luthor synthesizes a powerful ally known as Nuclear Man and ignites an epic battle spanning Earth and space.",
                    "release_date": "1987-07-23",
                    "original_title": "Superman IV: The Quest for Peace",
                    "genre_ids": [
                      28,
                      12,
                      14,
                      878,
                      53
                    ],
                    "id": 11411,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Superman IV: The Quest for Peace",
                    "backdrop_path": "/usccdXtvKsEusqx82HkTjiyolJH.jpg",
                    "popularity": 1.787436,
                    "vote_count": 136,
                    "video": false,
                    "vote_average": 4.2
                  },
                  {
                    "poster_path": "/47LvV0urbkr8fEGEZHijD0GZReS.jpg",
                    "adult": false,
                    "overview": "The \"Memphis Belle\" is a World War II bomber, piloted by a young crew on dangerous bombing raids into Europe. The crew only have to make one more bombing raid before they have finished their duty and can go home. In the briefing before their last flight, the crew discover that the target for the day is Dresden, a heavily-defended city that invariably causes many Allied casualties",
                    "release_date": "1990-09-07",
                    "original_title": "Memphis Belle",
                    "genre_ids": [
                      18,
                      10752,
                      28
                    ],
                    "id": 12651,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Memphis Belle",
                    "backdrop_path": "/2a9Zt5H72xNsogJLLiBLA7ulofM.jpg",
                    "popularity": 1.837904,
                    "vote_count": 60,
                    "video": false,
                    "vote_average": 6.04
                  },
                  {
                    "poster_path": "/s2uZIa9ZrdKxJnpyiS83YDxwk5.jpg",
                    "adult": false,
                    "overview": "Jubei is a masterless ninja who travels the land alone, hiring his services to those with gold... or a worthy cause. His fearsome abilities have served him well, but a hideous plot to overthrow the government threatens to end his wandering ways and possibly his life.",
                    "release_date": "1993-06-05",
                    "original_title": "獣兵衛忍風帖",
                    "genre_ids": [
                      28,
                      16,
                      14
                    ],
                    "id": 14282,
                    "media_type": "movie",
                    "original_language": "ja",
                    "title": "Ninja Scroll",
                    "backdrop_path": "/lzMUucaNvgfWAUU7JxscKPeJLOq.jpg",
                    "popularity": 1.910932,
                    "vote_count": 58,
                    "video": false,
                    "vote_average": 7.21
                  }
                ],
                "name": "Bradley Lavelle",
                "popularity": 1.63
              },
              {
                "profile_path": null,
                "adult": false,
                "id": 8684,
                "known_for": [
                  {
                    "poster_path": "/qtBFrsEQ4oXW8sKvRxkKnYuPLg.jpg",
                    "adult": false,
                    "overview": "Peter Parker is going through a major identity crisis. Burned out from being Spider-Man, he decides to shelve his superhero alter ego, which leaves the city suffering in the wake of carnage left by the evil Doc Ock. In the meantime, Parker still ca not act on his feelings for Mary Jane Watson, a girl he is loved since childhood.",
                    "release_date": "2004-06-29",
                    "original_title": "Spider-Man 2",
                    "genre_ids": [
                      28,
                      12,
                      14
                    ],
                    "id": 558,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Spider-Man 2",
                    "backdrop_path": "/p2frIQykQPj3dXSYVOca60RQj9X.jpg",
                    "popularity": 2.056484,
                    "vote_count": 2471,
                    "video": false,
                    "vote_average": 6.37
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
                    "poster_path": "/fHho6JYYY0nRcETWSoeI19iZsNF.jpg",
                    "adult": false,
                    "overview": "Bourne is brought out of hiding once again by reporter Simon Ross who is trying to unveil Operation Blackbriar, an upgrade to Project Treadstone, in a series of newspaper columns. Information from the reporter stirs a new set of memories, and Bourne must finally uncover his dark past while dodging The Company is best efforts to eradicate him.",
                    "release_date": "2007-08-03",
                    "original_title": "The Bourne Ultimatum",
                    "genre_ids": [
                      28,
                      18,
                      9648,
                      53
                    ],
                    "id": 2503,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "The Bourne Ultimatum",
                    "backdrop_path": "/6WpDOqkZFmhNJ0rwuLJiZVKlZi1.jpg",
                    "popularity": 5.417989,
                    "vote_count": 1881,
                    "video": false,
                    "vote_average": 7.16
                  }
                ],
                "name": "Dan Bradley",
                "popularity": 1.551355
              },
              {
                "profile_path": "/l4vc0U4XQ7t07pqekPPVehzs0R.jpg",
                "adult": false,
                "id": 3039,
                "known_for": [
                  {
                    "poster_path": "/4p1N2Qrt8j0H8xMHMHvtRxv9weZ.jpg",
                    "adult": false,
                    "overview": "When Dr. Henry Jones Sr. suddenly goes missing while pursuing the Holy Grail, eminent archaeologist Indiana Jones must team up with Marcus Brody, Sallah, and Elsa Schneider to follow in his father is footsteps and stop the Nazis from recovering the power of eternal life.",
                    "release_date": "1989-05-24",
                    "original_title": "Indiana Jones and the Last Crusade",
                    "genre_ids": [
                      12,
                      28
                    ],
                    "id": 89,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Indiana Jones and the Last Crusade",
                    "backdrop_path": "/m3bEQlir8IWpmFocQBXWM5fkHri.jpg",
                    "popularity": 4.230106,
                    "vote_count": 1867,
                    "video": false,
                    "vote_average": 7.41
                  },
                  {
                    "poster_path": "/kedC0y75jdzByjuZNLOWIOtduNw.jpg",
                    "adult": false,
                    "overview": "The film is name comes from the song \"Stand By Me\" by Ben E. King from 1961. The song was also the theme song. This film was modeled from a novella by Stephen King called \"The Body\" and was the ninth filmed story from the author. The film tells the story of a group of 10-year-old friends out on their own and the trials and tribulation they are confronted with along the journey.",
                    "release_date": "1986-08-07",
                    "original_title": "Stand by Me",
                    "genre_ids": [
                      80,
                      18
                    ],
                    "id": 235,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Stand by Me",
                    "backdrop_path": "/abLeo89r15NBTFfosXveyosBrHE.jpg",
                    "popularity": 2.930453,
                    "vote_count": 642,
                    "video": false,
                    "vote_average": 7.44
                  },
                  {
                    "poster_path": "/4aMSIhvShIkDrhOsa0WL6KFwnpD.jpg",
                    "adult": false,
                    "overview": "It is been many years since Freddy Krueger is first victim, Nancy, came face-to-face with Freddy and his sadistic, evil ways. Now, Nancy is all grown up; she is put her frightening nightmares behind her and is helping teens cope with their dreams. Too bad Freddy is decided to herald his return by invading the kids dreams and scaring them into committing suicide.",
                    "release_date": "1987-02-27",
                    "original_title": "A Nightmare on Elm Street 3: Dream Warriors",
                    "genre_ids": [
                      27,
                      53
                    ],
                    "id": 10072,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "A Nightmare on Elm Street 3: Dream Warriors",
                    "backdrop_path": "/lNrbMhjhAQK9Hf4Nww7GoBezCMA.jpg",
                    "popularity": 2.156721,
                    "vote_count": 145,
                    "video": false,
                    "vote_average": 6.11
                  }
                ],
                "name": "Bradley Gregg",
                "popularity": 1.464252
              },
              {
                "profile_path": null,
                "adult": false,
                "id": 57871,
                "known_for": [
                  {
                    "poster_path": "/3PEAkZHa8ehfUkuKbzmQNRTTAAs.jpg",
                    "adult": false,
                    "overview": "Lloyd and Harry are two men whose stupidity is really indescribable. When Mary, a beautiful woman, loses an important suitcase with money before she leaves for Aspen, the two friends (who have found the suitcase) decide to return it to her. After some \"adventures\" they finally get to Aspen where, using the lost money they live it up and fight for Mary is heart.",
                    "release_date": "1994-12-16",
                    "original_title": "Dumb and Dumber",
                    "genre_ids": [
                      35
                    ],
                    "id": 8467,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Dumb and Dumber",
                    "backdrop_path": "/nJaVxQNC4pb6eYH5jv0UUokfH5X.jpg",
                    "popularity": 2.293606,
                    "vote_count": 903,
                    "video": false,
                    "vote_average": 6.52
                  },
                  {
                    "poster_path": "/kHPiEtmMVLyFiYrvrCwRU9wVXBU.jpg",
                    "adult": false,
                    "overview": "Haru, an orphaned American who washes ashore in Japan and is mistaken for the great White Ninja of legend. Raised among the finest Ninjas, Haru grows strong and big - very big. With the grace of all Three Stooges rolled into one body, Haru is an embarrassment to his clan. But when a beautiful blonde pleads for his help, Haru is given one dangerous, disastrously funny chance to prove himself.",
                    "release_date": "1997-01-17",
                    "original_title": "Beverly Hills Ninja",
                    "genre_ids": [
                      28,
                      35
                    ],
                    "id": 9622,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Beverly Hills Ninja",
                    "backdrop_path": "/6T81a9Jz32xyoOzNnfGE2evrgRf.jpg",
                    "popularity": 1.400806,
                    "vote_count": 64,
                    "video": false,
                    "vote_average": 5.34
                  },
                  {
                    "poster_path": "/u4Pfeuz52JPBdxwxpMpyMApWltB.jpg",
                    "adult": false,
                    "overview": "The life of Danny Wright, a salesman forever on the road, veers into dangerous and surreal territory when he wanders into a Mexican bar and meets a mysterious stranger, Julian, who is very likely a hit man. Their meeting sets off a chain of events that will change their lives forever, as Wright is suddenly thrust into a far-from-mundane existence that he takes to surprisingly well … once he gets acclimated to it.",
                    "release_date": "2005-05-12",
                    "original_title": "The Matador",
                    "genre_ids": [
                      28,
                      35,
                      80,
                      18,
                      53
                    ],
                    "id": 9515,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "The Matador",
                    "backdrop_path": "/gIDg3QGCfa0KE2f2VhozCldKafF.jpg",
                    "popularity": 1.325258,
                    "vote_count": 58,
                    "video": false,
                    "vote_average": 5.98
                  }
                ],
                "name": "Bradley Jenkel",
                "popularity": 1.42
              },
              {
                "profile_path": null,
                "adult": false,
                "id": 1539215,
                "known_for": [
                  {
                    "poster_path": "/s0C78plmx3dFcO3WMnoXCz56FiN.jpg",
                    "adult": false,
                    "overview": "A boy growing up in Dublin during the 1980s escapes his strained family life by starting a band to impress the mysterious girl he likes.",
                    "release_date": "2016-04-15",
                    "original_title": "Sing Street",
                    "genre_ids": [
                      10749,
                      18,
                      10402
                    ],
                    "id": 369557,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Sing Street",
                    "backdrop_path": "/9j4UaRypr19wz0BOofwvkPRm1Se.jpg",
                    "popularity": 3.343073,
                    "vote_count": 61,
                    "video": false,
                    "vote_average": 8.06
                  }
                ],
                "name": "Kyle Bradley Donaldson",
                "popularity": 2.015
              },
              {
                "profile_path": null,
                "adult": false,
                "id": 1290597,
                "known_for": [
                  {
                    "poster_path": "/kDpo6G7rYRHQ1bFhyLiJEW9ESPO.jpg",
                    "adult": false,
                    "overview": "City kid Ren MacCormack moves to a small town where rock n roll and dancing have been banned, and his rebellious spirit shakes up the populace.",
                    "release_date": "2011-10-06",
                    "original_title": "Footloose",
                    "genre_ids": [
                      18,
                      10402,
                      10749
                    ],
                    "id": 68817,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Footloose",
                    "backdrop_path": "/cH19PJpfgxpVDr4UYOH3ARtgb7z.jpg",
                    "popularity": 2.288659,
                    "vote_count": 221,
                    "video": false,
                    "vote_average": 6.46
                  }
                ],
                "name": "Taylor Bradley",
                "popularity": 1.315
              },
              {
                "profile_path": "/rslnwlRCeVFwV3lzqKtdl3RYUqr.jpg",
                "adult": false,
                "id": 17778,
                "known_for": [
                  {
                    "poster_path": "/ngfNzb9w2ZXWHK2KaSCSoemJmqC.jpg",
                    "adult": false,
                    "overview": "Smilla Jaspersen, half Danish, half Greenlander, attempts to understand the death of a small boy who falls from the roof of her apartment building.",
                    "release_date": "1997-02-13",
                    "original_title": "Smilla is Sense of Snow",
                    "genre_ids": [
                      28,
                      18,
                      9648,
                      53
                    ],
                    "id": 9311,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Smilla is Sense of Snow",
                    "backdrop_path": "/xoS98USUf4KMwnEF84FPfl0Uzrq.jpg",
                    "popularity": 1.092857,
                    "vote_count": 26,
                    "video": false,
                    "vote_average": 6.71
                  },
                  {
                    "poster_path": "/vZSaO5mmX3NWhW7E6tve0zGV5Bs.jpg",
                    "adult": false,
                    "overview": "In this true story, Veronica Guerin is an investigative reporter for an Irish newspaper. As the drug trade begins to bleed into the mainstream, Guerin decides to take on and expose those responsible. Beginning at the bottom with addicts, Guerin then gets in touch with John Traynor, a paranoid informant. Not without some prodding, Traynor leads her to John Gilligan, the ruthless head of the operation, who does not take kindly to Guerin is nosing.",
                    "release_date": "2003-07-11",
                    "original_title": "Veronica Guerin",
                    "genre_ids": [
                      18,
                      80,
                      53
                    ],
                    "id": 10629,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "Veronica Guerin",
                    "backdrop_path": "/dhFZB9KDqENq58p5h74ORn2BI5F.jpg",
                    "popularity": 1.991538,
                    "vote_count": 22,
                    "video": false,
                    "vote_average": 6.61
                  },
                  {
                    "poster_path": "/w0WvlhjBRKMKcmaMoca57ofIvCH.jpg",
                    "adult": false,
                    "overview": "A waitress falls for a handsome customer who seduces her, her two sisters, her brother, and her brother is girlfriend.",
                    "release_date": "2000-01-28",
                    "original_title": "About Adam",
                    "genre_ids": [
                      35,
                      10749
                    ],
                    "id": 18168,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "About Adam",
                    "backdrop_path": "/mengsEo2pGl2PhBtLJogoPEw9pP.jpg",
                    "popularity": 1.763677,
                    "vote_count": 19,
                    "video": false,
                    "vote_average": 4.87
                  }
                ],
                "name": "Charlotte Bradley",
                "popularity": 1.315
              },
              {
                "profile_path": null,
                "adult": false,
                "id": 1090536,
                "known_for": [
                  {
                    "poster_path": "/AuzCFMK14Ss4mkdh6jWAd3qQ0Nm.jpg",
                    "adult": false,
                    "overview": "The opening ceremony of the London 2012 Paralympic games.",
                    "release_date": "2012-08-29",
                    "original_title": "London 2012: Paralympics Opening Ceremony",
                    "genre_ids": [],
                    "id": 129843,
                    "media_type": "movie",
                    "original_language": "en",
                    "title": "London 2012: Paralympics Opening Ceremony",
                    "backdrop_path": "/yWyzdM8yJCPIzxBC4wiCow4ROZk.jpg",
                    "popularity": 1.073085,
                    "vote_count": 0,
                    "video": false,
                    "vote_average": 0
                  }
                ],
                "name": "Bradley Hemmings",
                "popularity": 1.273
              }
            ],
            "total_results": 363,
            "total_pages": 19
          }', true);
    }

    public function mockGetTvShowsResponse(): array
    {
        return json_decode('{
            "page": 1,
            "results": [
              {
                "poster_path": "/jIhL6mlT7AblhbHJgEoiBIOUVl1.jpg",
                "popularity": 29.780826,
                "id": 1399,
                "backdrop_path": "/mUkuc2wyV9dHLG0D0Loaw5pO2s8.jpg",
                "vote_average": 7.91,
                "overview": "Seven noble families fight for control of the mythical land of Westeros. Friction between the houses leads to full-scale war. All while a very ancient evil awakens in the farthest north. Amidst the war, a neglected military order of misfits, the Night is Watch, is all that stands between the realms of men and icy horrors beyond.",
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
              }
            ],
            "total_results": 1,
            "total_pages": 1
          }', true);
    }
}
