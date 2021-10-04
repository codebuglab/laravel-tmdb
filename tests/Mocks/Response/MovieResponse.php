<?php

namespace CodeBugLab\Tmdb\Tests\Mocks\Response;

trait MovieResponse
{
    public function mockGetDetailsResponse(): array
    {
        return json_decode('{
            "adult": false,
            "backdrop_path": "/fCayJrkfRaCRCTh8GqN30f8oyQF.jpg",
            "belongs_to_collection": null,
            "budget": 63000000,
            "genres": [
              {
                "id": 18,
                "name": "Drama"
              }
            ],
            "homepage": "",
            "id": 550,
            "imdb_id": "tt0137523",
            "original_language": "en",
            "original_title": "Fight Club",
            "overview": "A ticking-time-bomb insomniac and a slippery soap salesman channel primal male aggression into a shocking new form of therapy. Their concept catches on, with underground \"fight clubs\" forming in every town, until an eccentric gets in the way and ignites an out-of-control spiral toward oblivion.",
            "popularity": 0.5,
            "poster_path": null,
            "production_companies": [
              {
                "id": 508,
                "logo_path": "/7PzJdsLGlR7oW4J0J5Xcd0pHGRg.png",
                "name": "Regency Enterprises",
                "origin_country": "US"
              },
              {
                "id": 711,
                "logo_path": null,
                "name": "Fox 2000 Pictures",
                "origin_country": ""
              },
              {
                "id": 20555,
                "logo_path": null,
                "name": "Taurus Film",
                "origin_country": ""
              },
              {
                "id": 54050,
                "logo_path": null,
                "name": "Linson Films",
                "origin_country": ""
              },
              {
                "id": 54051,
                "logo_path": null,
                "name": "Atman Entertainment",
                "origin_country": ""
              },
              {
                "id": 54052,
                "logo_path": null,
                "name": "Knickerbocker Films",
                "origin_country": ""
              },
              {
                "id": 25,
                "logo_path": "/qZCc1lty5FzX30aOCVRBLzaVmcp.png",
                "name": "20th Century Fox",
                "origin_country": "US"
              }
            ],
            "production_countries": [
              {
                "iso_3166_1": "US",
                "name": "United States of America"
              }
            ],
            "release_date": "1999-10-12",
            "revenue": 100853753,
            "runtime": 139,
            "spoken_languages": [
              {
                "iso_639_1": "en",
                "name": "English"
              }
            ],
            "status": "Released",
            "tagline": "How much can you know about yourself if you have never been in a fight?",
            "title": "Fight Club",
            "video": false,
            "vote_average": 7.8,
            "vote_count": 3439
          }', true);
    }

    public function mockGetAlternativeTitlesResponse(): array
    {
        return json_decode('{
            "id": 550,
            "titles": [
              {
                "iso_3166_1": "AR",
                "title": "El club de la pelea",
                "type": ""
              },
              {
                "iso_3166_1": "RS",
                "title": "Borilački klub",
                "type": ""
              },
              {
                "iso_3166_1": "HU",
                "title": "Harcosok Klubbja",
                "type": ""
              },
              {
                "iso_3166_1": "IL",
                "title": "Moadon Krav",
                "type": "romanization"
              },
              {
                "iso_3166_1": "BR",
                "title": "Clube da Luta",
                "type": ""
              },
              {
                "iso_3166_1": "US",
                "title": "Fight Club",
                "type": ""
              },
              {
                "iso_3166_1": "HN",
                "title": "El Club de la Pelea",
                "type": ""
              },
              {
                "iso_3166_1": "KR",
                "title": "파이트 클럽",
                "type": ""
              },
              {
                "iso_3166_1": "JP",
                "title": "ファイト・クラブ",
                "type": ""
              },
              {
                "iso_3166_1": "CN",
                "title": "鬥陣俱樂部",
                "type": ""
              },
              {
                "iso_3166_1": "RU",
                "title": "Бойцовский клуб",
                "type": ""
              }
            ]
          }', true);
    }

    public function mockGetChangesResponse(): array
    {
        return json_decode('{
            "changes": [
              {
                "key": "overview",
                "items": [
                  {
                    "id": "57c464ef5dbf5b15a6000007",
                    "action": "updated",
                    "time": "2016-08-29 16:38:07 UTC",
                    "iso_639_1": "en",
                    "value": "When Tony Stark tries to jumpstart a dormant peacekeeping program, things go awry and Earth’s Mightiest Heroes are put to the ultimate test as the fate of the planet hangs in the balance. As the villainous Ultron emerges, it is up to The Avengers to stop him from enacting his terrible plans, and soon uneasy alliances and unexpected action pave the way for an epic and unique global adventure!",
                    "original_value": "When Tony Stark tries to jumpstart a dormant peacekeeping program, things go awry and Earth’s Mightiest Heroes are put to the ultimate test as the fate of the planet hangs in the balance. As the villainous Ultron emerges, it is up to The Avengers to stop him from enacting his terrible plans, and soon uneasy alliances and unexpected action pave the way for an epic and unique global adventure."
                  }
                ]
              }
            ]
          }', true);
    }

    public function mockGetCreditsResponse(): array
    {
        return json_decode('{
            "id": 550,
            "cast": [
              {
                "adult": false,
                "gender": 2,
                "id": 819,
                "known_for_department": "Acting",
                "name": "Edward Norton",
                "original_name": "Edward Norton",
                "popularity": 7.861,
                "profile_path": "/5XBzD5WuTyVQZeS4VI25z2moMeY.jpg",
                "cast_id": 4,
                "character": "The Narrator",
                "credit_id": "52fe4250c3a36847f80149f3",
                "order": 0
              },
              {
                "adult": false,
                "gender": 2,
                "id": 287,
                "known_for_department": "Acting",
                "name": "Brad Pitt",
                "original_name": "Brad Pitt",
                "popularity": 20.431,
                "profile_path": "/cckcYc2v0yh1tc9QjRelptcOBko.jpg",
                "cast_id": 5,
                "character": "Tyler Durden",
                "credit_id": "52fe4250c3a36847f80149f7",
                "order": 1
              },
              {
                "adult": false,
                "gender": 1,
                "id": 1283,
                "known_for_department": "Acting",
                "name": "Helena Bonham Carter",
                "original_name": "Helena Bonham Carter",
                "popularity": 14.399,
                "profile_path": "/mW1NolxQmPE16Zg6zuWyZlFgOwL.jpg",
                "cast_id": 6,
                "character": "Marla Singer",
                "credit_id": "52fe4250c3a36847f80149fb",
                "order": 2
              },
              {
                "adult": false,
                "gender": 2,
                "id": 7470,
                "known_for_department": "Acting",
                "name": "Meat Loaf",
                "original_name": "Meat Loaf",
                "popularity": 2.67,
                "profile_path": "/k9tJGdMkzOe17YH2ZCQjNnX5YLz.jpg",
                "cast_id": 7,
                "character": "Robert \"Bob\" Paulson",
                "credit_id": "52fe4250c3a36847f80149ff",
                "order": 3
              },
              {
                "adult": false,
                "gender": 2,
                "id": 7499,
                "known_for_department": "Acting",
                "name": "Jared Leto",
                "original_name": "Jared Leto",
                "popularity": 7.845,
                "profile_path": "/ca3x0OfIKbJppZh8S1Alx3GfUZO.jpg",
                "cast_id": 30,
                "character": "Angel Face",
                "credit_id": "52fe4250c3a36847f8014a51",
                "order": 4
              },
              {
                "adult": false,
                "gender": 2,
                "id": 7471,
                "known_for_department": "Acting",
                "name": "Zach Grenier",
                "original_name": "Zach Grenier",
                "popularity": 2.829,
                "profile_path": "/fSyQKZO39sUsqY283GXiScOg3Hi.jpg",
                "cast_id": 31,
                "character": "Richard Chesler",
                "credit_id": "52fe4250c3a36847f8014a55",
                "order": 5
              },
              {
                "adult": false,
                "gender": 2,
                "id": 7497,
                "known_for_department": "Acting",
                "name": "Holt McCallany",
                "original_name": "Holt McCallany",
                "popularity": 4.303,
                "profile_path": "/a5ax2ICLrV6l0T74OSFvzssCQyQ.jpg",
                "cast_id": 32,
                "character": "The Mechanic",
                "credit_id": "52fe4250c3a36847f8014a59",
                "order": 6
              },
              {
                "adult": false,
                "gender": 2,
                "id": 7498,
                "known_for_department": "Acting",
                "name": "Eion Bailey",
                "original_name": "Eion Bailey",
                "popularity": 5.407,
                "profile_path": "/hKqfGq1sPhZdQOlto0bS3igFZdP.jpg",
                "cast_id": 33,
                "character": "Ricky",
                "credit_id": "52fe4250c3a36847f8014a5d",
                "order": 7
              },
              {
                "adult": false,
                "gender": 2,
                "id": 7472,
                "known_for_department": "Acting",
                "name": "Richmond Arquette",
                "original_name": "Richmond Arquette",
                "popularity": 2.797,
                "profile_path": "/qpKZQn71Fwk6Gm1WZHL9IpVmcyO.jpg",
                "cast_id": 34,
                "character": "Intern",
                "credit_id": "52fe4250c3a36847f8014a61",
                "order": 8
              },
              {
                "adult": false,
                "gender": 2,
                "id": 7219,
                "known_for_department": "Acting",
                "name": "David Andrews",
                "original_name": "David Andrews",
                "popularity": 4.348,
                "profile_path": "/36LEerIIN7gpG52mM3Ier7YWDbh.jpg",
                "cast_id": 35,
                "character": "Thomas",
                "credit_id": "52fe4250c3a36847f8014a65",
                "order": 9
              },
              {
                "adult": false,
                "gender": 1,
                "id": 68277,
                "known_for_department": "Acting",
                "name": "Christina Cabot",
                "original_name": "Christina Cabot",
                "popularity": 1.672,
                "profile_path": "/h1vwbOfITSvDvDq8E9MVvWqMYSr.jpg",
                "cast_id": 36,
                "character": "Group Leader",
                "credit_id": "52fe4250c3a36847f8014a69",
                "order": 10
              },
              {
                "adult": false,
                "gender": 2,
                "id": 956719,
                "known_for_department": "Acting",
                "name": "Tim DeZarn",
                "original_name": "Tim DeZarn",
                "popularity": 2.687,
                "profile_path": "/AmY8QpXyWUCOX4SewTVytjqD8rz.jpg",
                "cast_id": 37,
                "character": "Inspector Bird",
                "credit_id": "52fe4250c3a36847f8014a6d",
                "order": 11
              },
              {
                "adult": false,
                "gender": 2,
                "id": 59285,
                "known_for_department": "Acting",
                "name": "Ezra Buzzington",
                "original_name": "Ezra Buzzington",
                "popularity": 2.254,
                "profile_path": "/j3kJRKgQdHAMXvJUtPHXJsGGW5X.jpg",
                "cast_id": 38,
                "character": "Inspector Dent",
                "credit_id": "52fe4250c3a36847f8014a71",
                "order": 12
              },
              {
                "adult": false,
                "gender": 2,
                "id": 17449,
                "known_for_department": "Acting",
                "name": "Bob Stephenson",
                "original_name": "Bob Stephenson",
                "popularity": 2.695,
                "profile_path": "/AczLnt4baxBT4gqSroSjCqD7S9D.jpg",
                "cast_id": 39,
                "character": "Airport Security Officer",
                "credit_id": "52fe4250c3a36847f8014a75",
                "order": 13
              },
              {
                "adult": false,
                "gender": 2,
                "id": 56112,
                "known_for_department": "Acting",
                "name": "David Lee Smith",
                "original_name": "David Lee Smith",
                "popularity": 3.371,
                "profile_path": "/hktppGThiKu30lcGW9CicNuinhc.jpg",
                "cast_id": 40,
                "character": "Walter",
                "credit_id": "52fe4250c3a36847f8014a79",
                "order": 14
              },
              {
                "adult": false,
                "gender": 2,
                "id": 42824,
                "known_for_department": "Acting",
                "name": "Carl Ciarfalio",
                "original_name": "Carl Ciarfalio",
                "popularity": 0.732,
                "profile_path": "/yADROfK7uJkmd8p3GyjxH8WZqRL.jpg",
                "cast_id": 42,
                "character": "Lou is Body Guard",
                "credit_id": "52fe4250c3a36847f8014a81",
                "order": 15
              },
              {
                "adult": false,
                "gender": 2,
                "id": 40277,
                "known_for_department": "Writing",
                "name": "Stuart Blumberg",
                "original_name": "Stuart Blumberg",
                "popularity": 1.4,
                "profile_path": null,
                "cast_id": 43,
                "character": "Car Salesman",
                "credit_id": "52fe4251c3a36847f8014a85",
                "order": 16
              },
              {
                "adult": false,
                "gender": 2,
                "id": 122805,
                "known_for_department": "Acting",
                "name": "Mark Fite",
                "original_name": "Mark Fite",
                "popularity": 1.435,
                "profile_path": "/qUbqKE14GAUdRhYqNcGzDkt1yi9.jpg",
                "cast_id": 44,
                "character": "Second Man at Auto Shop",
                "credit_id": "52fe4251c3a36847f8014a89",
                "order": 17
              },
              {
                "adult": false,
                "gender": 2,
                "id": 35521,
                "known_for_department": "Acting",
                "name": "Matt Winston",
                "original_name": "Matt Winston",
                "popularity": 2.556,
                "profile_path": "/et38vhCb9y8yGleMRNY2j4nDDyr.jpg",
                "cast_id": 45,
                "character": "Seminary Student",
                "credit_id": "52fe4251c3a36847f8014a8d",
                "order": 18
              },
              {
                "adult": false,
                "gender": 1,
                "id": 1224996,
                "known_for_department": "Acting",
                "name": "Lauren Sánchez",
                "original_name": "Lauren Sánchez",
                "popularity": 1.4,
                "profile_path": "/ahOwHtOHrFZUoJDOd7VvF7RPiL.jpg",
                "cast_id": 46,
                "character": "Channel 4 Reporter",
                "credit_id": "52fe4251c3a36847f8014a91",
                "order": 19
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1219497,
                "known_for_department": "Acting",
                "name": "Thom Gossom Jr.",
                "original_name": "Thom Gossom Jr.",
                "popularity": 1.22,
                "profile_path": "/plFARWSTQ021TOOC5gpChhiUIVu.jpg",
                "cast_id": 41,
                "character": "Detective Stern",
                "credit_id": "52fe4250c3a36847f8014a7d",
                "order": 20
              },
              {
                "adult": false,
                "gender": 2,
                "id": 1226835,
                "known_for_department": "Acting",
                "name": "Markus Redmond",
                "original_name": "Markus Redmond",
                "popularity": 1.166,
                "profile_path": null,
                "cast_id": 52,
                "character": "Detective Kevin",
                "credit_id": "52fe4251c3a36847f8014aa9",
                "order": 21
              },
              {
                "adult": false,
                "gender": 2,
                "id": 41352,
                "known_for_department": "Acting",
                "name": "Van Quattro",
                "original_name": "Van Quattro",
                "popularity": 1.566,
                "profile_path": null,
                "cast_id": 51,
                "character": "Detective Andrew",
                "credit_id": "52fe4251c3a36847f8014aa5",
                "order": 22
              },
              {
                "adult": false,
                "gender": 0,
                "id": 177175,
                "known_for_department": "Acting",
                "name": "Michael Girardin",
                "original_name": "Michael Girardin",
                "popularity": 1.096,
                "profile_path": null,
                "cast_id": 84,
                "character": "Detective Walker",
                "credit_id": "588651eac3a3684628003490",
                "order": 23
              },
              {
                "adult": false,
                "gender": 2,
                "id": 109100,
                "known_for_department": "Acting",
                "name": "David Jean Thomas",
                "original_name": "David Jean Thomas",
                "popularity": 1.42,
                "profile_path": null,
                "cast_id": 47,
                "character": "Policeman",
                "credit_id": "52fe4251c3a36847f8014a95",
                "order": 24
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1221838,
                "known_for_department": "Acting",
                "name": "Paul Carafotes",
                "original_name": "Paul Carafotes",
                "popularity": 2.188,
                "profile_path": null,
                "cast_id": 48,
                "character": "Salvator - Winking Bartender",
                "credit_id": "52fe4251c3a36847f8014a99",
                "order": 25
              },
              {
                "adult": false,
                "gender": 2,
                "id": 145531,
                "known_for_department": "Acting",
                "name": "Christopher John Fields",
                "original_name": "Christopher John Fields",
                "popularity": 1.817,
                "profile_path": "/3ASDmbBZQnk526pPeNtb8LOJXBX.jpg",
                "cast_id": 49,
                "character": "Proprietor of Dry Cleaners",
                "credit_id": "52fe4251c3a36847f8014a9d",
                "order": 26
              },
              {
                "adult": false,
                "gender": 2,
                "id": 9291,
                "known_for_department": "Acting",
                "name": "Michael Shamus Wiles",
                "original_name": "Michael Shamus Wiles",
                "popularity": 1.62,
                "profile_path": "/niY4gYqAUjmnU4KRiguxpsKliWA.jpg",
                "cast_id": 50,
                "character": "Bartender in Halo",
                "credit_id": "52fe4251c3a36847f8014aa1",
                "order": 27
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1129738,
                "known_for_department": "Acting",
                "name": "George Maguire",
                "original_name": "George Maguire",
                "popularity": 0.98,
                "profile_path": null,
                "cast_id": 59,
                "character": "Group Leader",
                "credit_id": "581fce4c92514168ad00899d",
                "order": 28
              },
              {
                "adult": false,
                "gender": 1,
                "id": 1317693,
                "known_for_department": "Acting",
                "name": "Eugenie Bondurant",
                "original_name": "Eugenie Bondurant",
                "popularity": 0.739,
                "profile_path": "/j5Pvkb319OjzOytxbeEHnIzFKii.jpg",
                "cast_id": 60,
                "character": "Weeping Woman",
                "credit_id": "581fce7fc3a368555600847b",
                "order": 29
              },
              {
                "adult": false,
                "gender": 2,
                "id": 202080,
                "known_for_department": "Acting",
                "name": "Sydney \"Big Dawg\" Colston",
                "original_name": "Sydney \"Big Dawg\" Colston",
                "popularity": 1.4,
                "profile_path": "/tdzVh7pstj6rcppqbBOX0KA7mX9.jpg",
                "cast_id": 61,
                "character": "Speaker",
                "credit_id": "581fcf3a92514168ad008b09",
                "order": 30
              },
              {
                "adult": false,
                "gender": 1,
                "id": 7473,
                "known_for_department": "Acting",
                "name": "Rachel Singer",
                "original_name": "Rachel Singer",
                "popularity": 1.4,
                "profile_path": "/o4Hzvy1VRa3IILMrI45Ia08pstK.jpg",
                "cast_id": 62,
                "character": "Chloe",
                "credit_id": "581fcf5d92514168aa008b9e",
                "order": 31
              },
              {
                "adult": false,
                "gender": 1,
                "id": 1172435,
                "known_for_department": "Acting",
                "name": "Christie Cronenweth",
                "original_name": "Christie Cronenweth",
                "popularity": 1.4,
                "profile_path": null,
                "cast_id": 63,
                "character": "Airline Attendant",
                "credit_id": "581fd16ec3a36855530096a4",
                "order": 32
              },
              {
                "adult": false,
                "gender": 1,
                "id": 1705289,
                "known_for_department": "Acting",
                "name": "Dierdre Downing-Jackson",
                "original_name": "Dierdre Downing-Jackson",
                "popularity": 0.6,
                "profile_path": null,
                "cast_id": 64,
                "character": "Businesswoman on Plane",
                "credit_id": "581fd575c3a36855630075c4",
                "order": 33
              },
              {
                "adult": false,
                "gender": 2,
                "id": 62846,
                "known_for_department": "Acting",
                "name": "Charlie Dell",
                "original_name": "Charlie Dell",
                "popularity": 1.96,
                "profile_path": null,
                "cast_id": 65,
                "character": "Doorman",
                "credit_id": "581fd6bcc3a3685556008e6b",
                "order": 34
              },
              {
                "adult": false,
                "gender": 2,
                "id": 530040,
                "known_for_department": "Acting",
                "name": "Rob Lanza",
                "original_name": "Rob Lanza",
                "popularity": 1.096,
                "profile_path": null,
                "cast_id": 66,
                "character": "Man in Suit",
                "credit_id": "581fd6e192514168ad0093bc",
                "order": 35
              },
              {
                "adult": false,
                "gender": 2,
                "id": 137425,
                "known_for_department": "Acting",
                "name": "Joel Bissonnette",
                "original_name": "Joel Bissonnette",
                "popularity": 1.22,
                "profile_path": "/kOvh6paITOTaE7H1NnuTB01DiVV.jpg",
                "cast_id": 67,
                "character": "Food Court Maître D",
                "credit_id": "581fd956c3a368554d009932",
                "order": 36
              },
              {
                "adult": false,
                "gender": 2,
                "id": 175120,
                "known_for_department": "Acting",
                "name": "Evan Mirand",
                "original_name": "Evan Mirand",
                "popularity": 2.588,
                "profile_path": null,
                "cast_id": 68,
                "character": "Steph",
                "credit_id": "581fda0292514168af009523",
                "order": 37
              },
              {
                "adult": false,
                "gender": 2,
                "id": 1744132,
                "known_for_department": "Acting",
                "name": "Robby Robinson",
                "original_name": "Robby Robinson",
                "popularity": 1.4,
                "profile_path": null,
                "cast_id": 69,
                "character": "Next Month is Opponent",
                "credit_id": "58864e17925141107e0008b4",
                "order": 38
              },
              {
                "adult": false,
                "gender": 2,
                "id": 168924,
                "known_for_department": "Acting",
                "name": "Lou Beatty Jr.",
                "original_name": "Lou Beatty Jr.",
                "popularity": 1.4,
                "profile_path": null,
                "cast_id": 70,
                "character": "Cop at Marla is Building",
                "credit_id": "58864e2fc3a3684480002f96",
                "order": 39
              },
              {
                "adult": false,
                "gender": 0,
                "id": 157938,
                "known_for_department": "Acting",
                "name": "Valerie Bickford",
                "original_name": "Valerie Bickford",
                "popularity": 1.4,
                "profile_path": null,
                "cast_id": 71,
                "character": "Susan - Comsetics Buyer",
                "credit_id": "58864fa392514113ea00076f",
                "order": 40
              },
              {
                "adult": false,
                "gender": 0,
                "id": 7500,
                "known_for_department": "Acting",
                "name": "Peter Iacangelo",
                "original_name": "Peter Iacangelo",
                "popularity": 1.727,
                "profile_path": null,
                "cast_id": 72,
                "character": "Lou",
                "credit_id": "58864fdac3a36845e6002f78",
                "order": 41
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1744135,
                "known_for_department": "Acting",
                "name": "Todd Peirce",
                "original_name": "Todd Peirce",
                "popularity": 1.38,
                "profile_path": null,
                "cast_id": 73,
                "character": "First Man at Auto Shop",
                "credit_id": "5886500492514113ea000859",
                "order": 42
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1744137,
                "known_for_department": "Acting",
                "name": "Joon Kim",
                "original_name": "Joon Kim",
                "popularity": 1.128,
                "profile_path": null,
                "cast_id": 74,
                "character": "Raymond K. Hessel",
                "credit_id": "58865057c3a36843c80032d9",
                "order": 43
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1636371,
                "known_for_department": "Crew",
                "name": "Bennie Moore",
                "original_name": "Bennie Moore",
                "popularity": 1.4,
                "profile_path": null,
                "cast_id": 75,
                "character": "Bus Driver with Broken Nose",
                "credit_id": "588650819251411bb4000042",
                "order": 44
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1174793,
                "known_for_department": "Acting",
                "name": "Pat McNamara",
                "original_name": "Pat McNamara",
                "popularity": 1.4,
                "profile_path": null,
                "cast_id": 76,
                "character": "Commissioner Jacobs",
                "credit_id": "588650a5925141125e000bcd",
                "order": 45
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1744138,
                "known_for_department": "Acting",
                "name": "Tyrone R. Livingston",
                "original_name": "Tyrone R. Livingston",
                "popularity": 1.4,
                "profile_path": null,
                "cast_id": 77,
                "character": "Banquet Speaker",
                "credit_id": "588650b7c3a3684628003283",
                "order": 46
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1744139,
                "known_for_department": "Acting",
                "name": "Owen Masterson",
                "original_name": "Owen Masterson",
                "popularity": 1.532,
                "profile_path": "/1LKLNASM94TIEUlDpPqdMXywDQl.jpg",
                "cast_id": 78,
                "character": "Airport Valet",
                "credit_id": "588650cb925141107e000e39",
                "order": 47
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1744140,
                "known_for_department": "Acting",
                "name": "Anderson Bourell",
                "original_name": "Anderson Bourell",
                "popularity": 1.38,
                "profile_path": null,
                "cast_id": 79,
                "character": "Bruised Bar Patron #1",
                "credit_id": "58865114c3a36843020036a1",
                "order": 48
              },
              {
                "adult": false,
                "gender": 2,
                "id": 63537,
                "known_for_department": "Acting",
                "name": "Scotch Ellis Loring",
                "original_name": "Scotch Ellis Loring",
                "popularity": 1.4,
                "profile_path": null,
                "cast_id": 80,
                "character": "Bruised Bar Patron #2",
                "credit_id": "5886512c92514116ac000756",
                "order": 49
              },
              {
                "adult": false,
                "gender": 1,
                "id": 170315,
                "known_for_department": "Acting",
                "name": "Andi Carnick",
                "original_name": "Andi Carnick",
                "popularity": 1.954,
                "profile_path": null,
                "cast_id": 81,
                "character": "Hotel Desk Clerk",
                "credit_id": "5886514992514113ea000ae7",
                "order": 50
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1707776,
                "known_for_department": "Acting",
                "name": "Edward Kowalczyk",
                "original_name": "Edward Kowalczyk",
                "popularity": 0.694,
                "profile_path": null,
                "cast_id": 82,
                "character": "Waiter at Clifton is",
                "credit_id": "588651a192514116ac00088a",
                "order": 51
              },
              {
                "adult": false,
                "gender": 2,
                "id": 7140,
                "known_for_department": "Acting",
                "name": "Leonard Termo",
                "original_name": "Leonard Termo",
                "popularity": 1.702,
                "profile_path": "/9QummJWlDgiEMClBTGyMfF6nyMX.jpg",
                "cast_id": 83,
                "character": "Desk Sergeant",
                "credit_id": "588651b59251411158000f3f",
                "order": 52
              },
              {
                "adult": false,
                "gender": 0,
                "id": 74507,
                "known_for_department": "Acting",
                "name": "Michael Arturo",
                "original_name": "Michael Arturo",
                "popularity": 0.98,
                "profile_path": null,
                "cast_id": 85,
                "character": "BMW Salesman (uncredited)",
                "credit_id": "5886520ec3a36843c80035ea",
                "order": 53
              },
              {
                "adult": false,
                "gender": 2,
                "id": 1383838,
                "known_for_department": "Acting",
                "name": "Greg Bronson",
                "original_name": "Greg Bronson",
                "popularity": 1.128,
                "profile_path": "/hFIryLi9bz1hUbb1gZ3vbKWNfxu.jpg",
                "cast_id": 86,
                "character": "Fight Spectator (uncredited)",
                "credit_id": "58865232c3a3684628003526",
                "order": 54
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1194120,
                "known_for_department": "Acting",
                "name": "Matt Cinquanta",
                "original_name": "Matt Cinquanta",
                "popularity": 0.6,
                "profile_path": null,
                "cast_id": 87,
                "character": "Fighter (uncredited)",
                "credit_id": "58865242925141107e00117f",
                "order": 55
              },
              {
                "adult": false,
                "gender": 2,
                "id": 13925,
                "known_for_department": "Acting",
                "name": "Paul Dillon",
                "original_name": "Paul Dillon",
                "popularity": 1.312,
                "profile_path": "/tnCzILAe8EBBjPwADXUrzs9ESzD.jpg",
                "cast_id": 89,
                "character": "Irvin (uncredited)",
                "credit_id": "58865265c3a3684628003584",
                "order": 57
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1744142,
                "known_for_department": "Acting",
                "name": "Tom Falzone",
                "original_name": "Tom Falzone",
                "popularity": 0.6,
                "profile_path": null,
                "cast_id": 90,
                "character": "Vomiting Fight Spectator (uncredited)",
                "credit_id": "5886527a9251411362000e93",
                "order": 58
              },
              {
                "adult": false,
                "gender": 0,
                "id": 552271,
                "known_for_department": "Acting",
                "name": "Eddie Hargitay",
                "original_name": "Eddie Hargitay",
                "popularity": 1.214,
                "profile_path": null,
                "cast_id": 91,
                "character": "Chanting Fighter (uncredited)",
                "credit_id": "5886529f92514113ea000df8",
                "order": 59
              },
              {
                "adult": false,
                "gender": 0,
                "id": 94561,
                "known_for_department": "Acting",
                "name": "Phil Hawn",
                "original_name": "Phil Hawn",
                "popularity": 1.4,
                "profile_path": "/7NGVxTRGKjxYRgekHv7NF9kNVzM.jpg",
                "cast_id": 92,
                "character": "Banquet Guest (uncredited)",
                "credit_id": "588652b5c3a3684480003740",
                "order": 60
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1223916,
                "known_for_department": "Acting",
                "name": "Bruce Holman",
                "original_name": "Bruce Holman",
                "popularity": 1.166,
                "profile_path": "/1xhSV69K8wiXFECYZQ6HHtKU6qB.jpg",
                "cast_id": 93,
                "character": "Waiter in Bridgeworth Suites Corporate Video (uncredited)",
                "credit_id": "588652d892514111a900118a",
                "order": 61
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1744143,
                "known_for_department": "Acting",
                "name": "Jawara",
                "original_name": "Jawara",
                "popularity": 1.413,
                "profile_path": null,
                "cast_id": 94,
                "character": "Fight Patron Saying I do not know. What is going on? (uncredited)",
                "credit_id": "588652f0c3a36845e60034af",
                "order": 62
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1525014,
                "known_for_department": "Acting",
                "name": "Baron Jay",
                "original_name": "Baron Jay",
                "popularity": 1.38,
                "profile_path": null,
                "cast_id": 95,
                "character": "Waiter (uncredited)",
                "credit_id": "58865312925141107e001361",
                "order": 63
              },
              {
                "adult": false,
                "gender": 2,
                "id": 1577360,
                "known_for_department": "Acting",
                "name": "Jim Jenkins",
                "original_name": "Jim Jenkins",
                "popularity": 0.6,
                "profile_path": null,
                "cast_id": 96,
                "character": "Restaurant Maitre D (uncredited)",
                "credit_id": "58865333c3a36843c80037ef",
                "order": 64
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1403525,
                "known_for_department": "Visual Effects",
                "name": "Kevin Scott Mack",
                "original_name": "Kevin Scott Mack",
                "popularity": 2.009,
                "profile_path": null,
                "cast_id": 97,
                "character": "Passenger Clutching Armrest (uncredited)",
                "credit_id": "5886535392514113ea000f8d",
                "order": 65
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1744144,
                "known_for_department": "Acting",
                "name": "Trey Ore",
                "original_name": "Trey Ore",
                "popularity": 0.6,
                "profile_path": null,
                "cast_id": 98,
                "character": "Fight Club Patron / Guy #2 in Video Store (uncredited)",
                "credit_id": "5886536592514113ea000fbb",
                "order": 66
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1744145,
                "known_for_department": "Acting",
                "name": "Louis Ortiz",
                "original_name": "Louis Ortiz",
                "popularity": 0.6,
                "profile_path": null,
                "cast_id": 99,
                "character": "Fight Spectator (uncredited)",
                "credit_id": "5886537d9251411158001378",
                "order": 67
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1386468,
                "known_for_department": "Acting",
                "name": "Hugh Peddy",
                "original_name": "Hugh Peddy",
                "popularity": 1.38,
                "profile_path": null,
                "cast_id": 100,
                "character": "Fight Club Man (uncredited)",
                "credit_id": "58865398c3a36845e60035ea",
                "order": 68
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1744146,
                "known_for_department": "Acting",
                "name": "J.T. Pontino",
                "original_name": "J.T. Pontino",
                "popularity": 0.6,
                "profile_path": null,
                "cast_id": 101,
                "character": "Fight Club Man (uncredited)",
                "credit_id": "588653aa92514111580013f2",
                "order": 69
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1744147,
                "known_for_department": "Acting",
                "name": "Chad Randau",
                "original_name": "Chad Randau",
                "popularity": 0.728,
                "profile_path": null,
                "cast_id": 102,
                "character": "Waiter (uncredited)",
                "credit_id": "588653c8c3a36843c800390b",
                "order": 70
              },
              {
                "adult": false,
                "gender": 2,
                "id": 133153,
                "known_for_department": "Acting",
                "name": "Marcio Rosario",
                "original_name": "Marcio Rosario",
                "popularity": 1.4,
                "profile_path": "/pkSWorrHpHciPjgIHdj35Y91xvV.jpg",
                "cast_id": 103,
                "character": "Fighter (uncredited)",
                "credit_id": "588653ec92514113ea001123",
                "order": 71
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1744148,
                "known_for_department": "Acting",
                "name": "Gregory Silva",
                "original_name": "Gregory Silva",
                "popularity": 0.6,
                "profile_path": null,
                "cast_id": 104,
                "character": "Riley Wilde - Fighter (uncredited)",
                "credit_id": "58865401c3a36817620006fc",
                "order": 72
              },
              {
                "adult": false,
                "gender": 2,
                "id": 16060,
                "known_for_department": "Acting",
                "name": "Brian Tochi",
                "original_name": "Brian Tochi",
                "popularity": 2.023,
                "profile_path": "/oFmxzHpo3bw9wn8yx5fNCt9xTC7.jpg",
                "cast_id": 105,
                "character": "Fight Bully (uncredited)",
                "credit_id": "588654119251411bb40007f2",
                "order": 73
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1744149,
                "known_for_department": "Acting",
                "name": "Alekxia Valdez",
                "original_name": "Alekxia Valdez",
                "popularity": 0.6,
                "profile_path": null,
                "cast_id": 106,
                "character": "Bar Worker (uncredited)",
                "credit_id": "58865423c3a36818e9000600",
                "order": 74
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1744150,
                "known_for_department": "Acting",
                "name": "Michael Zagst",
                "original_name": "Michael Zagst",
                "popularity": 0.766,
                "profile_path": "/khCB4Ww6RXEjghdwsxv4lj545em.jpg",
                "cast_id": 107,
                "character": "Support Group Member (uncredited)",
                "credit_id": "58865450c3a3681eb70000ce",
                "order": 75
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1744151,
                "known_for_department": "Acting",
                "name": "Gökhan Öncel",
                "original_name": "Gökhan Öncel",
                "popularity": 0.608,
                "profile_path": null,
                "cast_id": 108,
                "character": "Man at the Club (uncredited)",
                "credit_id": "58865460c3a3684480003a41",
                "order": 76
              },
              {
                "adult": false,
                "gender": 0,
                "id": 2021961,
                "known_for_department": "Acting",
                "name": "Philip Centanni",
                "original_name": "Philip Centanni",
                "popularity": 1.532,
                "profile_path": null,
                "cast_id": 200,
                "character": "Space Monkey (uncredited)",
                "credit_id": "5acfee060e0a26749200394d",
                "order": 77
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1152377,
                "known_for_department": "Directing",
                "name": "Marc Cinquanta",
                "original_name": "Marc Cinquanta",
                "popularity": 0.98,
                "profile_path": null,
                "cast_id": 206,
                "character": "Space Monkey (uncredited)",
                "credit_id": "5ad0963fc3a36825a3007d6d",
                "order": 78
              },
              {
                "adult": false,
                "gender": 1,
                "id": 1657018,
                "known_for_department": "Acting",
                "name": "Summer Moore",
                "original_name": "Summer Moore",
                "popularity": 1.4,
                "profile_path": "/9stkBho2p586irYICd6apsb1xr9.jpg",
                "cast_id": 202,
                "character": "Marla is Neighbor (uncredited)",
                "credit_id": "5acfeeecc3a36842ce003640",
                "order": 79
              }
            ],
            "crew": [
              {
                "adult": false,
                "gender": 2,
                "id": 376,
                "known_for_department": "Production",
                "name": "Arnon Milchan",
                "original_name": "Arnon Milchan",
                "popularity": 1.702,
                "profile_path": "/b2hBExX4NnczNAnLuTBF4kmNhZm.jpg",
                "credit_id": "55731b8192514111610027d7",
                "department": "Production",
                "job": "Executive Producer"
              },
              {
                "adult": false,
                "gender": 2,
                "id": 605,
                "known_for_department": "Costume & Make-Up",
                "name": "Michael Kaplan",
                "original_name": "Michael Kaplan",
                "popularity": 1.38,
                "profile_path": null,
                "credit_id": "5894c4eac3a3685ec6000218",
                "department": "Costume & Make-Up",
                "job": "Costume Design"
              },
              {
                "adult": false,
                "gender": 2,
                "id": 1254,
                "known_for_department": "Production",
                "name": "Art Linson",
                "original_name": "Art Linson",
                "popularity": 1.007,
                "profile_path": null,
                "credit_id": "52fe4250c3a36847f8014a11",
                "department": "Production",
                "job": "Producer"
              },
              {
                "adult": false,
                "gender": 2,
                "id": 1303,
                "known_for_department": "Art",
                "name": "Alex McDowell",
                "original_name": "Alex McDowell",
                "popularity": 0.98,
                "profile_path": null,
                "credit_id": "52fe4250c3a36847f8014a35",
                "department": "Art",
                "job": "Production Design"
              },
              {
                "adult": false,
                "gender": 2,
                "id": 7237,
                "known_for_department": "Art",
                "name": "Jay Hart",
                "original_name": "Jay Hart",
                "popularity": 0.828,
                "profile_path": null,
                "credit_id": "5894c4a3c3a3685ecd0001c0",
                "department": "Art",
                "job": "Set Decoration"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 5339,
                "known_for_department": "Sound",
                "name": "David Boulton",
                "original_name": "David Boulton",
                "popularity": 0.694,
                "profile_path": null,
                "credit_id": "5c7a4d980e0a263ee10eaae9",
                "department": "Sound",
                "job": "ADR Mixer"
              },
              {
                "adult": false,
                "gender": 2,
                "id": 5714,
                "known_for_department": "Directing",
                "name": "Carlos Saldanha",
                "original_name": "Carlos Saldanha",
                "popularity": 2.195,
                "profile_path": "/oxUlCSgxKaoCRYFyS65PC2fZWrk.jpg",
                "credit_id": "5894cedb92514122b50000e4",
                "department": "Visual Effects",
                "job": "Animation Supervisor"
              },
              {
                "adult": false,
                "gender": 2,
                "id": 7467,
                "known_for_department": "Directing",
                "name": "David Fincher",
                "original_name": "David Fincher",
                "popularity": 9.756,
                "profile_path": "/wdBeQXDNbbjkIKXHeEZtQShwSDM.jpg",
                "credit_id": "52fe4250c3a36847f8014a47",
                "department": "Directing",
                "job": "Director"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 6904,
                "known_for_department": "Costume & Make-Up",
                "name": "Rhona Meyers",
                "original_name": "Rhona Meyers",
                "popularity": 1.094,
                "profile_path": null,
                "credit_id": "5c7a4ce7c3a36821ec1823b9",
                "department": "Costume & Make-Up",
                "job": "Key Costumer"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 7537,
                "known_for_department": "Sound",
                "name": "Steve Boeddeker",
                "original_name": "Steve Boeddeker",
                "popularity": 1.22,
                "profile_path": null,
                "credit_id": "5894cdfcc3a3687bb800004a",
                "department": "Sound",
                "job": "Sound Effects Editor"
              },
              {
                "adult": false,
                "gender": 2,
                "id": 7468,
                "known_for_department": "Writing",
                "name": "Chuck Palahniuk",
                "original_name": "Chuck Palahniuk",
                "popularity": 0.696,
                "profile_path": null,
                "credit_id": "52fe4250c3a36847f8014a4d",
                "department": "Writing",
                "job": "Novel"
              },
              {
                "adult": false,
                "gender": 2,
                "id": 7469,
                "known_for_department": "Writing",
                "name": "Jim Uhls",
                "original_name": "Jim Uhls",
                "popularity": 1.284,
                "profile_path": "/eJPUwP933EiwEWqxEBzPv6Xf0nC.jpg",
                "credit_id": "56380f0cc3a3681b5c0200be",
                "department": "Writing",
                "job": "Screenplay"
              },
              {
                "adult": false,
                "gender": 2,
                "id": 7474,
                "known_for_department": "Production",
                "name": "Ross Grayson Bell",
                "original_name": "Ross Grayson Bell",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "52fe4250c3a36847f8014a05",
                "department": "Production",
                "job": "Producer"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 7475,
                "known_for_department": "Production",
                "name": "Ceán Chaffin",
                "original_name": "Ceán Chaffin",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "52fe4250c3a36847f8014a0b",
                "department": "Production",
                "job": "Producer"
              },
              {
                "adult": false,
                "gender": 2,
                "id": 7477,
                "known_for_department": "Sound",
                "name": "John King",
                "original_name": "John King",
                "popularity": 0.694,
                "profile_path": null,
                "credit_id": "52fe4250c3a36847f8014a17",
                "department": "Sound",
                "job": "Original Music Composer"
              },
              {
                "adult": false,
                "gender": 2,
                "id": 7478,
                "known_for_department": "Sound",
                "name": "Michael Simpson",
                "original_name": "Michael Simpson",
                "popularity": 0.98,
                "profile_path": null,
                "credit_id": "52fe4250c3a36847f8014a1d",
                "department": "Sound",
                "job": "Original Music Composer"
              },
              {
                "adult": false,
                "gender": 2,
                "id": 7479,
                "known_for_department": "Camera",
                "name": "Jeff Cronenweth",
                "original_name": "Jeff Cronenweth",
                "popularity": 0.6,
                "profile_path": "/93Mn7WPDJjAEVvDv2J39RhzlnEE.jpg",
                "credit_id": "52fe4250c3a36847f8014a23",
                "department": "Camera",
                "job": "Director of Photography"
              },
              {
                "adult": false,
                "gender": 2,
                "id": 7480,
                "known_for_department": "Editing",
                "name": "James Haygood",
                "original_name": "James Haygood",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "52fe4250c3a36847f8014a29",
                "department": "Editing",
                "job": "Editor"
              },
              {
                "adult": false,
                "gender": 1,
                "id": 7481,
                "known_for_department": "Production",
                "name": "Laray Mayfield",
                "original_name": "Laray Mayfield",
                "popularity": 1.4,
                "profile_path": null,
                "credit_id": "52fe4250c3a36847f8014a2f",
                "department": "Production",
                "job": "Casting"
              },
              {
                "adult": false,
                "gender": 2,
                "id": 7763,
                "known_for_department": "Sound",
                "name": "Ren Klyce",
                "original_name": "Ren Klyce",
                "popularity": 0.694,
                "profile_path": "/tMDHEVa05pe3od1NMpfplPVPnxD.jpg",
                "credit_id": "5894cde492514122c1000053",
                "department": "Sound",
                "job": "Sound Designer"
              },
              {
                "adult": false,
                "gender": 2,
                "id": 7763,
                "known_for_department": "Sound",
                "name": "Ren Klyce",
                "original_name": "Ren Klyce",
                "popularity": 0.694,
                "profile_path": "/tMDHEVa05pe3od1NMpfplPVPnxD.jpg",
                "credit_id": "52fe4250c3a36847f8014a3b",
                "department": "Sound",
                "job": "Sound Editor"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 7764,
                "known_for_department": "Sound",
                "name": "Richard Hymns",
                "original_name": "Richard Hymns",
                "popularity": 0.847,
                "profile_path": null,
                "credit_id": "52fe4250c3a36847f8014a41",
                "department": "Sound",
                "job": "Sound Editor"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 7764,
                "known_for_department": "Sound",
                "name": "Richard Hymns",
                "original_name": "Richard Hymns",
                "popularity": 0.847,
                "profile_path": null,
                "credit_id": "5c7a4e03c3a36821ec18283b",
                "department": "Sound",
                "job": "Sound Supervisor"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 8850,
                "known_for_department": "Production",
                "name": "Helen Pollak",
                "original_name": "Helen Pollak",
                "popularity": 0.828,
                "profile_path": null,
                "credit_id": "5894cafd9251410b9300054d",
                "department": "Production",
                "job": "Unit Production Manager"
              },
              {
                "adult": false,
                "gender": 2,
                "id": 40684,
                "known_for_department": "Directing",
                "name": "David Leitch",
                "original_name": "David Leitch",
                "popularity": 4.35,
                "profile_path": "/htO4qu7yMUfZzJR9DF9iXch8ina.jpg",
                "credit_id": "5acff3ffc3a36842d2003381",
                "department": "Crew",
                "job": "Stunts"
              },
              {
                "adult": false,
                "gender": 2,
                "id": 12371,
                "known_for_department": "Acting",
                "name": "Richard Cetrone",
                "original_name": "Richard Cetrone",
                "popularity": 3.553,
                "profile_path": "/5xYPGauQCXKVPSnx3hEqqGttZ4O.jpg",
                "credit_id": "5894cb1e9251410b87000528",
                "department": "Crew",
                "job": "Utility Stunts"
              },
              {
                "adult": false,
                "gender": 2,
                "id": 16522,
                "known_for_department": "Crew",
                "name": "Jimmy Nickerson",
                "original_name": "Jimmy Nickerson",
                "popularity": 0.6,
                "profile_path": "/zidbZdFLUj5DqmZT7yAbp3wEzmr.jpg",
                "credit_id": "5acff40e9251417b5d00388f",
                "department": "Crew",
                "job": "Stunts"
              },
              {
                "adult": false,
                "gender": 2,
                "id": 10855,
                "known_for_department": "Art",
                "name": "Chris Gorak",
                "original_name": "Chris Gorak",
                "popularity": 1.008,
                "profile_path": null,
                "credit_id": "5894c4869251410b990001e3",
                "department": "Art",
                "job": "Art Direction"
              },
              {
                "adult": false,
                "gender": 1,
                "id": 34528,
                "known_for_department": "Production",
                "name": "Julie M. Anderson",
                "original_name": "Julie M. Anderson",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5894cd38c3a368771c000046",
                "department": "Production",
                "job": "Production Supervisor"
              },
              {
                "adult": false,
                "gender": 2,
                "id": 37925,
                "known_for_department": "Camera",
                "name": "Conrad W. Hall",
                "original_name": "Conrad W. Hall",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5894c6cb9251410b8d00031f",
                "department": "Camera",
                "job": "Camera Operator"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 113013,
                "known_for_department": "Crew",
                "name": "David McKimmie",
                "original_name": "David McKimmie",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5c7a4ed1c3a36819321833af",
                "department": "Production",
                "job": "Assistant Production Coordinator"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 113067,
                "known_for_department": "Sound",
                "name": "David Lucarelli",
                "original_name": "David Lucarelli",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5c7a4da80e0a2637cb0e9b1d",
                "department": "Sound",
                "job": "ADR Recordist"
              },
              {
                "adult": false,
                "gender": 2,
                "id": 60937,
                "known_for_department": "Art",
                "name": "Seth Reed",
                "original_name": "Seth Reed",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5894c5c89251410b96000268",
                "department": "Art",
                "job": "Assistant Art Director"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 83072,
                "known_for_department": "Art",
                "name": "P. Scott Bailey",
                "original_name": "P. Scott Bailey",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5894c632c3a3685ec60002ce",
                "department": "Art",
                "job": "Leadman"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 91161,
                "known_for_department": "Production",
                "name": "Joe Hartwick Jr.",
                "original_name": "Joe Hartwick Jr.",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5c7a4f0dc3a3681932183491",
                "department": "Production",
                "job": "First Assistant Accountant"
              },
              {
                "adult": false,
                "gender": 2,
                "id": 151007,
                "known_for_department": "Directing",
                "name": "Peter Ramsey",
                "original_name": "Peter Ramsey",
                "popularity": 1.62,
                "profile_path": "/9708uu7CeTLSzm69ykdYxgPcd2S.jpg",
                "credit_id": "5c50dee60e0a26495adaea80",
                "department": "Art",
                "job": "Storyboard Artist"
              },
              {
                "adult": false,
                "gender": 2,
                "id": 159112,
                "known_for_department": "Editing",
                "name": "David Orr",
                "original_name": "David Orr",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5acee7f99251415a6d01dc19",
                "department": "Editing",
                "job": "Color Timer"
              },
              {
                "adult": false,
                "gender": 2,
                "id": 169628,
                "known_for_department": "Acting",
                "name": "Jeff Imada",
                "original_name": "Jeff Imada",
                "popularity": 1.4,
                "profile_path": "/sUNSaNQreSHYaJvKr0SfiBqMPDV.jpg",
                "credit_id": "5894ca83c3a3685ec3000578",
                "department": "Crew",
                "job": "Stunts"
              },
              {
                "adult": false,
                "gender": 2,
                "id": 180576,
                "known_for_department": "Visual Effects",
                "name": "Rich Thorne",
                "original_name": "Rich Thorne",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5c7a4f8cc3a36844d11b565c",
                "department": "Production",
                "job": "Production Executive"
              },
              {
                "adult": false,
                "gender": 2,
                "id": 423640,
                "known_for_department": "Editing",
                "name": "Michael Matzdorff",
                "original_name": "Michael Matzdorff",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5894cbe09251410b89000610",
                "department": "Editing",
                "job": "First Assistant Editor"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 554001,
                "known_for_department": "Acting",
                "name": "Johann Benét",
                "original_name": "Johann Benét",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5894cfef92514122bf00017c",
                "department": "Crew",
                "job": "Thanks"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 562696,
                "known_for_department": "Art",
                "name": "Dianne Chadwick",
                "original_name": "Dianne Chadwick",
                "popularity": 0.648,
                "profile_path": null,
                "credit_id": "5894c54ec3a3685ec9000253",
                "department": "Art",
                "job": "Art Department Assistant"
              },
              {
                "adult": false,
                "gender": 2,
                "id": 572622,
                "known_for_department": "Sound",
                "name": "Tom Bellfort",
                "original_name": "Tom Bellfort",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5c7a4d7ac3a36821ec182659",
                "department": "Sound",
                "job": "ADR Editor"
              },
              {
                "adult": false,
                "gender": 2,
                "id": 578767,
                "known_for_department": "Sound",
                "name": "Don Coufal",
                "original_name": "Don Coufal",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5894cd7a92514122bf000003",
                "department": "Sound",
                "job": "Boom Operator"
              },
              {
                "adult": false,
                "gender": 1,
                "id": 993165,
                "known_for_department": "Sound",
                "name": "Mary Works",
                "original_name": "Mary Works",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5c7a4dbb0e0a2611e1117448",
                "department": "Sound",
                "job": "Assistant Dialogue Editor"
              },
              {
                "adult": false,
                "gender": 2,
                "id": 1002652,
                "known_for_department": "Visual Effects",
                "name": "Dennis Berardi",
                "original_name": "Dennis Berardi",
                "popularity": 0.608,
                "profile_path": null,
                "credit_id": "5894cf5892514122ad000137",
                "department": "Visual Effects",
                "job": "Visual Effects Supervisor"
              },
              {
                "adult": false,
                "gender": 2,
                "id": 1172443,
                "known_for_department": "Camera",
                "name": "Merrick Morton",
                "original_name": "Merrick Morton",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5894c75b9251410b8900037f",
                "department": "Camera",
                "job": "Still Photographer"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1181128,
                "known_for_department": "Sound",
                "name": "P.J. Hanke",
                "original_name": "P.J. Hanke",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5894c8269251410b900003c1",
                "department": "Crew",
                "job": "Additional Music"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1325234,
                "known_for_department": "Costume & Make-Up",
                "name": "Jean Ann Black",
                "original_name": "Jean Ann Black",
                "popularity": 3.121,
                "profile_path": null,
                "credit_id": "5894c7cf9251410b9000039e",
                "department": "Costume & Make-Up",
                "job": "Makeup Artist"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1325655,
                "known_for_department": "Costume & Make-Up",
                "name": "Elinor Bardach",
                "original_name": "Elinor Bardach",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5894c7859251410b90000374",
                "department": "Costume & Make-Up",
                "job": "Costume Supervisor"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1327146,
                "known_for_department": "Costume & Make-Up",
                "name": "Wendy M. Craig",
                "original_name": "Wendy M. Craig",
                "popularity": 0.694,
                "profile_path": null,
                "credit_id": "595513299251412b2304f78e",
                "department": "Costume & Make-Up",
                "job": "Set Costumer"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1341851,
                "known_for_department": "Art",
                "name": "Jeff Passanante",
                "original_name": "Jeff Passanante",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5894c5f6c3a3685ec00002bc",
                "department": "Art",
                "job": "Construction Coordinator"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1341856,
                "known_for_department": "Sound",
                "name": "Hilda Hodges",
                "original_name": "Hilda Hodges",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5c7a4dcd9251412a5a4a18fc",
                "department": "Sound",
                "job": "Foley Artist"
              },
              {
                "adult": false,
                "gender": 2,
                "id": 1342072,
                "known_for_department": "Crew",
                "name": "Cliff Wenger",
                "original_name": "Cliff Wenger",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5894c9fe9251410b8d0004f8",
                "department": "Crew",
                "job": "Special Effects Coordinator"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1342601,
                "known_for_department": "Visual Effects",
                "name": "Nicholas Brooks",
                "original_name": "Nicholas Brooks",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5894cef5c3a3687ba70000c6",
                "department": "Visual Effects",
                "job": "Digital Compositors"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1352424,
                "known_for_department": "Sound",
                "name": "Brandon Proctor",
                "original_name": "Brandon Proctor",
                "popularity": 1.165,
                "profile_path": null,
                "credit_id": "5ba180b0c3a368719000067a",
                "department": "Sound",
                "job": "Sound Mix Technician"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1357044,
                "known_for_department": "Art",
                "name": "Richard K. Buoen",
                "original_name": "Richard K. Buoen",
                "popularity": 0.98,
                "profile_path": null,
                "credit_id": "5894c670c3a3685ebc000311",
                "department": "Art",
                "job": "Production Illustrator"
              },
              {
                "adult": false,
                "gender": 2,
                "id": 1368878,
                "known_for_department": "Crew",
                "name": "Damon Caro",
                "original_name": "Damon Caro",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5c7a4ef80e0a26521c10ec07",
                "department": "Crew",
                "job": "Fight Choreographer"
              },
              {
                "adult": false,
                "gender": 2,
                "id": 1368878,
                "known_for_department": "Crew",
                "name": "Damon Caro",
                "original_name": "Damon Caro",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5c7a4e450e0a2611de1157a7",
                "department": "Crew",
                "job": "Stunt Double"
              },
              {
                "adult": false,
                "gender": 1,
                "id": 1376902,
                "known_for_department": "Sound",
                "name": "Gwendolyn Yates Whittle",
                "original_name": "Gwendolyn Yates Whittle",
                "popularity": 1.669,
                "profile_path": null,
                "credit_id": "5894cd609251411eeb000065",
                "department": "Sound",
                "job": "ADR Supervisor"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1378726,
                "known_for_department": "Crew",
                "name": "Francie Brown",
                "original_name": "Francie Brown",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5894c88d9251410b870003ad",
                "department": "Crew",
                "job": "Dialect Coach"
              },
              {
                "adult": false,
                "gender": 2,
                "id": 1389534,
                "known_for_department": "Sound",
                "name": "Richard Quinn",
                "original_name": "Richard Quinn",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5ae6d72d0e0a2610720089d5",
                "department": "Sound",
                "job": "Dialogue Editor"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1390518,
                "known_for_department": "Art",
                "name": "Luis G. Hoyos",
                "original_name": "Luis G. Hoyos",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5894c69d9251410b93000302",
                "department": "Art",
                "job": "Set Designer"
              },
              {
                "adult": false,
                "gender": 2,
                "id": 1390528,
                "known_for_department": "Crew",
                "name": "Wayne Burnes",
                "original_name": "Wayne Burnes",
                "popularity": 0.84,
                "profile_path": null,
                "credit_id": "5c7a4e1ac3a36844d41b0642",
                "department": "Crew",
                "job": "Special Effects Technician"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1392117,
                "known_for_department": "Art",
                "name": "Eric Rosenberg",
                "original_name": "Eric Rosenberg",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5c7a4d39925141634c4759e1",
                "department": "Art",
                "job": "Graphic Designer"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1397810,
                "known_for_department": "Art",
                "name": "Kenneth Garrett",
                "original_name": "Kenneth Garrett",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5894c687c3a3685ebc000327",
                "department": "Art",
                "job": "Sculptor"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1398980,
                "known_for_department": "Crew",
                "name": "Dave Robling",
                "original_name": "Dave Robling",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5894cae99251410b9000055a",
                "department": "Crew",
                "job": "Transportation Coordinator"
              },
              {
                "adult": false,
                "gender": 2,
                "id": 1401109,
                "known_for_department": "Camera",
                "name": "Chris Haarhoff",
                "original_name": "Chris Haarhoff",
                "popularity": 0.98,
                "profile_path": "/s8rWd96a0I2IPKOjESrHtaZyQ8U.jpg",
                "credit_id": "5894c73cc3a3685ec9000380",
                "department": "Camera",
                "job": "Steadicam Operator"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1403191,
                "known_for_department": "Visual Effects",
                "name": "Andrea DAmico",
                "original_name": "Andrea DAmico",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5894cf3e92514122b7000122",
                "department": "Visual Effects",
                "job": "Visual Effects Producer"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1403525,
                "known_for_department": "Visual Effects",
                "name": "Kevin Scott Mack",
                "original_name": "Kevin Scott Mack",
                "popularity": 2.009,
                "profile_path": null,
                "credit_id": "5c4e35630e0a264965d6db97",
                "department": "Visual Effects",
                "job": "Visual Effects Supervisor"
              },
              {
                "adult": false,
                "gender": 2,
                "id": 1404546,
                "known_for_department": "Sound",
                "name": "Brian Richards",
                "original_name": "Brian Richards",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5894cdc692514122b7000038",
                "department": "Sound",
                "job": "Music Editor"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1407900,
                "known_for_department": "Editing",
                "name": "Joëlle Taar",
                "original_name": "Joëlle Taar",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5c7a4eb4925141634c475c20",
                "department": "Editing",
                "job": "Assistant Editor"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1408290,
                "known_for_department": "Costume & Make-Up",
                "name": "Patricia Miller",
                "original_name": "Patricia Miller",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5894c79ec3a3685ec60003af",
                "department": "Costume & Make-Up",
                "job": "Hairstylist"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1409273,
                "known_for_department": "Visual Effects",
                "name": "Kevin Tod Haug",
                "original_name": "Kevin Tod Haug",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5de004383faba0001306a760",
                "department": "Visual Effects",
                "job": "Visual Effects Supervisor"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1413224,
                "known_for_department": "Costume & Make-Up",
                "name": "Fríða Aradóttir",
                "original_name": "Fríða Aradóttir",
                "popularity": 1.135,
                "profile_path": null,
                "credit_id": "5894c7b2c3a3685ec00003eb",
                "department": "Costume & Make-Up",
                "job": "Key Hair Stylist"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1419264,
                "known_for_department": "Visual Effects",
                "name": "Fiona Campbell Westgate",
                "original_name": "Fiona Campbell Westgate",
                "popularity": 1.4,
                "profile_path": null,
                "credit_id": "5c7a4f9fc3a36821ec182ca8",
                "department": "Visual Effects",
                "job": "Rotoscoping Artist"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1422059,
                "known_for_department": "Art",
                "name": "Craig B. Ayers Sr.",
                "original_name": "Craig B. Ayers Sr.",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5894c61ac3a3685ec30002a5",
                "department": "Art",
                "job": "Greensman"
              },
              {
                "adult": false,
                "gender": 1,
                "id": 1424126,
                "known_for_department": "Sound",
                "name": "Carolyn Tapp",
                "original_name": "Carolyn Tapp",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5c7a4df3c3a36844d11b50c5",
                "department": "Sound",
                "job": "Foley Recordist"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1432596,
                "known_for_department": "Sound",
                "name": "Derek Casari",
                "original_name": "Derek Casari",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5c7a4d8a9251412a6949f246",
                "department": "Sound",
                "job": "ADR Engineer"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1440848,
                "known_for_department": "Visual Effects",
                "name": "Joshua I. Kolden",
                "original_name": "Joshua I. Kolden",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5894cf0fc3a3687b9f0000f1",
                "department": "Visual Effects",
                "job": "Visual Effects"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1447557,
                "known_for_department": "Crew",
                "name": "Rachel Wyn Dunn",
                "original_name": "Rachel Wyn Dunn",
                "popularity": 0.98,
                "profile_path": null,
                "credit_id": "55422f369251414aee003e1c",
                "department": "Crew",
                "job": "Compositors"
              },
              {
                "adult": false,
                "gender": 1,
                "id": 1461371,
                "known_for_department": "Sound",
                "name": "Mary Jo Lang",
                "original_name": "Mary Jo Lang",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5c7a4de00e0a263ee10eabe9",
                "department": "Sound",
                "job": "Foley Mixer"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1463313,
                "known_for_department": "Writing",
                "name": "Collin Grant",
                "original_name": "Collin Grant",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5c7a4d58c3a36819321830c6",
                "department": "Art",
                "job": "Storyboard Artist"
              },
              {
                "adult": false,
                "gender": 2,
                "id": 1463325,
                "known_for_department": "Art",
                "name": "Tim R. Lafferty",
                "original_name": "Tim R. Lafferty",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5894c60cc3a3685ec00002cf",
                "department": "Art",
                "job": "Construction Foreman"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1474687,
                "known_for_department": "Production",
                "name": "John S. Dorsey",
                "original_name": "John S. Dorsey",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "55731b7792514110f90024ab",
                "department": "Production",
                "job": "Associate Producer"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1492646,
                "known_for_department": "Production",
                "name": "Sande Alessi",
                "original_name": "Sande Alessi",
                "popularity": 1.38,
                "profile_path": null,
                "credit_id": "5c7a4ee5925141634c475c70",
                "department": "Production",
                "job": "Extras Casting"
              },
              {
                "adult": false,
                "gender": 2,
                "id": 1493771,
                "known_for_department": "Camera",
                "name": "John T. Connor",
                "original_name": "John T. Connor",
                "popularity": 0.98,
                "profile_path": null,
                "credit_id": "5894c6e99251410b90000311",
                "department": "Camera",
                "job": "First Assistant Camera"
              },
              {
                "adult": false,
                "gender": 2,
                "id": 1511710,
                "known_for_department": "Sound",
                "name": "Jeff Wexler",
                "original_name": "Jeff Wexler",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5894ce2cc3a3687ba7000053",
                "department": "Sound",
                "job": "Sound Mixer"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1521769,
                "known_for_department": "Directing",
                "name": "Dina Waxman",
                "original_name": "Dina Waxman",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5894cb97c3a3685ec60005d9",
                "department": "Directing",
                "job": "Script Supervisor"
              },
              {
                "adult": false,
                "gender": 1,
                "id": 1530086,
                "known_for_department": "Production",
                "name": "Karen Meisels",
                "original_name": "Karen Meisels",
                "popularity": 0.98,
                "profile_path": null,
                "credit_id": "5894cc7bc3a3685ecd000651",
                "department": "Production",
                "job": "Casting Associate"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1532597,
                "known_for_department": "Costume & Make-Up",
                "name": "Terry Anderson",
                "original_name": "Terry Anderson",
                "popularity": 0.728,
                "profile_path": null,
                "credit_id": "5894c7fcc3a3685ecd0003c8",
                "department": "Costume & Make-Up",
                "job": "Set Costumer"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1533533,
                "known_for_department": "Art",
                "name": "Josue Clotaire Fleurimond",
                "original_name": "Josue Clotaire Fleurimond",
                "popularity": 0.84,
                "profile_path": null,
                "credit_id": "5894c5e29251410b89000283",
                "department": "Art",
                "job": "Conceptual Design"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1534969,
                "known_for_department": "Directing",
                "name": "Allen Kupetsky",
                "original_name": "Allen Kupetsky",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5c7a4d170e0a263ee10ea972",
                "department": "Directing",
                "job": "Second Second Assistant Director"
              },
              {
                "adult": false,
                "gender": 2,
                "id": 1535124,
                "known_for_department": "Crew",
                "name": "Michael Runyard",
                "original_name": "Michael Runyard",
                "popularity": 1.4,
                "profile_path": "/45OfE6u2HFb2vsZDgSIwSMX9IjN.jpg",
                "credit_id": "5894ca5dc3a3685ec900053f",
                "department": "Crew",
                "job": "Stunt Coordinator"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1536630,
                "known_for_department": "Production",
                "name": "Robb Earnest",
                "original_name": "Robb Earnest",
                "popularity": 0.98,
                "profile_path": null,
                "credit_id": "5894cd209251411ee600004d",
                "department": "Production",
                "job": "Production Coordinator"
              },
              {
                "adult": false,
                "gender": 2,
                "id": 1548670,
                "known_for_department": "Art",
                "name": "Bill Kauhane Hoyt",
                "original_name": "Bill Kauhane Hoyt",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5894c6b59251410b9300030f",
                "department": "Art",
                "job": "Standby Painter"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1552215,
                "known_for_department": "Lighting",
                "name": "Martin Bosworth",
                "original_name": "Martin Bosworth",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5894cc4f9251410b9c0005ce",
                "department": "Lighting",
                "job": "Rigging Gaffer"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1552998,
                "known_for_department": "Crew",
                "name": "Raymond Bulinski",
                "original_name": "Raymond Bulinski",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5894c8589251410b960003ea",
                "department": "Crew",
                "job": "Craft Service"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1554372,
                "known_for_department": "Production",
                "name": "Carey Ann Strelecki",
                "original_name": "Carey Ann Strelecki",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5894cd4ec3a368772c000049",
                "department": "Production",
                "job": "Researcher"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1559615,
                "known_for_department": "Crew",
                "name": "Manny Demello",
                "original_name": "Manny Demello",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5894c8b09251410b8d000438",
                "department": "Crew",
                "job": "Driver"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1585177,
                "known_for_department": "Crew",
                "name": "Michael Herron",
                "original_name": "Michael Herron",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5894c9de9251410b890004fc",
                "department": "Crew",
                "job": "Set Production Assistant"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1586924,
                "known_for_department": "Crew",
                "name": "Jim Alfonso",
                "original_name": "Jim Alfonso",
                "popularity": 1.38,
                "profile_path": null,
                "credit_id": "5894cab49251410b990005b2",
                "department": "Crew",
                "job": "Transportation Captain"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1586926,
                "known_for_department": "Camera",
                "name": "Steve Wolfe",
                "original_name": "Steve Wolfe",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5c7a4e599251412a5d4a3ec8",
                "department": "Camera",
                "job": "Assistant Camera"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1599632,
                "known_for_department": "Crew",
                "name": "Peter Mavromates",
                "original_name": "Peter Mavromates",
                "popularity": 1.38,
                "profile_path": null,
                "credit_id": "5894c906c3a3685ec3000485",
                "department": "Crew",
                "job": "Post Production Supervisor"
              },
              {
                "adult": false,
                "gender": 2,
                "id": 1614187,
                "known_for_department": "Lighting",
                "name": "Kevin Brown",
                "original_name": "Kevin Brown",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5894cc37c3a3685ebc000644",
                "department": "Lighting",
                "job": "Lighting Technician"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1622111,
                "known_for_department": "Lighting",
                "name": "Michael Arvanitis",
                "original_name": "Michael Arvanitis",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5894cbf79251410b930005d8",
                "department": "Lighting",
                "job": "Best Boy Electric"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1646055,
                "known_for_department": "Camera",
                "name": "Robert Mehnert",
                "original_name": "Robert Mehnert",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5894c7299251410b9600032a",
                "department": "Camera",
                "job": "Aerial Camera"
              },
              {
                "adult": false,
                "gender": 1,
                "id": 1693424,
                "known_for_department": "Costume & Make-Up",
                "name": "Mirela Rupic",
                "original_name": "Mirela Rupic",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "57fe1e549251410699007177",
                "department": "Costume & Make-Up",
                "job": "Assistant Costume Designer"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1708007,
                "known_for_department": "Lighting",
                "name": "Charles W. Belisle",
                "original_name": "Charles W. Belisle",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5894c8109251410b99000427",
                "department": "Costume & Make-Up",
                "job": "Set Dressing Artist"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1728281,
                "known_for_department": "Art",
                "name": "Tammy DeRuiter",
                "original_name": "Tammy DeRuiter",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5894c65cc3a3685ecd0002c9",
                "department": "Art",
                "job": "Painter"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1735467,
                "known_for_department": "Crew",
                "name": "Kieran Woo",
                "original_name": "Kieran Woo",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5894c91d9251410b9600045a",
                "department": "Crew",
                "job": "Production Controller"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1735477,
                "known_for_department": "Crew",
                "name": "Wayne Tidwell",
                "original_name": "Wayne Tidwell",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5894cb79c3a3685ec000062f",
                "department": "Crew",
                "job": "Video Assist Operator"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1741114,
                "known_for_department": "Art",
                "name": "Bryan Duff",
                "original_name": "Bryan Duff",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5c7a4d29c3a36821ec1825f2",
                "department": "Art",
                "job": "Assistant Property Master"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1749891,
                "known_for_department": "Art",
                "name": "S. Quinn",
                "original_name": "S. Quinn",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5894c5bcc3a3685ec0000288",
                "department": "Art",
                "job": "Art Department Coordinator"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1749892,
                "known_for_department": "Art",
                "name": "Jack Robinson",
                "original_name": "Jack Robinson",
                "popularity": 0.694,
                "profile_path": null,
                "credit_id": "5894c6509251410b9c0002c8",
                "department": "Art",
                "job": "Location Scout"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1749896,
                "known_for_department": "Costume & Make-Up",
                "name": "Greg Solomon",
                "original_name": "Greg Solomon",
                "popularity": 0.98,
                "profile_path": null,
                "credit_id": "5894c7efc3a3685ec30003c7",
                "department": "Costume & Make-Up",
                "job": "Prosthetic Makeup Artist"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1749897,
                "known_for_department": "Crew",
                "name": "Yann Blondel",
                "original_name": "Yann Blondel",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5894c83b9251410b87000389",
                "department": "Crew",
                "job": "CG Supervisor"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1749899,
                "known_for_department": "Crew",
                "name": "Gary Kanner",
                "original_name": "Gary Kanner",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5c7a4e7bc3a36821ec182984",
                "department": "Camera",
                "job": "Camera Loader"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1749901,
                "known_for_department": "Crew",
                "name": "Grace Karman Graham",
                "original_name": "Grace Karman Graham",
                "popularity": 0.828,
                "profile_path": null,
                "credit_id": "5894c8f29251410b990004a9",
                "department": "Crew",
                "job": "Post Production Assistant"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1749902,
                "known_for_department": "Crew",
                "name": "Carrie Shaw",
                "original_name": "Carrie Shaw",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5894c94ec3a3685ebc00048b",
                "department": "Crew",
                "job": "Production Office Assistant"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1749904,
                "known_for_department": "Crew",
                "name": "David B. Brenner",
                "original_name": "David B. Brenner",
                "popularity": 0.98,
                "profile_path": null,
                "credit_id": "5894c99c9251410b9600048c",
                "department": "Crew",
                "job": "Propmaker"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1749906,
                "known_for_department": "Art",
                "name": "Roy Bucky Moore",
                "original_name": "Roy Bucky Moore",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5ae6d7440e0a26105a008ded",
                "department": "Art",
                "job": "Property Master"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1749907,
                "known_for_department": "Crew",
                "name": "Katherine Jones",
                "original_name": "Katherine Jones",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5894c9cf9251410b8700047e",
                "department": "Crew",
                "job": "Set Medic"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1749908,
                "known_for_department": "Crew",
                "name": "Lucio I. Flores",
                "original_name": "Lucio I. Flores",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5894c9f0c3a3685ec90004fb",
                "department": "Crew",
                "job": "Software Engineer"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1749910,
                "known_for_department": "Crew",
                "name": "Chad Keller",
                "original_name": "Chad Keller",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5894ca33c3a3685ec9000520",
                "department": "Crew",
                "job": "Stand In"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1749916,
                "known_for_department": "Crew",
                "name": "Leon Xiao",
                "original_name": "Leon Xiao",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5894caa4c3a3685ebc000562",
                "department": "Crew",
                "job": "Systems Administrators & Support"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1749920,
                "known_for_department": "Lighting",
                "name": "Ronald A. Miller",
                "original_name": "Ronald A. Miller",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5894cc66c3a3685ecd00063e",
                "department": "Lighting",
                "job": "Rigging Grip"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1749921,
                "known_for_department": "Production",
                "name": "Flint Maloney",
                "original_name": "Flint Maloney",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5894cc93c3a3685ec9000661",
                "department": "Production",
                "job": "Location Manager"
              },
              {
                "adult": false,
                "gender": 2,
                "id": 1749922,
                "known_for_department": "Production",
                "name": "Jim Davidson",
                "original_name": "Jim Davidson",
                "popularity": 0.98,
                "profile_path": null,
                "credit_id": "5894cd079251411efc00004d",
                "department": "Production",
                "job": "Production Accountant"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1749923,
                "known_for_department": "Sound",
                "name": "Jessica Bellfort",
                "original_name": "Jessica Bellfort",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5894cd95c3a3687ba300000e",
                "department": "Sound",
                "job": "Assistant Sound Editor"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1749924,
                "known_for_department": "Visual Effects",
                "name": "Jim Rutherford",
                "original_name": "Jim Rutherford",
                "popularity": 0.98,
                "profile_path": null,
                "credit_id": "5894cebf92514122b00000c0",
                "department": "Visual Effects",
                "job": "3D Animator"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1749925,
                "known_for_department": "Visual Effects",
                "name": "Lauren A. Littleton",
                "original_name": "Lauren A. Littleton",
                "popularity": 0.84,
                "profile_path": null,
                "credit_id": "5894cf28c3a3687bb30000d8",
                "department": "Visual Effects",
                "job": "Visual Effects Coordinator"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1749926,
                "known_for_department": "Crew",
                "name": "Misa Kageyama",
                "original_name": "Misa Kageyama",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5894cfd192514122b7000179",
                "department": "Crew",
                "job": "Sound Design Assistant"
              },
              {
                "adult": false,
                "gender": 2,
                "id": 1758614,
                "known_for_department": "Directing",
                "name": "Bob Wagner",
                "original_name": "Bob Wagner",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5c7a4cfdc3a36841dc183f8e",
                "department": "Directing",
                "job": "Second Assistant Director"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1758622,
                "known_for_department": "Production",
                "name": "Christie Cean George",
                "original_name": "Christie Cean George",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5c7a4ea99251412a5a4a1a2a",
                "department": "Production",
                "job": "Casting Assistant"
              },
              {
                "adult": false,
                "gender": 2,
                "id": 1787833,
                "known_for_department": "Visual Effects",
                "name": "Ryan Laney",
                "original_name": "Ryan Laney",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5c7a4e38c3a36844d11b5227",
                "department": "Visual Effects",
                "job": "Visual Effects Technical Director"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1854468,
                "known_for_department": "Camera",
                "name": "Michael Brennan",
                "original_name": "Michael Brennan",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5c7a4e87c3a36841dc184450",
                "department": "Camera",
                "job": "Dolly Grip"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 1859748,
                "known_for_department": "Visual Effects",
                "name": "Ron Frankel",
                "original_name": "Ron Frankel",
                "popularity": 0.98,
                "profile_path": null,
                "credit_id": "5c7a4f5b9251412a6949f7ab",
                "department": "Visual Effects",
                "job": "Pre-Visualization Supervisor"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 2220072,
                "known_for_department": "Production",
                "name": "Scott Ross",
                "original_name": "Scott Ross",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5c7a4f1e0e0a2611ec1195d1",
                "department": "Production",
                "job": "General Manager"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 2223905,
                "known_for_department": "Camera",
                "name": "Craig Kohtala",
                "original_name": "Craig Kohtala",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5c7a4e69c3a36844d41b076f",
                "department": "Camera",
                "job": "Best Boy Grip"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 2237171,
                "known_for_department": "Production",
                "name": "Eileen M. Dennis",
                "original_name": "Eileen M. Dennis",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5c7a4fb10e0a2611da1192c3",
                "department": "Production",
                "job": "Second Assistant Accountant"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 2243814,
                "known_for_department": "Camera",
                "name": "Lisa Guerriero",
                "original_name": "Lisa Guerriero",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5c7a4e990e0a26521c10eb72",
                "department": "Camera",
                "job": "Second Assistant Camera"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 2254345,
                "known_for_department": "Art",
                "name": "Danielle Simpson",
                "original_name": "Danielle Simpson",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5c7a4d4bc3a3681c4b1832e3",
                "department": "Art",
                "job": "Set Dressing Buyer"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 2254347,
                "known_for_department": "Art",
                "name": "Sean Hood",
                "original_name": "Sean Hood",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5c7a4d6e0e0a263ee10eaa8d",
                "department": "Art",
                "job": "Swing"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 2254357,
                "known_for_department": "Production",
                "name": "Chris Gutierrez",
                "original_name": "Chris Gutierrez",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5c7a4ec29251412a5d4a3f7f",
                "department": "Production",
                "job": "Assistant Location Manager"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 2254358,
                "known_for_department": "Crew",
                "name": "Raymond Bongiovanni",
                "original_name": "Raymond Bongiovanni",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5c7a4f2d0e0a2620ae0e891d",
                "department": "Crew",
                "job": "In Memory Of"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 2254359,
                "known_for_department": "Visual Effects",
                "name": "David Bailey",
                "original_name": "David Bailey",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5c7a4f460e0a2620ae0e894f",
                "department": "Visual Effects",
                "job": "Matte Painter"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 2254360,
                "known_for_department": "Production",
                "name": "Cindy Nevins",
                "original_name": "Cindy Nevins",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5c7a4f51c3a36841dc1846a3",
                "department": "Production",
                "job": "Payroll Accountant"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 2254362,
                "known_for_department": "Production",
                "name": "Tanya Doyle",
                "original_name": "Tanya Doyle",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5c7a4f6d0e0a2620ae0e8967",
                "department": "Production",
                "job": "Production Assistant"
              },
              {
                "adult": false,
                "gender": 0,
                "id": 2254363,
                "known_for_department": "Production",
                "name": "Shaun Ryan",
                "original_name": "Shaun Ryan",
                "popularity": 0.6,
                "profile_path": null,
                "credit_id": "5c7a4f7c0e0a2637cb0e9e97",
                "department": "Production",
                "job": "Production Driver"
              }
            ]
          }', true);
    }

    public function mockGetExternalIdsResponse(): array
    {
        return json_decode('{
            "imdb_id": "tt1856101",
            "facebook_id": "BladeRunner2049",
            "instagram_id": "bladerunnermovie",
            "twitter_id": "bladerunner",
            "id": 335984
          }', true);
    }

    public function mockGetImagesResponse(): array
    {
        return json_decode('{
            "id": 550,
            "backdrops": [
              {
                "aspect_ratio": 1.77777777777778,
                "file_path": "/fCayJrkfRaCRCTh8GqN30f8oyQF.jpg",
                "height": 720,
                "iso_639_1": null,
                "vote_average": 0,
                "vote_count": 0,
                "width": 1280
              }
            ],
            "posters": [
              {
                "aspect_ratio": 0.666666666666667,
                "file_path": "/fpemzjF623QVTe98pCVlwwtFC5N.jpg",
                "height": 1800,
                "iso_639_1": "en",
                "vote_average": 0,
                "vote_count": 0,
                "width": 1200
              }
            ]
          }', true);
    }

    public function mockGetKeywordsResponse(): array
    {
        return json_decode('{
            "id": 550,
            "keywords": [
              {
                "id": 825,
                "name": "support group"
              }
            ]
          }', true);
    }

    public function mockGetListsResponse(): array
    {
        return json_decode('{
            "id": 550,
            "page": 1,
            "results": [
              {
                "description": "Pick one and then one or two alternates",
                "favorite_count": 0,
                "id": 7213,
                "item_count": 1358,
                "iso_639_1": "en",
                "list_type": "movie",
                "name": "Movie Night",
                "poster_path": "/p60VSQL7usdxztIGokJPpHmKWdU.jpg"
              },
              {
                "description": "Your favorite and classic movies of the 1990s",
                "favorite_count": 0,
                "id": 6968,
                "item_count": 482,
                "iso_639_1": "en",
                "list_type": "movie",
                "name": "1990",
                "poster_path": "/5R68Xn4EG0g5qlaQxpE89zGrtes.jpg"
              },
              {
                "description": "All the movies I own on vhs/dvd/bluray or digital.",
                "favorite_count": 0,
                "id": 9660,
                "item_count": 3299,
                "iso_639_1": "en",
                "list_type": "movie",
                "name": "My Film Collection",
                "poster_path": "/3TsnEEkBRfQ1b7Gi2FTsuxHFUZq.jpg"
              },
              {
                "description": "",
                "favorite_count": 0,
                "id": 8085,
                "item_count": 23,
                "iso_639_1": "en",
                "list_type": "movie",
                "name": "Twists and Shouts",
                "poster_path": "/drzZQfdyoAq7pXq4EPI2aZKyGD5.jpg"
              },
              {
                "description": "",
                "favorite_count": 0,
                "id": 12031,
                "item_count": 475,
                "iso_639_1": "fr",
                "list_type": "movie",
                "name": "Films",
                "poster_path": null
              },
              {
                "description": "List maintained by Movie Collection, the iOS app.",
                "favorite_count": 0,
                "id": 1718,
                "item_count": 610,
                "iso_639_1": "en",
                "list_type": "movie",
                "name": "Movie Collection",
                "poster_path": null
              },
              {
                "description": "",
                "favorite_count": 0,
                "id": 11052,
                "item_count": 478,
                "iso_639_1": "en",
                "list_type": "movie",
                "name": "Movies",
                "poster_path": null
              },
              {
                "description": "Weekly Box Office Nº1 from 1982",
                "favorite_count": 0,
                "id": 5576,
                "item_count": 647,
                "iso_639_1": "es",
                "list_type": "movie",
                "name": "Weekly Box Office Nº1 from 1982",
                "poster_path": "/yTpKlgaNw3fEBndyDYPg3hRloR5.jpg"
              },
              {
                "description": "",
                "favorite_count": 0,
                "id": 4023,
                "item_count": 1072,
                "iso_639_1": "it",
                "list_type": "movie",
                "name": "Dvd collection",
                "poster_path": "/sHGO5Ct2Vo0KPVnSEmSf3Zo5MIl.jpg"
              },
              {
                "description": "Películas para recomendar",
                "favorite_count": 0,
                "id": 10354,
                "item_count": 33,
                "iso_639_1": "en",
                "list_type": "movie",
                "name": "Peliculones",
                "poster_path": null
              },
              {
                "description": "",
                "favorite_count": 0,
                "id": 10141,
                "item_count": 304,
                "iso_639_1": "en",
                "list_type": "movie",
                "name": "R3ST",
                "poster_path": null
              },
              {
                "description": "",
                "favorite_count": 0,
                "id": 5829,
                "item_count": 396,
                "iso_639_1": "de",
                "list_type": "movie",
                "name": "Criss Filme",
                "poster_path": "/gnNU653Lm0cCpdYDaOgjTREf6JI.jpg"
              },
              {
                "description": "movies that I have watched",
                "favorite_count": 0,
                "id": 6357,
                "item_count": 1690,
                "iso_639_1": "en",
                "list_type": "movie",
                "name": "watched",
                "poster_path": "/7o7fCNaruJGrTjWpmmK2jj8rE7Q.jpg"
              },
              {
                "description": "",
                "favorite_count": 0,
                "id": 9267,
                "item_count": 121,
                "iso_639_1": "en",
                "list_type": "movie",
                "name": "Dangerous Hill Classics",
                "poster_path": "/f7KYM1uO8f2duhoSY3Bps55mIe.jpg"
              },
              {
                "description": "List maintained by Movie Collection, the iOS app.",
                "favorite_count": 0,
                "id": 3136,
                "item_count": 185,
                "iso_639_1": "en",
                "list_type": "movie",
                "name": "Movie Collection",
                "poster_path": "/koLwUfgmlT2kr0twamPJ8l6eQIp.jpg"
              },
              {
                "description": "",
                "favorite_count": 0,
                "id": 4557,
                "item_count": 591,
                "iso_639_1": "hu",
                "list_type": "movie",
                "name": "Watched",
                "poster_path": "/43pgav2uIG0ZNGdcaZX1v073ITv.jpg"
              },
              {
                "description": "",
                "favorite_count": 0,
                "id": 12467,
                "item_count": 13,
                "iso_639_1": "en",
                "list_type": "movie",
                "name": "Bradd",
                "poster_path": null
              },
              {
                "description": "",
                "favorite_count": 0,
                "id": 4280,
                "item_count": 390,
                "iso_639_1": "it",
                "list_type": "movie",
                "name": "MY COLLECTION",
                "poster_path": "/noLXB6fiDAl9uC6O2W26kCDXIFl.jpg"
              },
              {
                "description": "Movies that I have watched.",
                "favorite_count": 0,
                "id": 10482,
                "item_count": 567,
                "iso_639_1": "en",
                "list_type": "movie",
                "name": "Watched",
                "poster_path": null
              },
              {
                "description": "DVDs I have",
                "favorite_count": 0,
                "id": 11773,
                "item_count": 1158,
                "iso_639_1": "en",
                "list_type": "movie",
                "name": "DVD Collection",
                "poster_path": null
              }
            ],
            "total_pages": 18,
            "total_results": 358
          }', true);
    }

    public function mockGetRecommendationsResponse(): array
    {
        return json_decode('{
            "page": 1,
            "results": [
              {
                "adult": false,
                "backdrop_path": null,
                "genre_ids": [
                  28
                ],
                "id": 106912,
                "original_language": "en",
                "original_title": "Darna! Ang Pagbabalik",
                "overview": "Valentina, Darna is snake-haired arch enemy, is trying to take over the Phillipines through subliminal messages on religious TV shows. Darna has her own problems, however, as she has lost her magic pearl and with it the ability to transform into her scantily clad super self. Trapped as her alter-ego, the plucky reporter Narda, she must try to regain the pearl and foil Valentina is plans.",
                "release_date": "1994-05-09",
                "poster_path": null,
                "popularity": 1.012564,
                "title": "Darna: The Return",
                "video": false,
                "vote_average": 0,
                "vote_count": 0
              }
            ],
            "total_pages": 9,
            "total_results": 168
          }', true);
    }

    public function mockGetReleaseDateResponse(): array
    {
        return json_decode('{
            "id": 550,
            "results": [
              {
                "iso_3166_1": "EG",
                "release_dates": [
                  {
                    "certification": "",
                    "iso_639_1": "",
                    "release_date": "2000-03-01T00:00:00.000Z",
                    "type": 3
                  }
                ]
              },
              {
                "iso_3166_1": "SI",
                "release_dates": [
                  {
                    "certification": "",
                    "iso_639_1": "",
                    "release_date": "2000-02-24T00:00:00.000Z",
                    "type": 3
                  }
                ]
              },
              {
                "iso_3166_1": "ZA",
                "release_dates": [
                  {
                    "certification": "",
                    "iso_639_1": "",
                    "release_date": "2000-01-28T00:00:00.000Z",
                    "type": 3
                  }
                ]
              },
              {
                "iso_3166_1": "HU",
                "release_dates": [
                  {
                    "certification": "",
                    "iso_639_1": "",
                    "release_date": "2000-01-27T00:00:00.000Z",
                    "type": 3
                  }
                ]
              },
              {
                "iso_3166_1": "EE",
                "release_dates": [
                  {
                    "certification": "",
                    "iso_639_1": "",
                    "release_date": "2000-01-07T00:00:00.000Z",
                    "type": 3
                  }
                ]
              },
              {
                "iso_3166_1": "RU",
                "release_dates": [
                  {
                    "certification": "",
                    "iso_639_1": "",
                    "release_date": "2000-01-13T00:00:00.000Z",
                    "type": 3
                  }
                ]
              },
              {
                "iso_3166_1": "JP",
                "release_dates": [
                  {
                    "certification": "",
                    "iso_639_1": "",
                    "release_date": "1999-12-11T00:00:00.000Z",
                    "type": 3
                  }
                ]
              },
              {
                "iso_3166_1": "MY",
                "release_dates": [
                  {
                    "certification": "",
                    "iso_639_1": "",
                    "release_date": "2000-01-13T00:00:00.000Z",
                    "type": 3
                  }
                ]
              },
              {
                "iso_3166_1": "PH",
                "release_dates": [
                  {
                    "certification": "",
                    "iso_639_1": "",
                    "note": "Davao",
                    "release_date": "1999-11-17T00:00:00.000Z",
                    "type": 3
                  }
                ]
              },
              {
                "iso_3166_1": "IL",
                "release_dates": [
                  {
                    "certification": "",
                    "iso_639_1": "",
                    "release_date": "1999-11-16T00:00:00.000Z",
                    "type": 3
                  }
                ]
              },
              {
                "iso_3166_1": "UY",
                "release_dates": [
                  {
                    "certification": "",
                    "iso_639_1": "",
                    "release_date": "1999-11-12T00:00:00.000Z",
                    "type": 3
                  }
                ]
              },
              {
                "iso_3166_1": "NO",
                "release_dates": [
                  {
                    "certification": "",
                    "iso_639_1": "",
                    "release_date": "1999-11-12T00:00:00.000Z",
                    "type": 3
                  }
                ]
              },
              {
                "iso_3166_1": "PL",
                "release_dates": [
                  {
                    "certification": "",
                    "iso_639_1": "",
                    "release_date": "2000-02-11T00:00:00.000Z",
                    "type": 3
                  }
                ]
              },
              {
                "iso_3166_1": "IE",
                "release_dates": [
                  {
                    "certification": "",
                    "iso_639_1": "",
                    "release_date": "1999-11-12T00:00:00.000Z",
                    "type": 3
                  }
                ]
              },
              {
                "iso_3166_1": "HK",
                "release_dates": [
                  {
                    "certification": "",
                    "iso_639_1": "",
                    "release_date": "1999-11-11T00:00:00.000Z",
                    "type": 3
                  }
                ]
              },
              {
                "iso_3166_1": "MX",
                "release_dates": [
                  {
                    "certification": "",
                    "iso_639_1": "",
                    "release_date": "1999-11-05T00:00:00.000Z",
                    "type": 3
                  }
                ]
              },
              {
                "iso_3166_1": "DK",
                "release_dates": [
                  {
                    "certification": "",
                    "iso_639_1": "",
                    "release_date": "1999-11-05T00:00:00.000Z",
                    "type": 3
                  }
                ]
              },
              {
                "iso_3166_1": "BR",
                "release_dates": [
                  {
                    "certification": "18",
                    "iso_639_1": "",
                    "note": "",
                    "release_date": "1999-10-29T00:00:00.000Z",
                    "type": 3
                  }
                ]
              },
              {
                "iso_3166_1": "CH",
                "release_dates": [
                  {
                    "certification": "",
                    "iso_639_1": "de",
                    "release_date": "1999-11-04T00:00:00.000Z",
                    "type": 3
                  },
                  {
                    "certification": "",
                    "iso_639_1": "fr",
                    "release_date": "1999-11-10T00:00:00.000Z",
                    "type": 3
                  }
                ]
              },
              {
                "iso_3166_1": "SK",
                "release_dates": [
                  {
                    "certification": "",
                    "iso_639_1": "",
                    "release_date": "2000-02-10T00:00:00.000Z",
                    "type": 3
                  }
                ]
              },
              {
                "iso_3166_1": "NL",
                "release_dates": [
                  {
                    "certification": "",
                    "iso_639_1": "",
                    "release_date": "1999-11-04T00:00:00.000Z",
                    "type": 3
                  }
                ]
              },
              {
                "iso_3166_1": "ES",
                "release_dates": [
                  {
                    "certification": "",
                    "iso_639_1": "",
                    "note": "",
                    "release_date": "1999-11-05T00:00:00.000Z",
                    "type": 3
                  }
                ]
              },
              {
                "iso_3166_1": "CA",
                "release_dates": [
                  {
                    "certification": "",
                    "iso_639_1": "",
                    "release_date": "1999-10-15T00:00:00.000Z",
                    "type": 3
                  }
                ]
              },
              {
                "iso_3166_1": "KR",
                "release_dates": [
                  {
                    "certification": "",
                    "iso_639_1": "",
                    "release_date": "1999-11-13T00:00:00.000Z",
                    "type": 3
                  }
                ]
              },
              {
                "iso_3166_1": "GR",
                "release_dates": [
                  {
                    "certification": "",
                    "iso_639_1": "",
                    "note": "",
                    "release_date": "2000-02-18T00:00:00.000Z",
                    "type": 3
                  }
                ]
              },
              {
                "iso_3166_1": "AU",
                "release_dates": [
                  {
                    "certification": "R18+",
                    "iso_639_1": "",
                    "note": "",
                    "release_date": "1999-11-11T00:00:00.000Z",
                    "type": 3
                  }
                ]
              },
              {
                "iso_3166_1": "HR",
                "release_dates": [
                  {
                    "certification": "",
                    "iso_639_1": "",
                    "release_date": "2000-03-09T00:00:00.000Z",
                    "type": 3
                  }
                ]
              },
              {
                "iso_3166_1": "SG",
                "release_dates": [
                  {
                    "certification": "",
                    "iso_639_1": "",
                    "release_date": "1999-11-04T00:00:00.000Z",
                    "type": 3
                  }
                ]
              },
              {
                "iso_3166_1": "MT",
                "release_dates": [
                  {
                    "certification": "",
                    "iso_639_1": "",
                    "release_date": "1999-11-24T00:00:00.000Z",
                    "type": 3
                  }
                ]
              },
              {
                "iso_3166_1": "BG",
                "release_dates": [
                  {
                    "certification": "c",
                    "iso_639_1": "",
                    "note": "",
                    "release_date": "2012-08-28T00:00:00.000Z",
                    "type": 3
                  }
                ]
              },
              {
                "iso_3166_1": "FI",
                "release_dates": [
                  {
                    "certification": "K-18",
                    "iso_639_1": "",
                    "note": "",
                    "release_date": "1999-11-12T00:00:00.000Z",
                    "type": 3
                  }
                ]
              },
              {
                "iso_3166_1": "AR",
                "release_dates": [
                  {
                    "certification": "",
                    "iso_639_1": "",
                    "release_date": "1999-11-04T00:00:00.000Z",
                    "type": 3
                  }
                ]
              },
              {
                "iso_3166_1": "GB",
                "release_dates": [
                  {
                    "certification": "18",
                    "iso_639_1": "",
                    "note": "",
                    "release_date": "1999-11-12T00:00:00.000Z",
                    "type": 3
                  }
                ]
              },
              {
                "iso_3166_1": "DE",
                "release_dates": [
                  {
                    "certification": "18",
                    "iso_639_1": "",
                    "note": "",
                    "release_date": "1999-11-11T00:00:00.000Z",
                    "type": 3
                  }
                ]
              },
              {
                "iso_3166_1": "TW",
                "release_dates": [
                  {
                    "certification": "",
                    "iso_639_1": "",
                    "release_date": "1999-11-11T00:00:00.000Z",
                    "type": 3
                  }
                ]
              },
              {
                "iso_3166_1": "SE",
                "release_dates": [
                  {
                    "certification": "",
                    "iso_639_1": "",
                    "release_date": "1999-12-25T00:00:00.000Z",
                    "type": 3
                  }
                ]
              },
              {
                "iso_3166_1": "CZ",
                "release_dates": [
                  {
                    "certification": "",
                    "iso_639_1": "",
                    "note": "Febio Film Festival",
                    "release_date": "2000-01-25T00:00:00.000Z",
                    "type": 1
                  },
                  {
                    "certification": "",
                    "iso_639_1": "",
                    "release_date": "2000-02-10T00:00:00.000Z",
                    "type": 3
                  }
                ]
              },
              {
                "iso_3166_1": "IS",
                "release_dates": [
                  {
                    "certification": "",
                    "iso_639_1": "",
                    "release_date": "1999-11-05T00:00:00.000Z",
                    "type": 3
                  }
                ]
              },
              {
                "iso_3166_1": "US",
                "release_dates": [
                  {
                    "certification": "R",
                    "iso_639_1": "",
                    "note": "CMJ Film Festival",
                    "release_date": "1999-09-21T00:00:00.000Z",
                    "type": 1
                  },
                  {
                    "certification": "R",
                    "iso_639_1": "",
                    "note": "Westwood, California",
                    "release_date": "1999-10-06T00:00:00.000Z",
                    "type": 1
                  },
                  {
                    "certification": "R",
                    "iso_639_1": "",
                    "note": "",
                    "release_date": "1999-10-15T00:00:00.000Z",
                    "type": 3
                  }
                ]
              },
              {
                "iso_3166_1": "BE",
                "release_dates": [
                  {
                    "certification": "",
                    "iso_639_1": "",
                    "release_date": "1999-11-10T00:00:00.000Z",
                    "type": 3
                  }
                ]
              },
              {
                "iso_3166_1": "PT",
                "release_dates": [
                  {
                    "certification": "",
                    "iso_639_1": "",
                    "release_date": "1999-11-12T00:00:00.000Z",
                    "type": 3
                  }
                ]
              },
              {
                "iso_3166_1": "FR",
                "release_dates": [
                  {
                    "certification": "16",
                    "iso_639_1": "",
                    "note": "",
                    "release_date": "1999-11-10T00:00:00.000Z",
                    "type": 3
                  }
                ]
              },
              {
                "iso_3166_1": "NZ",
                "release_dates": [
                  {
                    "certification": "",
                    "iso_639_1": "",
                    "release_date": "1999-11-11T00:00:00.000Z",
                    "type": 3
                  }
                ]
              },
              {
                "iso_3166_1": "TR",
                "release_dates": [
                  {
                    "certification": "",
                    "iso_639_1": "",
                    "note": "",
                    "release_date": "1999-12-10T00:00:00.000Z",
                    "type": 3
                  }
                ]
              },
              {
                "iso_3166_1": "IT",
                "release_dates": [
                  {
                    "certification": "",
                    "iso_639_1": "",
                    "note": "Venice Film Festival",
                    "release_date": "1999-09-10T00:00:00.000Z",
                    "type": 1
                  },
                  {
                    "certification": "VM14",
                    "iso_639_1": "",
                    "note": "",
                    "release_date": "1999-10-29T00:00:00.000Z",
                    "type": 3
                  }
                ]
              }
            ]
          }', true);
    }

    public function mockGetReviewsResponse(): array
    {
        return json_decode('{
            "id": 11,
            "page": 1,
            "results": [
              {
                "author": "Cat Ellington",
                "author_details": {
                  "name": "Cat Ellington",
                  "username": "CatEllington",
                  "avatar_path": "/uCmwgSbJAcHqNwSvQvTv2dB95tx.jpg",
                  "rating": null
                },
                "content": "(As I am writing this review, Darth Vader is theme music begins to build in my mind...)\r\n\r\nWell, it actually has a title, what the Darth Vader theme. And that title is \"The Imperial March\", composed by the great John Williams, whom, as many of you may already know, also composed the theme music for \"Jaws\" - that legendary score simply titled, \"Main Title (Theme From Jaws)\".\r\n\r\nNow, with that lil bit of trivia aside, let us procede with the fabled film currently under review: Star Wars. It had been at a drive-in theater in some small Illinois town or other where my mother, my older brother, and I had spent our weekly \"Movie Date Night\" watching this George Lucas directed cult masterpiece from our car in the parking lot. On the huge outdoor screen, the film appeared to be a silent one, but thanks to an old wire-attached speaker, we were able to hear both the character dialogue and soundtrack loud and clear. We even had ourselves a carful of vittles and snacks - walked back to our vehicle, of course, from the wide-opened cinema is briefly distant concession stand. Indeed, it had been a lovely summer evening that July.\r\n\r\nFrom the time the film started, with my brother and I following along as our mother sped-read the opening crawl, I began to feel rather antsy, thinking that this movie, the first in a franchise that would soon be world-renowned, was going to be boring, due to its genre being Science Fiction: A respectably likable, but not a passionately lovable genre of mine DURING THAT TIME. I just did not believe I was going to like Star Wars all that much ... But I soon found myself intrigued ... And awed.\r\n\r\nGeorge Lucas is a man with a phenomenal, and I do mean phenomenal imagination. Apart from his human characters (Han, Luke, Leia, and Obi-Wan Kenobi, among others), the droids: C-3P0, R2-D2, R2-series, and IG-88, not to mention those unusual characters like Jabba the Hutt, Yoda, and Chewbacca, just to name a few, are all creations of Lucas is phenomenal imagination. And I was completely in awe of each one of these strange beings. Then there was Vader ... And the evil Emperor ... And the Stormtroopers ... And the Spacecraft ... And the galaxies (I will admit that I am a huge lover of the Universe in all its Celestial glory) ... And the magnificent planets ... The Lightsabers ... And so on. Star Wars is a gorgeously shot space opera; it is truly an epic masterpiece. We enjoyed this film tremendously. And my brother was a die-hard fan from that night onward. He, my brother, had even received for Christmas that year, nearly every Star Wars action figure that my mother could find, including two of the spacecraft: The Millennium Falcon and Star Destroyer. The Death Star space station had too been wrapped beneath our Christmas tree - tagged with his name. It was totally crazy, what the new Star Wars era. Frenzied! But it was great ... Even still, to this day.\r\n\r\nI do not personally know anyone whom has yet to see Star Wars, but that certainly does not suggest there are still a few people out there who have not. And if you are one of the latter, then you should know that this classic space opera comes highly recommended. The entire series is told backwards, so you will definitely want to see Star Wars first, followed by its two sequels: The Empire Strikes Back and Return of the Jedi ... In that order. I trust that you will too discover yourself to be a lifelong cult fan in the wake. 😊",
                "created_at": "2017-02-13T22:23:01.268Z",
                "id": "58a231c5925141179e000674",
                "updated_at": "2017-02-13T23:16:19.538Z",
                "url": "https://www.themoviedb.org/review/58a231c5925141179e000674"
              },
              {
                "author": "John Chard",
                "author_details": {
                  "name": "",
                  "username": "John Chard",
                  "avatar_path": "/utEXl2EDiXBK6f41wCLsvprvMg4.jpg",
                  "rating": 10
                },
                "content": "A long time ago in a childhood not too far away...\r\n\r\nPrincess Leia is captured and held hostage by the Imperial Army as it seeks to rule the Galactic Empire. An old Jedi Knight by the name of Ben \"Obi-Wan\" Kenobi may just be hers, and the rebels only hope. Teaming up with farm boy Luke Skywalker, scoundrel Captain Han Solo, and a couple of quirky droids, Kenobi sets off on a mission that could well shape the destiny of the Galaxy, and all who dwell within it.\r\n\r\nBack in 1977 I was but a wee 11 year old boy, weened on films from all genres by my movie loving parents, I had no idea that Star Wars was to have the same impact on me as Jaws had two summers previously, where yet again I found myself queueing around the block for two whole hours to see a film in a one screen theatre. My love of cinema firmly cemented, Star Wars was the start of a love affair that lasts to this very day.\r\n\r\nAs the years have rolled by and my love of cinema has taken on more in-depth and serious tones, I have come to realise that Star Wars proves to be a far from flawless picture. Certainly its detractors do point to some frayed acting and call the plot structure a jazzed up good versus evil axis, while the charge of George Lucas referencing many prior pictures most assuredly stands, but really do those things matter? No they do not, because Star Wars opened up a new world of cinema, something of a portal to youngsters such as I, it got people talking and debating about the merits of model work in films (which is of an extraordinary high standard here), it nudged film makers to explore being bigger and bolder in their approach, and crucially, above all else, it got film goers hungry again, a hankering for more please if you may. Now it has to be said that all that followed 20th Century Fox is historic blockbuster did not run with the baton, in fact most pale into comparison on impact value, but for better or worse (depending on the discerning viewers peccadilloes), Star Wars stands as a bastion of adventure laden entertainment.\r\n\r\nIt is by definition one of the most successful films in history, George Lucas perhaps did not know it at the time, but in what was to become an almost operatic anthology, he did not just make a movie, he created a whole new world seeping with style and rich texture. Almost as amazing as the success of the series, is how it has become part of modern day pop culture, anything from religion to everyday speak has at some time or another referenced Lucas baby. Ultimately, though, it is one single thing that made (and still does make) Star Wars so great, it is that it has the ability to lift the audience into a rousing united feel good cheer; and that is something that few films can ever lay claim too. In 1977 it was an awe inspiring event to watch in the theatre, now here in my middle age it is an event that is like hugging a dear old friend, a friend that I know will never ever let me down no matter how many times I turn to it. 10/10",
                "created_at": "2019-07-21T07:04:26.939Z",
                "id": "5d340e7a2f8d090388d21ff2",
                "updated_at": "2019-07-23T15:30:47.707Z",
                "url": "https://www.themoviedb.org/review/5d340e7a2f8d090388d21ff2"
              }
            ],
            "total_pages": 1,
            "total_results": 3
          }', true);
    }

    public function mockGetSimilarResponse(): array
    {
        return json_decode('{
            "page": 1,
            "results": [
              {
                "adult": false,
                "backdrop_path": null,
                "genre_ids": [
                  28
                ],
                "id": 106912,
                "original_language": "en",
                "original_title": "Darna! Ang Pagbabalik",
                "overview": "Valentina, Darna is snake-haired arch enemy, is trying to take over the Phillipines through subliminal messages on religious TV shows. Darna has her own problems, however, as she has lost her magic pearl and with it the ability to transform into her scantily clad super self. Trapped as her alter-ego, the plucky reporter Narda, she must try to regain the pearl and foil Valentina is plans.",
                "release_date": "1994-05-09",
                "poster_path": null,
                "popularity": 1.012564,
                "title": "Darna: The Return",
                "video": false,
                "vote_average": 0,
                "vote_count": 0
              }
            ],
            "total_pages": 9,
            "total_results": 168
          }', true);
    }

    public function mockGetTranslationsResponse(): array
    {
        return json_decode('{
        "id": 550,
        "translations": [
            {
            "iso_3166_1": "UA",
            "iso_639_1": "uk",
            "name": "Український",
            "english_name": "Ukrainian",
            "data": {
                "title": "Бійцівський клуб",
                "overview": "Джек, страждає хронічним безсонням і відчайдушно намагається вирватися з нудного життя. Саме тоді він зустрічає Тайлера Дердена, торговця із збоченою філософією. Тайлер впевнений, що самовдосконалення - доля слабких, а саморуйнування - єдине, заради чого варто жити. І ось вже Джек і Тайлер луплять один одному пики на стоянці перед баром, що приносить їм неабияке задоволення. Залучаючи інших чоловіків до простих радощів фізичної жорстокості, Джек і Тайлер засновують таємний Бійцівський Клуб, який має величезний успіх. Але Джека чекає шокуюче відкриття, здатне змінити все...",
                "homepage": ""
            }
            },
            {
            "iso_3166_1": "DE",
            "iso_639_1": "de",
            "name": "Deutsch",
            "english_name": "German",
            "data": {
                "title": "",
                "overview": "Ein Yuppie findet beim charismatischen Tyler Durden Unterschlupf, nachdem seine Wohnung in die Luft gejagt wird. Ein Gerangel zwischen den beiden entwickelt sich zu einer Schlägerei, die mit der Erkenntnis endet, dass man sich nach einer ordentlichen Portion Prügel einfach besser fühlt. Der \"Fight Club\" ist geboren. Immer mehr Männer versammeln sich, um sich zu schlagen - und gestärkt in den Alltag zu gehen. Wie ein Virus greift das Konzept um sich, doch für Tyler ist der Kampfverein nur die erste Stufe, um die USA in die Knie zu zwingen.",
                "homepage": ""
            }
            },
            {
            "iso_3166_1": "PT",
            "iso_639_1": "pt",
            "name": "Português",
            "english_name": "Portuguese",
            "data": {
                "title": "Clube de Combate",
                "overview": "Jack (Edward Norton) é um executivo que trabalha como investigador de seguros, tem uma boa vida financeira, mas sofre com problemas de insônia. Para tentar se curar, ele começa a freqüentar terapias em grupo, mas sua vida vira de cabeça para baixo quando ele conhece Tyler (Brad Pitt). Com ele, forma um clube da luta, onde pessoas são amigas, mas se esmurram violentamente em algumas noites. Tudo ganha propósitos maiores quando as coisas começam a ficar loucas e surreais.",
                "homepage": "http://www.welcometofc.com/"
            }
            },
            {
            "iso_3166_1": "NL",
            "iso_639_1": "nl",
            "name": "Nederlands",
            "english_name": "Dutch",
            "data": {
                "title": "",
                "overview": "Een verzekeringsinspecteur die aan chronische slapeloosheid lijdt probeert wanhopig uit zijn oersaaie bestaan te ontsnappen. Bij toeval ontmoet hij Tyler Durden, een charismatische zeepverkoper met een bizarre levensfilosofie. Tyler gelooft namelijk dat \"zelfverbetering\" enkel voor de zwakken is, het is \"zelfvernieling\" die het leven meer waarde geeft. Samen met Tyler organiseert hij de ultieme vorm van ontspanning: zogeheten \"Fight Clubs\", waar gewone jonge mannen het beest in zichzelf loslaten in blotevuistgevechten. Het bevrijdende effect op de deelnemende mannen doet een vreemd soort kameraadschap ontstaan, dat al snel gevaarlijke vormen aanneemt.",
                "homepage": ""
            }
            },
            {
            "iso_3166_1": "RU",
            "iso_639_1": "ru",
            "name": "Pусский",
            "english_name": "Russian",
            "data": {
                "title": "Бойцовский клуб",
                "overview": "Терзаемый хронической бессоницей и отчаянно пытающийся вырваться из мучительно скучной жизни клерк встречает некоего Тайлера Дардена, харизматического торговца мылом с извращенной философией. Тайлер уверен, что самосовершенствование — удел слабых, а саморазрушение — единственное, ради чего стоит жить.",
                "homepage": ""
            }
            },
            {
            "iso_3166_1": "IT",
            "iso_639_1": "it",
            "name": "Italiano",
            "english_name": "Italian",
            "data": {
                "title": "Fight Club",
                "overview": "Un uomo di trentanni è insofferente su tutto e la notte non riesce più a dormire. In cerca di qualche luogo dove scaricare la propria ansia si mette a frequentare quei corsi dove gruppi di malati gravi si riuniscono e confessano agli altri le rispettive situazioni. Mentre si lascia andare alla commozione e al pianto di fronte a quello che vede, luomo fa la conoscenza prima di Marla Singer poi di Tyler Durden. Lei è una ragazza a sua volta alla deriva, incapace di scelte o decisioni; lui è un tipo deciso e vigoroso con unidea precisa in testa. Tyler fa saltare per aria lappartamento delluomo e i due vanno a vivere insieme in una casa fatiscente. Deciso a coinvolgerlo nel suo progetto, Tyler lo fa entrare in un Fight Club, uno stanzone sotterraneo dove ci si riunisce per picchiarsi e in questo modo sentirsi di nuovo vivi...",
                "homepage": ""
            }
            },
            {
            "iso_3166_1": "TR",
            "iso_639_1": "tr",
            "name": "Türkçe",
            "english_name": "Turkish",
            "data": {
                "title": "Dövüş Kulübü",
                "overview": "Dövüş kulübünün ilk kuralı, dövüş kulübü hakkında konuşmamaktır. Dövüş kulübünün ikinci kuralı da, kulüp hakkında konuşmamaktır... Filmin baş kişisi, sıradan hayatının girdaplarında bunalımlar geçiren bir sigorta müfettişi olan Jack, Kanserli olmadığı halde, uykusuzluğunu yenmek ve hayatına anlam katmak adına, kanserlilere moral destek sağlayan terapi gruplarına katılır. Orada, Marla Singer adlı bir kızla garip bir yakınlık kurar. Bir iş gezisi dönüşü ise, Tyler Durden adlı egzantrik karakterle tanışır. Durden, Jackin olmak isteyip de olamadığı adam gibidir. Tylerın girişimleriyle bir yeraltı faaliyeti olarak başlayan dövüş kulübü, Jacke hayatında yepyeni kapılar açacaktır... Ve tabii, bu kapılardan ister istemez Marla geçecektir... Fakat... Tyler Durden gerçekte kimdir?",
                "homepage": ""
            }
            },
            {
            "iso_3166_1": "SE",
            "iso_639_1": "sv",
            "name": "svenska",
            "english_name": "Swedish",
            "data": {
                "title": "Fight Club",
                "overview": "Brad Pitt och Edward Norton gör två knockoutbra roller i denna häpnadsväckande och originella thriller med ironisk underton av David Fincher, regissören till Seven. Norton spelar Jack, en kroniskt sömnlös man som desperat försöker fly sitt olidligt tråkiga liv. Men så möter han Tyler Durden (Pitt) en karismatisk tvålförsäljare med en snedvriden filosofi. Tyler menar att självförbättring är för de svaga - det är självdestruktion som verkligen gör livet värt att leva. Inom kort är Jack och Tyler i full gång med att mörbulta varandra på en parkeringsplats. Ett renande slagsmål med en endorfinkick utan dess like. För att introducera andra män i denna enkla lycka av fysiskt våld bildar Jack och Tyler en hemlig \"Fight Club\" som snabbt blir omåttligt populär. Men en hemsk överraskning väntar Jack, en sanning som kommer att förändra allt... Filmen innehåller också kommentarer av David Fincher, Brad Pitt, Edward Norton och Helena Bonham Carter.",
                "homepage": ""
            }
            },
            {
            "iso_3166_1": "PL",
            "iso_639_1": "pl",
            "name": "Polski",
            "english_name": "Polish",
            "data": {
                "title": "Podziemny krąg",
                "overview": "Co ty możesz o sobie wiedzieć, jeśli nigdy nie walczyłeś? W tym niezwykłym, pełnym niespodziewanych zwrotów akcji i nie pozbawionym swoistego humoru filmie w reżyserii Davida Finchera (\"Siedem\") oryginalne i dynamiczne kreacje stworzyli Brad Pitt (\"Siedem\") i Edward Norton (\"Lęk pierwotny\"). Jack (Norton) cierpi na chroniczną bezsenność i jest całkowicie znudzony swym dotychczasowym życiem. Do czasu, gdy spotyka charyzmatycznego Tylera Durdena (Pitt) - sprzedawcę mydła o dość pokrętnej filozofii życia... Uważa on bowiem, że samo-doskonalenie jest dla słabeuszy, a to co rzeczywiście sprawia, że warto żyć to samo-destrukcja.",
                "homepage": ""
            }
            },
            {
            "iso_3166_1": "CZ",
            "iso_639_1": "cs",
            "name": "Český",
            "english_name": "Czech",
            "data": {
                "title": "Klub rváčů",
                "overview": "Když nemůžete půl roku usnout, celý okolní svět vám začne připadat jako nekonečný sen. Všechno kolem vás je nedokonalou xeroxovou kopií sebe sama. Chodíte do práce, díváte se na televizi a jste vděčni za to, když občas ztratíte vědomí a nevíte o světě. Lidí s podobnými problémy moc není, ale mladý úspěšný úředník, který si říká Jack, je jedním z nich. Má slušnou práci, vydělává slušné peníze, ale trpí nejtěžší formou nespavosti. Na služební cestě se Jack seznámí s Tylerem Durdenem, který mu nabídne příbytek pod podmínkou, že mu vrazí pořádnou ránu. Tato \"výměna názorů\" se oběma zalíbí a brzy vznikne první Klub rváčů. Místo, kde můžou mladí muži, znechucení světem, odložit své starosti a stát se na pár minut zvířaty.",
                "homepage": ""
            }
            },
            {
            "iso_3166_1": "IL",
            "iso_639_1": "he",
            "name": "עִבְרִית",
            "english_name": "Hebrew",
            "data": {
                "title": "מועדון קרב",
                "overview": "יאפי הסובל מנדודי שינה ועייפות כרונית מתחיל לבקר בסדנאות שיקום של חולי סרטן, אלכוהוליסטים אנונימיים וארגונים אחרים כדי להגיע להתרגשות בחייו. שם הוא פוגש צעירה משועממת ומתחזה כמוהו, איתה הוא מפתח קשר של אהבה/שנאה. במקביל הוא מתחבר אל צעיר ניהיליסט, המתפרנס מייצור סבון משומן אדם ובז לכל מה שקשור לממסד וחוק. השניים מקימים מועדון אגרוף בלתי חוקי לאנשים המחפשים פורקן מחוץ למסגרת הבורגנית. הקרבות מזרימים אדרנלין לדם, אך גם מובילים להקמתה של כת אנרכיסטית, מיליטנטית ומסוכנת.",
                "homepage": ""
            }
            },
            {
            "iso_3166_1": "RS",
            "iso_639_1": "sr",
            "name": "Srpski",
            "english_name": "Serbian",
            "data": {
                "title": "Борилачки клуб",
                "overview": "Усамљени безимени тридесетогодишњак (Едвард Нортон), запослен као кординатор за опозив у ауто-компанији, има проблема са несаницом коју покушава да реши на разне начине. У авиону упознаје Тајлера Дардена (Бред Пит), произвођача и продавца сапуна, са којим ће се спријатељити и основати удружење „Борилачки клуб“ које ће од простог малог друштва где људи после напорног дана долазе да се испразне постати тајни и добро организован анархистички покрет.",
                "homepage": ""
            }
            },
            {
            "iso_3166_1": "JP",
            "iso_639_1": "ja",
            "name": "日本語",
            "english_name": "Japanese",
            "data": {
                "title": "ファイト・クラブ",
                "overview": "空虚な生活を送るヤング・エグゼクティブのジャックは、謎の男テイラーに導かれるまま、謎の秘密組織「ファイト・クラブ」のメンバーになる。そこは鍛え抜かれた男達が己の拳のみを武器に闘いを繰り広げる、壮絶で危険な空間だった。",
                "homepage": ""
            }
            },
            {
            "iso_3166_1": "GR",
            "iso_639_1": "el",
            "name": "ελληνικά",
            "english_name": "Greek",
            "data": {
                "title": "",
                "overview": "Ένα στέλεχος που πάσχει από αϋπνίες βρίσκει τον αληθινό εαυτό του στα \"Fight Club\", όπου συμμετέχει σε αγώνες πυγμαχίας με γυμνά χέρια. Ο ιδρυτής των \"Fight Club\", ωστόσο, αποδεικνύεται μια επικίνδυνη προσωπικότητα, που επιδίδεται σε πράξεις τρομοκρατίας ενάντια στην καθεστηκυία τάξη.",
                "homepage": ""
            }
            },
            {
            "iso_3166_1": "BG",
            "iso_639_1": "bg",
            "name": "български език",
            "english_name": "Bulgarian",
            "data": {
                "title": "Боен клуб",
                "overview": "Разказвачът (Едуард Нортън) е самотник, чийто живот е безцелен низ от незначителни случки. Промяната започва едва след запознанството му с агресивния нихилист Джак (Брад Пит). Той го въвежда в подземния свят на тъмни сделки и машинации. Разказвача се включва като участник в кървави боксови двубои, които не му носят очакваното удовлетворение. Постепенно той осъзнава, че губи контрол над себе си, откривайки, че мачовете са част от зловещ план?",
                "homepage": ""
            }
            },
            {
            "iso_3166_1": "KR",
            "iso_639_1": "ko",
            "name": "한국어/조선말",
            "english_name": "Korean",
            "data": {
                "title": "파이트 클럽",
                "overview": "자동차 회사의 리콜 심사관으로 일하는 주인공(에드워드 노튼)은 일상의 무료함과 공허함 속에서 늘 새로운 탈출을 꿈꾼다. 그는 비행기에서 자신을 비누 제조업자라고 소개하는 타일러 더든(브래드 피트)을 만난다. 집에 돌아온 주인공은 아파트가 누군가에 의해 폭파되었음을 발견하고, 타일러에게 도움을 청해 함께 생활하게 된다. 어느 날 밤 타일러는 주인공에게 자신을 때려달라고 부탁한다. 사람은 싸워봐야 진정한 자신을 알 수 있다는 것이다. 결국 이들은 매주 토요일 밤 술집 지하에서 맨주먹으로 격투를 벌이는 파이트 클럽을 결성하기에 이르는데...",
                "homepage": ""
            }
            },
            {
            "iso_3166_1": "SK",
            "iso_639_1": "sk",
            "name": "Slovenčina",
            "english_name": "Slovak",
            "data": {
                "title": "Klub bitkárov",
                "overview": "Keď nemôžete pol roka zaspať, celý okolitý svet vám začne pripadať ako nekonečný sen. Všetko okolo vás je nedokonalou xeroxovou kópiou seba samého. Chodíte do práce, pozeráte sa na televíziu a ste vďační za to, keď občas stratíte vedomie a neviete o svete. Ľudí s podobnými problémami moc nie je, ale mladý úspešný úradník, ktorý si hovorí Jack, je jedným z nich. Má slušnú prácu, zarába slušné peniaze, ale trpí najťažšou formou nespavosti. Na služobnej ceste sa Jack zoznámi s Tylerom Durdenom, ktorý mu ponúkne príbytok pod podmienkou, že mu vrazí poriadnu ranu. Táto \"výmena názorov\" sa obom zapáči a čoskoro vznikne prvý Klub bitkárov. Miesto, kde môžu mladí muži, znechutení svetom, odložiť svoje starosti a stať sa na pár minút zvieratami.",
                "homepage": ""
            }
            },
            {
            "iso_3166_1": "SA",
            "iso_639_1": "ar",
            "name": "العربية",
            "english_name": "Arabic",
            "data": {
                "title": "",
                "overview": "",
                "homepage": ""
            }
            },
            {
            "iso_3166_1": "LV",
            "iso_639_1": "lv",
            "name": "Latviešu",
            "english_name": "Latvian",
            "data": {
                "title": "Cīņas klubs",
                "overview": "",
                "homepage": ""
            }
            },
            {
            "iso_3166_1": "BR",
            "iso_639_1": "pt",
            "name": "Português",
            "english_name": "Portuguese",
            "data": {
                "title": "Clube da Luta",
                "overview": "Jack (Edward Norton) é um executivo jovem, trabalha como investigador de seguros, mora confortavelmente, mas ele está ficando cada vez mais insatisfeito com sua vida medíocre. Para piorar ele está enfrentando uma terrível crise de insônia, até que encontra uma cura inusitada para o sua falta de sono ao frequentar grupos de auto-ajuda. Nesses encontros ele passa a conviver com pessoas problemáticas como a viciada Marla Singer (Helena Bonham Carter) e a conhecer estranhos como Tyler Durden (Brad Pitt). Misterioso e cheio de ideias, Tyler apresenta para Jack um grupo secreto que se encontra para extravasar suas angústias e tensões através de violentos combates corporais.",
                "homepage": ""
            }
            },
            {
            "iso_3166_1": "AZ",
            "iso_639_1": "az",
            "name": "Azərbaycan",
            "english_name": "Azerbaijani",
            "data": {
                "title": "Döyüshçü Klubu",
                "overview": "",
                "homepage": ""
            }
            },
            {
            "iso_3166_1": "ET",
            "iso_639_1": "et",
            "name": "Eesti",
            "english_name": "Estonian",
            "data": {
                "title": "Kaklusklubi",
                "overview": "",
                "homepage": ""
            }
            },
            {
            "iso_3166_1": "LT",
            "iso_639_1": "lt",
            "name": "Lietuvikai",
            "english_name": "Lithuanian",
            "data": {
                "title": "Kovos klubas",
                "overview": "Nemigos kamuojamas Džekas lankosi įvairiuose nelaimėlių susitikimuose, klausosi jų išpažinčių ir drauge verkia. Jis skraido lėktuvais, kiekvienąkart tikėdamasis katastrofos. Tačiau kartą skrisdamas jis sutinka spalvingą asmenybę. Tailerio gyvenimas nepaprastas - nerūpestingas ir linksmas. Jis kartais linksmai ir nerūpestingai paprašo trenkti jam į galvą... Džekas neatsisako. Todėl tarp draugų užverda rimtos muštynės, ir netrukus jiedu įkuria klubą, kur vaikinai gali muštis iki sąmonės netekimo...",
                "homepage": ""
            }
            },
            {
            "iso_3166_1": "MK",
            "iso_639_1": "mk",
            "name": "",
            "english_name": "Macedonian",
            "data": {
                "title": "Borechki Klub",
                "overview": "",
                "homepage": ""
            }
            },
            {
            "iso_3166_1": "HR",
            "iso_639_1": "hr",
            "name": "Hrvatski",
            "english_name": "Croatian",
            "data": {
                "title": "Klub boraca",
                "overview": "",
                "homepage": ""
            }
            },
            {
            "iso_3166_1": "TW",
            "iso_639_1": "tw",
            "name": "",
            "english_name": "Twi",
            "data": {
                "title": "鬥陣俱樂部",
                "overview": "",
                "homepage": ""
            }
            },
            {
            "iso_3166_1": "RO",
            "iso_639_1": "ro",
            "name": "Română",
            "english_name": "Romanian",
            "data": {
                "title": "Clubul de lupte",
                "overview": "Un insomniac gata să cedeze și un vânzător de săpun fără scrupule își canalizează agresiunea masculină într-o formă de terapie nouă și șocantă. Ideea lor se prinde și „cluburi de luptă” se formează în fiecare oraș, până când apare un excentric și pornește o spirală ieșită de sub control către uitare.",
                "homepage": ""
            }
            },
            {
            "iso_3166_1": "TW",
            "iso_639_1": "zh",
            "name": "普通话",
            "english_name": "Mandarin",
            "data": {
                "title": "鬥陣俱樂部",
                "overview": "傑克（愛德華諾頓飾演）是一個充滿中年危機意識的人，他非常憎恨自己的生活及一切，再加上他患有嚴重的失眠症，所以他常常參加各種團體諮詢會，只為了能接觸人群。在某一個團體諮詢會上，傑克遇上了一個跟他同樣理由來參加的女煙槍，瑪拉（海倫娜寶漢卡特飾演）。 在一個商務旅行中，傑克在飛機上遇到賣肥皂的商人－泰勒（布萊德彼特飾演），兩人因緣際會地成了好友，並開始創建了「鬥陣俱樂部」：一個讓彼此不戴護具而互毆的聚會，宗旨在發洩情緒。 某夜，泰勒在傑克的公寓中把瑪拉給「上」了，這讓傑克非常忌妒。同時「鬥陣俱樂部」也成了全國性的地下大組織，所有成員都將泰勒視為教父。為了辨識起見，成員還都剃了光頭。 傑克對於「鬥陣俱樂部」的現況及泰勒的瘋狂模樣越來越無法忍受，所以他決定疏遠泰勒。但是，此時的「鬥陣俱樂部」成員卻發起全國性的暴動，他們炸毀了不少建築物......，一切的局勢都是傑克始料未及的，他該如何解決這混亂的現狀？「鬥陣俱樂部」又會瘋狂成什麼樣子？ 傑克與泰勒之間的恩恩怨怨會如何了結？",
                "homepage": ""
            }
            },
            {
            "iso_3166_1": "MX",
            "iso_639_1": "es",
            "name": "Español",
            "english_name": "Spanish",
            "data": {
                "title": "El club de la pelea",
                "overview": "Un joven hastiado de su gris y monótona vida lucha contra el insomnio. En un viaje en avión conoce a un carismático vendedor de jabón que sostiene una teoría muy particular: el perfeccionismo es cosa de gentes débiles; sólo la autodestrucción hace que la vida merezca la pena. Ambos deciden entonces fundar un club secreto de lucha, donde poder descargar sus frustaciones y su ira, que tendrá un éxito arrollador.",
                "homepage": ""
            }
            },
            {
            "iso_3166_1": "SI",
            "iso_639_1": "sl",
            "name": "Slovenščina",
            "english_name": "Slovenian",
            "data": {
                "title": "Klub golih pesti",
                "overview": "Fight Club ni le prispodoba o (samo)destruktivnem begu posameznika iz ujetosti potrošniškega nesmisla, temveč (tudi) parabola upora zoper nezmožnost poistovetenja s prvobitnim moškim/očetovskim principom — odraža se v sprevrženi percepciji psihosocialnih norm in nevrotični konfrontaciji ter boju (dobesedno \"z golimi pestmi\") s samim seboj. Dodajmo še patološke predstave o ljubezenski zvezi in vlogi ženske, metaforični upor maskuliniziranega segmenta potlačene moške dominantnosti, ki v ničemer ne najde prave identifikacije in opore, zato njegov dezorientirani razcepljeni um primanjkljaj kompenzira tako, da ustvarja namišljene alegorične osebnosti — ter izvrstno igralsko zasedbo (Edward Norton, Brad Pitt, Helena Bontham Carter) — pa dobimo enega najbolj izvirnih (in vplivnih) produktov ameriške literature in kinematografije zadnjih desetletij.",
                "homepage": ""
            }
            },
            {
            "iso_3166_1": "TH",
            "iso_639_1": "th",
            "name": "ภาษาไทย",
            "english_name": "Thai",
            "data": {
                "title": "ดิบดวลดิบ",
                "overview": "ไทเลอร์ (แบรด พิทท์) กล่าวว่า ทุกสิ่งทุกอย่างที่คุณครอบครองอยู่นั้น ท้ายที่สุดแล้วพวกมันก็จะครอบงำคุณเสีย แต่ถ้าหากคุณสูญสิ้นทุกสิ่งเมื่อใด คุณก็จะกล้าทำอะไรต่อมิอะไรได้อย่างไร้กังวลตลอดไป ซึ่ง Fight Club เปรียบได้กับอิสรภาพแบบนั้น \"",
                "homepage": ""
            }
            },
            {
            "iso_3166_1": "US",
            "iso_639_1": "en",
            "name": "English",
            "english_name": "English",
            "data": {
                "title": "",
                "overview": "A ticking-time-bomb insomniac and a slippery soap salesman channel primal male aggression into a shocking new form of therapy. Their concept catches on, with underground \"fight clubs\" forming in every town, until an eccentric gets in the way and ignites an out-of-control spiral toward oblivion.",
                "homepage": "http://www.foxmovies.com/movies/fight-club"
            }
            },
            {
            "iso_3166_1": "ES",
            "iso_639_1": "es",
            "name": "Español",
            "english_name": "Spanish",
            "data": {
                "title": "El club de la lucha",
                "overview": "Un joven sin ilusiones lucha contra su insomnio, consecuencia quizás de su hastío por su gris y rutinaria vida. En un viaje en avión conoce a Tyler Durden, un carismático vendedor de jabón que sostiene una filosofía muy particular: el perfeccionismo es cosa de gentes débiles; en cambio, la autodestrucción es lo único que hace que realmente la vida merezca la pena. Ambos deciden entonces formar un club secreto de lucha donde descargar sus frustaciones y su ira que tendrá un éxito arrollador.",
                "homepage": ""
            }
            },
            {
            "iso_3166_1": "FR",
            "iso_639_1": "fr",
            "name": "Français",
            "english_name": "French",
            "data": {
                "title": "Fight Club",
                "overview": "Le narrateur, sans identité précise, vit seul, travaille seul, dort seul, mange seul ses plateaux-repas pour une personne comme beaucoup dautres personnes seules qui connaissent la misère humaine, morale et sexuelle. Mais un jour il fait la rencontre de Tyler Durden, une sorte danarchiste entre gourou et philosophe qui prêche lamour de son prochain. Ensemble ils vont créer le Fight club, un lieu clandestin ou lon peut retrouver sa virilité, léchange et la communication.",
                "homepage": ""
            }
            },
            {
            "iso_3166_1": "HU",
            "iso_639_1": "hu",
            "name": "Magyar",
            "english_name": "Hungarian",
            "data": {
                "title": "Harcosok klubja",
                "overview": "Amerika nagyvárosainak pincéiben egy titkos szervezet működik: ha egy éjjel az utca összes nyilvános telefonja összetörik, ők jártak ott; ha egy köztéri szobor óriás fémgömbje legurul talapzatáról, és szétrombol egy gyorsétkezdét, az az ő művük; ha egy elegáns bank parkolójának összes autóját rettentően összerondítják a galambok - az sem véletlen. Vigyáznak a leveleinkre, átveszik telefonüzeneteinket, kísérnek az utcán: és még csak készülnek a végső dobásra: a nagy bummra... Pedig az egészet csak két túlzottan unatkozó jóbarát találta ki: azzal kezdték, hogy rájöttek, nincs jobb stresszoldó, mint ha alaposan megverik egymást. Pofonokat adni jó. Pofonokat kapni jó. Számukra ez a boldog élet szabálya.",
                "homepage": ""
            }
            },
            {
            "iso_3166_1": "CN",
            "iso_639_1": "zh",
            "name": "普通话",
            "english_name": "Mandarin",
            "data": {
                "title": "搏击俱乐部",
                "overview": "杰克( 爱德华·诺顿 Edward Norton 饰)是一个充满中年危机意识的人，他非常憎恨自己的生活及一切，再加上他患有严重的失眠症，所以他常常参加各种团体谘询会，只为了能接触人群。在某一个团体谘询会上，杰克遇上了一个跟他同样理由来参加的女烟枪，玛拉(海伦娜·邦汉·卡特 Helena Bonham Carter 饰)，在莫名激素的影响下，杰克和玛拉一起逃离了谘询会，两人的情愫因而滋生… 一个偶然的机会，杰克遇到了卖肥皂的商人泰勒(布拉德·皮特 Brad Pitt 饰)，一个浑身充满叛逆、残酷和暴烈的痞子英雄，并因为自己公寓失火而住进了泰勒破旧不堪的家中。两人因缘际会地成为了好朋友，并创立了“搏击俱乐部”：一个让人们不戴护具而徒手搏击，宗旨在于发泄情绪的地下组织。",
                "homepage": ""
            }
            },
            {
            "iso_3166_1": "DK",
            "iso_639_1": "da",
            "name": "Dansk",
            "english_name": "Danish",
            "data": {
                "title": "Fight Club",
                "overview": "Nortons evner som stjerneskuespiller viser sig i rollen som Jack, en kronisk søvnløs der er desperat efter at slippe ud af sit ulideligt kedelige liv. Da møder han Tyler Durden (Pitt), en karismatisk sæbesælger med en usædvanlig livsfilosofi. Tyler synes at udvikling af én selv er for de svage - det er selvdestruktionen der gør livet værd at leve. Inden længe er Jack og Tyler ved at slå hinanden til plukfisk på en parkeringsplads, en slåskamp der giver det ultimative kick. For at introducere andre mænd for de simple glæder ved fysisk vold, danner Jack og Tyler den hemmelige Fight Club der bliver voldsomt populær. Men en chokerende overraskelse der vender op og ned på alt, venter Jack...",
                "homepage": ""
            }
            },
            {
            "iso_3166_1": "FI",
            "iso_639_1": "fi",
            "name": "suomi",
            "english_name": "Finnish",
            "data": {
                "title": "Fight Club",
                "overview": "Jack (Norton) kärsii kroonisesta unettomuudesta ja yrittää epätoivoisesti paeta sietämättömän tylsää elämäänsä. Työmatkalla hän tapaa karismaattisen saippuakauppiaan, Tyler Durdenin (Pitt), jolla on vähintäänkin kieroutunut elämänkatsomus. Tyler uskoo itsetuhon olevan elämän suola. Ennen pitkää Jack ja Tyler purkavat patoutumiaan hakkaamalla toisiaan tohjoksi paikallisbaarin parkkipaikalla, ja huomaavat ankaran nyrkkitappelun tuottavan heille äärimmäisen hyvänolontunteen. Jotta muutkin miehet pääsisivät jyvälle tästä fyysisen väkivallan tuottamasta ilosta, Jack ja Tyler perustavat salaisen tappelukerhon, Fight Clubin, jonka suosio on valtava. Mutta Jackia odottaa järkyttävä yllätys, joka muuttaa kaiken.",
                "homepage": ""
            }
            },
            {
            "iso_3166_1": "NO",
            "iso_639_1": "no",
            "name": "Norsk",
            "english_name": "Norwegian",
            "data": {
                "title": "",
                "overview": "Jack kjeder seg til han møter Tyler, som mener selvdestruksjon gjør livet verdt å leve. For å introdusere andre menn for de simple gleder ved fysisk vold, danner de den hemmelige Fight Club som blir voldsomt populær. Med Brad Pitt og Edward Norton.",
                "homepage": ""
            }
            },
            {
            "iso_3166_1": "IN",
            "iso_639_1": "ml",
            "name": "",
            "english_name": "Malayalam",
            "data": {
                "title": "ഫൈറ്റ് ക്ലബ്ബ്",
                "overview": "",
                "homepage": ""
            }
            },
            {
            "iso_3166_1": "IR",
            "iso_639_1": "fa",
            "name": "فارسی",
            "english_name": "Persian",
            "data": {
                "title": "باشگاه مشت زنی",
                "overview": "«راوی» (نورتن)، جوانی پریشان حال پی می برد که به کمک مشت بازی با دست های برهنه، بیش از هر زمان دیگری احساس زنده بودن می کند. او و «تایلر دردن» (پیت) که به دوستانی صمیمی تبدیل شده اند، هفته ای یک بار با هم ملاقات می کنند تا با هم مشت بازی کنند. در حالی که افراد دیگری هم به باشگاه شان می پیوندند، محفل شان به رغم آن که رازی است بین شرکت کننده هایش، شهرت و محبوبیت یک باشگاه زیرزمینی را پیدا می کند.",
                "homepage": ""
            }
            }
        ]
        }', true);
    }

    public function mockGetVideosResponse(): array
    {
        return json_decode('{
            "id": 550,
            "results": [
              {
                "iso_639_1": "en",
                "iso_3166_1": "US",
                "name": "Fight Club - Theatrical Trailer Remastered in HD",
                "key": "6JnN1DmbqoU",
                "site": "YouTube",
                "size": 1080,
                "type": "Trailer",
                "official": false,
                "published_at": "2015-02-26T03:19:25.000Z",
                "id": "5e382d1b4ca676001453826d"
              },
              {
                "iso_639_1": "en",
                "iso_3166_1": "US",
                "name": "Fight Club | #TBT Trailer | 20th Century FOX",
                "key": "BdJKm16Co6M",
                "site": "YouTube",
                "size": 1080,
                "type": "Trailer",
                "official": true,
                "published_at": "2014-10-02T19:20:22.000Z",
                "id": "5c9294240e0a267cd516835f"
              }
            ]
          }', true);
    }

    public function mockGetWatchProvidersResponse(): array
    {
        return json_decode('{
            "id": 550,
            "results": {
              "AR": {
                "link": "https://www.themoviedb.org/movie/550-fight-club/watch?locale=AR",
                "flatrate": [
                  {
                    "display_priority": 1,
                    "logo_path": "/68MNrwlkpF7WnmNPXLah69CR5cb.jpg",
                    "provider_id": 119,
                    "provider_name": "Amazon Prime Video"
                  },
                  {
                    "display_priority": 7,
                    "logo_path": "/rgbalNWbAuhWklHH5JAnF53Wjey.jpg",
                    "provider_id": 339,
                    "provider_name": "Movistar Play"
                  }
                ],
                "rent": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  },
                  {
                    "display_priority": 8,
                    "logo_path": "/mzu37NQphDvqN2BHKM0Rwq9Es3r.jpg",
                    "provider_id": 167,
                    "provider_name": "Claro video"
                  }
                ],
                "buy": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  }
                ]
              },
              "AT": {
                "link": "https://www.themoviedb.org/movie/550-fight-club/watch?locale=AT",
                "rent": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  },
                  {
                    "display_priority": 7,
                    "logo_path": "/vjKeS7Y9fNyqNtvp2ROCc71iu1u.jpg",
                    "provider_id": 40,
                    "provider_name": "Chili"
                  },
                  {
                    "display_priority": 8,
                    "logo_path": "/pZgeSWpfvD59x6sY6stT5c6uc2h.jpg",
                    "provider_id": 130,
                    "provider_name": "Sky Store"
                  },
                  {
                    "display_priority": 10,
                    "logo_path": "/sVBEF7q7LqjHAWSnKwDbzmr2EMY.jpg",
                    "provider_id": 10,
                    "provider_name": "Amazon Video"
                  },
                  {
                    "display_priority": 14,
                    "logo_path": "/mosNtwHNCqCmjk7n5odKgYYf2GI.jpg",
                    "provider_id": 20,
                    "provider_name": "maxdome Store"
                  },
                  {
                    "display_priority": 18,
                    "logo_path": "/wuViyDkbFp4r7VqI0efPW5hFfQj.jpg",
                    "provider_id": 35,
                    "provider_name": "Rakuten TV"
                  },
                  {
                    "display_priority": 37,
                    "logo_path": "/paq2o2dIfQnxcERsVoq7Ys8KYz8.jpg",
                    "provider_id": 68,
                    "provider_name": "Microsoft Store"
                  }
                ],
                "buy": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  },
                  {
                    "display_priority": 7,
                    "logo_path": "/vjKeS7Y9fNyqNtvp2ROCc71iu1u.jpg",
                    "provider_id": 40,
                    "provider_name": "Chili"
                  },
                  {
                    "display_priority": 8,
                    "logo_path": "/pZgeSWpfvD59x6sY6stT5c6uc2h.jpg",
                    "provider_id": 130,
                    "provider_name": "Sky Store"
                  },
                  {
                    "display_priority": 10,
                    "logo_path": "/sVBEF7q7LqjHAWSnKwDbzmr2EMY.jpg",
                    "provider_id": 10,
                    "provider_name": "Amazon Video"
                  },
                  {
                    "display_priority": 14,
                    "logo_path": "/mosNtwHNCqCmjk7n5odKgYYf2GI.jpg",
                    "provider_id": 20,
                    "provider_name": "maxdome Store"
                  },
                  {
                    "display_priority": 18,
                    "logo_path": "/wuViyDkbFp4r7VqI0efPW5hFfQj.jpg",
                    "provider_id": 35,
                    "provider_name": "Rakuten TV"
                  },
                  {
                    "display_priority": 37,
                    "logo_path": "/paq2o2dIfQnxcERsVoq7Ys8KYz8.jpg",
                    "provider_id": 68,
                    "provider_name": "Microsoft Store"
                  }
                ]
              },
              "AU": {
                "link": "https://www.themoviedb.org/movie/550-fight-club/watch?locale=AU",
                "rent": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  },
                  {
                    "display_priority": 10,
                    "logo_path": "/sVBEF7q7LqjHAWSnKwDbzmr2EMY.jpg",
                    "provider_id": 10,
                    "provider_name": "Amazon Video"
                  },
                  {
                    "display_priority": 12,
                    "logo_path": "/vDCcryHD32b0yMeSCgBhuYavsmx.jpg",
                    "provider_id": 192,
                    "provider_name": "YouTube"
                  },
                  {
                    "display_priority": 34,
                    "logo_path": "/43Ykyf69e9Ca3jmTtefhINkw6PN.jpg",
                    "provider_id": 436,
                    "provider_name": "Fetch TV"
                  },
                  {
                    "display_priority": 37,
                    "logo_path": "/paq2o2dIfQnxcERsVoq7Ys8KYz8.jpg",
                    "provider_id": 68,
                    "provider_name": "Microsoft Store"
                  }
                ],
                "buy": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  },
                  {
                    "display_priority": 10,
                    "logo_path": "/sVBEF7q7LqjHAWSnKwDbzmr2EMY.jpg",
                    "provider_id": 10,
                    "provider_name": "Amazon Video"
                  },
                  {
                    "display_priority": 12,
                    "logo_path": "/vDCcryHD32b0yMeSCgBhuYavsmx.jpg",
                    "provider_id": 192,
                    "provider_name": "YouTube"
                  },
                  {
                    "display_priority": 34,
                    "logo_path": "/43Ykyf69e9Ca3jmTtefhINkw6PN.jpg",
                    "provider_id": 436,
                    "provider_name": "Fetch TV"
                  },
                  {
                    "display_priority": 37,
                    "logo_path": "/paq2o2dIfQnxcERsVoq7Ys8KYz8.jpg",
                    "provider_id": 68,
                    "provider_name": "Microsoft Store"
                  }
                ],
                "flatrate": [
                  {
                    "display_priority": 1,
                    "logo_path": "/68MNrwlkpF7WnmNPXLah69CR5cb.jpg",
                    "provider_id": 119,
                    "provider_name": "Amazon Prime Video"
                  }
                ]
              },
              "BE": {
                "link": "https://www.themoviedb.org/movie/550-fight-club/watch?locale=BE",
                "buy": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  },
                  {
                    "display_priority": 18,
                    "logo_path": "/wuViyDkbFp4r7VqI0efPW5hFfQj.jpg",
                    "provider_id": 35,
                    "provider_name": "Rakuten TV"
                  }
                ],
                "flatrate": [
                  {
                    "display_priority": 1,
                    "logo_path": "/68MNrwlkpF7WnmNPXLah69CR5cb.jpg",
                    "provider_id": 119,
                    "provider_name": "Amazon Prime Video"
                  }
                ],
                "rent": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  },
                  {
                    "display_priority": 18,
                    "logo_path": "/wuViyDkbFp4r7VqI0efPW5hFfQj.jpg",
                    "provider_id": 35,
                    "provider_name": "Rakuten TV"
                  }
                ]
              },
              "BR": {
                "link": "https://www.themoviedb.org/movie/550-fight-club/watch?locale=BR",
                "rent": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  },
                  {
                    "display_priority": 37,
                    "logo_path": "/paq2o2dIfQnxcERsVoq7Ys8KYz8.jpg",
                    "provider_id": 68,
                    "provider_name": "Microsoft Store"
                  }
                ],
                "buy": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  },
                  {
                    "display_priority": 37,
                    "logo_path": "/paq2o2dIfQnxcERsVoq7Ys8KYz8.jpg",
                    "provider_id": 68,
                    "provider_name": "Microsoft Store"
                  }
                ],
                "flatrate": [
                  {
                    "display_priority": 1,
                    "logo_path": "/68MNrwlkpF7WnmNPXLah69CR5cb.jpg",
                    "provider_id": 119,
                    "provider_name": "Amazon Prime Video"
                  }
                ]
              },
              "CA": {
                "link": "https://www.themoviedb.org/movie/550-fight-club/watch?locale=CA",
                "rent": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  },
                  {
                    "display_priority": 10,
                    "logo_path": "/sVBEF7q7LqjHAWSnKwDbzmr2EMY.jpg",
                    "provider_id": 10,
                    "provider_name": "Amazon Video"
                  },
                  {
                    "display_priority": 12,
                    "logo_path": "/vDCcryHD32b0yMeSCgBhuYavsmx.jpg",
                    "provider_id": 192,
                    "provider_name": "YouTube"
                  },
                  {
                    "display_priority": 12,
                    "logo_path": "/xEWgUq2tJyggisxbJ3fNOV9Inj2.jpg",
                    "provider_id": 140,
                    "provider_name": "Cineplex"
                  },
                  {
                    "display_priority": 37,
                    "logo_path": "/paq2o2dIfQnxcERsVoq7Ys8KYz8.jpg",
                    "provider_id": 68,
                    "provider_name": "Microsoft Store"
                  }
                ],
                "flatrate": [
                  {
                    "display_priority": 6,
                    "logo_path": "/cdbemLV18peKH7NmH8MzWCRRD2f.jpg",
                    "provider_id": 305,
                    "provider_name": "Crave Starz"
                  }
                ],
                "buy": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  },
                  {
                    "display_priority": 10,
                    "logo_path": "/sVBEF7q7LqjHAWSnKwDbzmr2EMY.jpg",
                    "provider_id": 10,
                    "provider_name": "Amazon Video"
                  },
                  {
                    "display_priority": 12,
                    "logo_path": "/xEWgUq2tJyggisxbJ3fNOV9Inj2.jpg",
                    "provider_id": 140,
                    "provider_name": "Cineplex"
                  },
                  {
                    "display_priority": 12,
                    "logo_path": "/vDCcryHD32b0yMeSCgBhuYavsmx.jpg",
                    "provider_id": 192,
                    "provider_name": "YouTube"
                  },
                  {
                    "display_priority": 37,
                    "logo_path": "/paq2o2dIfQnxcERsVoq7Ys8KYz8.jpg",
                    "provider_id": 68,
                    "provider_name": "Microsoft Store"
                  }
                ]
              },
              "CH": {
                "link": "https://www.themoviedb.org/movie/550-fight-club/watch?locale=CH",
                "rent": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/dSBzj4T9P7PMUr015gnV7meT2LR.jpg",
                    "provider_id": 150,
                    "provider_name": "SwissCom"
                  },
                  {
                    "display_priority": 8,
                    "logo_path": "/567LmXMmafb8e2jGOmpHDZNl2r8.jpg",
                    "provider_id": 164,
                    "provider_name": "Hollystar"
                  },
                  {
                    "display_priority": 8,
                    "logo_path": "/pZgeSWpfvD59x6sY6stT5c6uc2h.jpg",
                    "provider_id": 130,
                    "provider_name": "Sky Store"
                  },
                  {
                    "display_priority": 18,
                    "logo_path": "/wuViyDkbFp4r7VqI0efPW5hFfQj.jpg",
                    "provider_id": 35,
                    "provider_name": "Rakuten TV"
                  },
                  {
                    "display_priority": 37,
                    "logo_path": "/paq2o2dIfQnxcERsVoq7Ys8KYz8.jpg",
                    "provider_id": 68,
                    "provider_name": "Microsoft Store"
                  }
                ],
                "buy": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/dSBzj4T9P7PMUr015gnV7meT2LR.jpg",
                    "provider_id": 150,
                    "provider_name": "SwissCom"
                  },
                  {
                    "display_priority": 8,
                    "logo_path": "/pZgeSWpfvD59x6sY6stT5c6uc2h.jpg",
                    "provider_id": 130,
                    "provider_name": "Sky Store"
                  },
                  {
                    "display_priority": 8,
                    "logo_path": "/567LmXMmafb8e2jGOmpHDZNl2r8.jpg",
                    "provider_id": 164,
                    "provider_name": "Hollystar"
                  },
                  {
                    "display_priority": 18,
                    "logo_path": "/wuViyDkbFp4r7VqI0efPW5hFfQj.jpg",
                    "provider_id": 35,
                    "provider_name": "Rakuten TV"
                  },
                  {
                    "display_priority": 37,
                    "logo_path": "/paq2o2dIfQnxcERsVoq7Ys8KYz8.jpg",
                    "provider_id": 68,
                    "provider_name": "Microsoft Store"
                  }
                ],
                "flatrate": [
                  {
                    "display_priority": 1,
                    "logo_path": "/68MNrwlkpF7WnmNPXLah69CR5cb.jpg",
                    "provider_id": 119,
                    "provider_name": "Amazon Prime Video"
                  }
                ]
              },
              "CL": {
                "link": "https://www.themoviedb.org/movie/550-fight-club/watch?locale=CL",
                "flatrate": [
                  {
                    "display_priority": 1,
                    "logo_path": "/68MNrwlkpF7WnmNPXLah69CR5cb.jpg",
                    "provider_id": 119,
                    "provider_name": "Amazon Prime Video"
                  },
                  {
                    "display_priority": 7,
                    "logo_path": "/rgbalNWbAuhWklHH5JAnF53Wjey.jpg",
                    "provider_id": 339,
                    "provider_name": "Movistar Play"
                  }
                ],
                "buy": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  }
                ],
                "rent": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  }
                ]
              },
              "CO": {
                "link": "https://www.themoviedb.org/movie/550-fight-club/watch?locale=CO",
                "flatrate": [
                  {
                    "display_priority": 1,
                    "logo_path": "/68MNrwlkpF7WnmNPXLah69CR5cb.jpg",
                    "provider_id": 119,
                    "provider_name": "Amazon Prime Video"
                  },
                  {
                    "display_priority": 7,
                    "logo_path": "/rgbalNWbAuhWklHH5JAnF53Wjey.jpg",
                    "provider_id": 339,
                    "provider_name": "Movistar Play"
                  }
                ],
                "rent": [
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  }
                ],
                "buy": [
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  }
                ]
              },
              "CZ": {
                "link": "https://www.themoviedb.org/movie/550-fight-club/watch?locale=CZ",
                "buy": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  }
                ],
                "flatrate": [
                  {
                    "display_priority": 1,
                    "logo_path": "/68MNrwlkpF7WnmNPXLah69CR5cb.jpg",
                    "provider_id": 119,
                    "provider_name": "Amazon Prime Video"
                  }
                ],
                "rent": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  }
                ]
              },
              "DE": {
                "link": "https://www.themoviedb.org/movie/550-fight-club/watch?locale=DE",
                "rent": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  },
                  {
                    "display_priority": 7,
                    "logo_path": "/vjKeS7Y9fNyqNtvp2ROCc71iu1u.jpg",
                    "provider_id": 40,
                    "provider_name": "Chili"
                  },
                  {
                    "display_priority": 8,
                    "logo_path": "/pZgeSWpfvD59x6sY6stT5c6uc2h.jpg",
                    "provider_id": 130,
                    "provider_name": "Sky Store"
                  },
                  {
                    "display_priority": 10,
                    "logo_path": "/sVBEF7q7LqjHAWSnKwDbzmr2EMY.jpg",
                    "provider_id": 10,
                    "provider_name": "Amazon Video"
                  },
                  {
                    "display_priority": 12,
                    "logo_path": "/vDCcryHD32b0yMeSCgBhuYavsmx.jpg",
                    "provider_id": 192,
                    "provider_name": "YouTube"
                  },
                  {
                    "display_priority": 14,
                    "logo_path": "/mosNtwHNCqCmjk7n5odKgYYf2GI.jpg",
                    "provider_id": 20,
                    "provider_name": "maxdome Store"
                  },
                  {
                    "display_priority": 18,
                    "logo_path": "/wuViyDkbFp4r7VqI0efPW5hFfQj.jpg",
                    "provider_id": 35,
                    "provider_name": "Rakuten TV"
                  },
                  {
                    "display_priority": 25,
                    "logo_path": "/6QfNLK9toSu2bvsWN7A0sEsTz3j.jpg",
                    "provider_id": 178,
                    "provider_name": "EntertainTV"
                  },
                  {
                    "display_priority": 37,
                    "logo_path": "/paq2o2dIfQnxcERsVoq7Ys8KYz8.jpg",
                    "provider_id": 68,
                    "provider_name": "Microsoft Store"
                  }
                ],
                "buy": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  },
                  {
                    "display_priority": 7,
                    "logo_path": "/vjKeS7Y9fNyqNtvp2ROCc71iu1u.jpg",
                    "provider_id": 40,
                    "provider_name": "Chili"
                  },
                  {
                    "display_priority": 8,
                    "logo_path": "/pZgeSWpfvD59x6sY6stT5c6uc2h.jpg",
                    "provider_id": 130,
                    "provider_name": "Sky Store"
                  },
                  {
                    "display_priority": 10,
                    "logo_path": "/sVBEF7q7LqjHAWSnKwDbzmr2EMY.jpg",
                    "provider_id": 10,
                    "provider_name": "Amazon Video"
                  },
                  {
                    "display_priority": 12,
                    "logo_path": "/vDCcryHD32b0yMeSCgBhuYavsmx.jpg",
                    "provider_id": 192,
                    "provider_name": "YouTube"
                  },
                  {
                    "display_priority": 14,
                    "logo_path": "/mosNtwHNCqCmjk7n5odKgYYf2GI.jpg",
                    "provider_id": 20,
                    "provider_name": "maxdome Store"
                  },
                  {
                    "display_priority": 18,
                    "logo_path": "/wuViyDkbFp4r7VqI0efPW5hFfQj.jpg",
                    "provider_id": 35,
                    "provider_name": "Rakuten TV"
                  },
                  {
                    "display_priority": 25,
                    "logo_path": "/6QfNLK9toSu2bvsWN7A0sEsTz3j.jpg",
                    "provider_id": 178,
                    "provider_name": "EntertainTV"
                  },
                  {
                    "display_priority": 37,
                    "logo_path": "/paq2o2dIfQnxcERsVoq7Ys8KYz8.jpg",
                    "provider_id": 68,
                    "provider_name": "Microsoft Store"
                  }
                ]
              },
              "DK": {
                "link": "https://www.themoviedb.org/movie/550-fight-club/watch?locale=DK",
                "rent": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  },
                  {
                    "display_priority": 18,
                    "logo_path": "/wuViyDkbFp4r7VqI0efPW5hFfQj.jpg",
                    "provider_id": 35,
                    "provider_name": "Rakuten TV"
                  },
                  {
                    "display_priority": 19,
                    "logo_path": "/oEntjkQyz84qo1C4FZK9jW1qznl.jpg",
                    "provider_id": 423,
                    "provider_name": "Blockbuster"
                  },
                  {
                    "display_priority": 37,
                    "logo_path": "/paq2o2dIfQnxcERsVoq7Ys8KYz8.jpg",
                    "provider_id": 68,
                    "provider_name": "Microsoft Store"
                  }
                ],
                "buy": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  },
                  {
                    "display_priority": 18,
                    "logo_path": "/wuViyDkbFp4r7VqI0efPW5hFfQj.jpg",
                    "provider_id": 35,
                    "provider_name": "Rakuten TV"
                  },
                  {
                    "display_priority": 19,
                    "logo_path": "/oEntjkQyz84qo1C4FZK9jW1qznl.jpg",
                    "provider_id": 423,
                    "provider_name": "Blockbuster"
                  },
                  {
                    "display_priority": 37,
                    "logo_path": "/paq2o2dIfQnxcERsVoq7Ys8KYz8.jpg",
                    "provider_id": 68,
                    "provider_name": "Microsoft Store"
                  }
                ],
                "flatrate": [
                  {
                    "display_priority": 1,
                    "logo_path": "/68MNrwlkpF7WnmNPXLah69CR5cb.jpg",
                    "provider_id": 119,
                    "provider_name": "Amazon Prime Video"
                  }
                ]
              },
              "EC": {
                "link": "https://www.themoviedb.org/movie/550-fight-club/watch?locale=EC",
                "flatrate": [
                  {
                    "display_priority": 1,
                    "logo_path": "/68MNrwlkpF7WnmNPXLah69CR5cb.jpg",
                    "provider_id": 119,
                    "provider_name": "Amazon Prime Video"
                  },
                  {
                    "display_priority": 7,
                    "logo_path": "/rgbalNWbAuhWklHH5JAnF53Wjey.jpg",
                    "provider_id": 339,
                    "provider_name": "Movistar Play"
                  }
                ],
                "buy": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  }
                ],
                "rent": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  }
                ]
              },
              "EE": {
                "link": "https://www.themoviedb.org/movie/550-fight-club/watch?locale=EE",
                "flatrate": [
                  {
                    "display_priority": 1,
                    "logo_path": "/68MNrwlkpF7WnmNPXLah69CR5cb.jpg",
                    "provider_id": 119,
                    "provider_name": "Amazon Prime Video"
                  }
                ],
                "buy": [
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  }
                ],
                "rent": [
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  }
                ]
              },
              "ES": {
                "link": "https://www.themoviedb.org/movie/550-fight-club/watch?locale=ES",
                "rent": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  },
                  {
                    "display_priority": 18,
                    "logo_path": "/wuViyDkbFp4r7VqI0efPW5hFfQj.jpg",
                    "provider_id": 35,
                    "provider_name": "Rakuten TV"
                  },
                  {
                    "display_priority": 37,
                    "logo_path": "/paq2o2dIfQnxcERsVoq7Ys8KYz8.jpg",
                    "provider_id": 68,
                    "provider_name": "Microsoft Store"
                  }
                ],
                "flatrate": [
                  {
                    "display_priority": 1,
                    "logo_path": "/68MNrwlkpF7WnmNPXLah69CR5cb.jpg",
                    "provider_id": 119,
                    "provider_name": "Amazon Prime Video"
                  }
                ],
                "buy": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  },
                  {
                    "display_priority": 18,
                    "logo_path": "/wuViyDkbFp4r7VqI0efPW5hFfQj.jpg",
                    "provider_id": 35,
                    "provider_name": "Rakuten TV"
                  },
                  {
                    "display_priority": 37,
                    "logo_path": "/paq2o2dIfQnxcERsVoq7Ys8KYz8.jpg",
                    "provider_id": 68,
                    "provider_name": "Microsoft Store"
                  }
                ]
              },
              "FI": {
                "link": "https://www.themoviedb.org/movie/550-fight-club/watch?locale=FI",
                "buy": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  },
                  {
                    "display_priority": 18,
                    "logo_path": "/wuViyDkbFp4r7VqI0efPW5hFfQj.jpg",
                    "provider_id": 35,
                    "provider_name": "Rakuten TV"
                  },
                  {
                    "display_priority": 19,
                    "logo_path": "/oEntjkQyz84qo1C4FZK9jW1qznl.jpg",
                    "provider_id": 423,
                    "provider_name": "Blockbuster"
                  },
                  {
                    "display_priority": 37,
                    "logo_path": "/paq2o2dIfQnxcERsVoq7Ys8KYz8.jpg",
                    "provider_id": 68,
                    "provider_name": "Microsoft Store"
                  }
                ],
                "flatrate": [
                  {
                    "display_priority": 1,
                    "logo_path": "/68MNrwlkpF7WnmNPXLah69CR5cb.jpg",
                    "provider_id": 119,
                    "provider_name": "Amazon Prime Video"
                  }
                ],
                "rent": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  },
                  {
                    "display_priority": 18,
                    "logo_path": "/wuViyDkbFp4r7VqI0efPW5hFfQj.jpg",
                    "provider_id": 35,
                    "provider_name": "Rakuten TV"
                  },
                  {
                    "display_priority": 19,
                    "logo_path": "/oEntjkQyz84qo1C4FZK9jW1qznl.jpg",
                    "provider_id": 423,
                    "provider_name": "Blockbuster"
                  },
                  {
                    "display_priority": 37,
                    "logo_path": "/paq2o2dIfQnxcERsVoq7Ys8KYz8.jpg",
                    "provider_id": 68,
                    "provider_name": "Microsoft Store"
                  }
                ]
              },
              "FR": {
                "link": "https://www.themoviedb.org/movie/550-fight-club/watch?locale=FR",
                "flatrate": [
                  {
                    "display_priority": 1,
                    "logo_path": "/68MNrwlkpF7WnmNPXLah69CR5cb.jpg",
                    "provider_id": 119,
                    "provider_name": "Amazon Prime Video"
                  }
                ],
                "buy": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  },
                  {
                    "display_priority": 11,
                    "logo_path": "/bqgpWEtokIEOF5nsliXca2BQMEn.jpg",
                    "provider_id": 61,
                    "provider_name": "Orange VOD"
                  },
                  {
                    "display_priority": 12,
                    "logo_path": "/vDCcryHD32b0yMeSCgBhuYavsmx.jpg",
                    "provider_id": 192,
                    "provider_name": "YouTube"
                  },
                  {
                    "display_priority": 18,
                    "logo_path": "/wuViyDkbFp4r7VqI0efPW5hFfQj.jpg",
                    "provider_id": 35,
                    "provider_name": "Rakuten TV"
                  },
                  {
                    "display_priority": 18,
                    "logo_path": "/74cM9bbEjdUt7tRtCMv7rnRDKkm.jpg",
                    "provider_id": 58,
                    "provider_name": "Canal VOD"
                  },
                  {
                    "display_priority": 37,
                    "logo_path": "/paq2o2dIfQnxcERsVoq7Ys8KYz8.jpg",
                    "provider_id": 68,
                    "provider_name": "Microsoft Store"
                  }
                ],
                "rent": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  },
                  {
                    "display_priority": 9,
                    "logo_path": "/fBznZkh3Qxp7wNU18ERt7LNMe5D.jpg",
                    "provider_id": 145,
                    "provider_name": "MyTF1vod"
                  },
                  {
                    "display_priority": 11,
                    "logo_path": "/bqgpWEtokIEOF5nsliXca2BQMEn.jpg",
                    "provider_id": 61,
                    "provider_name": "Orange VOD"
                  },
                  {
                    "display_priority": 12,
                    "logo_path": "/vDCcryHD32b0yMeSCgBhuYavsmx.jpg",
                    "provider_id": 192,
                    "provider_name": "YouTube"
                  },
                  {
                    "display_priority": 18,
                    "logo_path": "/wuViyDkbFp4r7VqI0efPW5hFfQj.jpg",
                    "provider_id": 35,
                    "provider_name": "Rakuten TV"
                  },
                  {
                    "display_priority": 18,
                    "logo_path": "/74cM9bbEjdUt7tRtCMv7rnRDKkm.jpg",
                    "provider_id": 58,
                    "provider_name": "Canal VOD"
                  },
                  {
                    "display_priority": 19,
                    "logo_path": "/8TMHKzfYC8vhJpU4Vfa5Knmeg1v.jpg",
                    "provider_id": 59,
                    "provider_name": "Bbox VOD"
                  },
                  {
                    "display_priority": 37,
                    "logo_path": "/paq2o2dIfQnxcERsVoq7Ys8KYz8.jpg",
                    "provider_id": 68,
                    "provider_name": "Microsoft Store"
                  }
                ]
              },
              "GB": {
                "link": "https://www.themoviedb.org/movie/550-fight-club/watch?locale=GB",
                "rent": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  },
                  {
                    "display_priority": 7,
                    "logo_path": "/vjKeS7Y9fNyqNtvp2ROCc71iu1u.jpg",
                    "provider_id": 40,
                    "provider_name": "Chili"
                  },
                  {
                    "display_priority": 8,
                    "logo_path": "/pZgeSWpfvD59x6sY6stT5c6uc2h.jpg",
                    "provider_id": 130,
                    "provider_name": "Sky Store"
                  },
                  {
                    "display_priority": 10,
                    "logo_path": "/sVBEF7q7LqjHAWSnKwDbzmr2EMY.jpg",
                    "provider_id": 10,
                    "provider_name": "Amazon Video"
                  },
                  {
                    "display_priority": 12,
                    "logo_path": "/vDCcryHD32b0yMeSCgBhuYavsmx.jpg",
                    "provider_id": 192,
                    "provider_name": "YouTube"
                  },
                  {
                    "display_priority": 18,
                    "logo_path": "/wuViyDkbFp4r7VqI0efPW5hFfQj.jpg",
                    "provider_id": 35,
                    "provider_name": "Rakuten TV"
                  },
                  {
                    "display_priority": 22,
                    "logo_path": "/uA7pG0PDWFnWWwlLmdG02cmJCzB.jpg",
                    "provider_id": 93,
                    "provider_name": "Talk Talk TV"
                  },
                  {
                    "display_priority": 37,
                    "logo_path": "/paq2o2dIfQnxcERsVoq7Ys8KYz8.jpg",
                    "provider_id": 68,
                    "provider_name": "Microsoft Store"
                  }
                ],
                "flatrate": [
                  {
                    "display_priority": 1,
                    "logo_path": "/68MNrwlkpF7WnmNPXLah69CR5cb.jpg",
                    "provider_id": 9,
                    "provider_name": "Amazon Prime Video"
                  }
                ],
                "buy": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  },
                  {
                    "display_priority": 7,
                    "logo_path": "/vjKeS7Y9fNyqNtvp2ROCc71iu1u.jpg",
                    "provider_id": 40,
                    "provider_name": "Chili"
                  },
                  {
                    "display_priority": 8,
                    "logo_path": "/pZgeSWpfvD59x6sY6stT5c6uc2h.jpg",
                    "provider_id": 130,
                    "provider_name": "Sky Store"
                  },
                  {
                    "display_priority": 10,
                    "logo_path": "/sVBEF7q7LqjHAWSnKwDbzmr2EMY.jpg",
                    "provider_id": 10,
                    "provider_name": "Amazon Video"
                  },
                  {
                    "display_priority": 12,
                    "logo_path": "/vDCcryHD32b0yMeSCgBhuYavsmx.jpg",
                    "provider_id": 192,
                    "provider_name": "YouTube"
                  },
                  {
                    "display_priority": 18,
                    "logo_path": "/wuViyDkbFp4r7VqI0efPW5hFfQj.jpg",
                    "provider_id": 35,
                    "provider_name": "Rakuten TV"
                  },
                  {
                    "display_priority": 37,
                    "logo_path": "/paq2o2dIfQnxcERsVoq7Ys8KYz8.jpg",
                    "provider_id": 68,
                    "provider_name": "Microsoft Store"
                  }
                ]
              },
              "GR": {
                "link": "https://www.themoviedb.org/movie/550-fight-club/watch?locale=GR",
                "flatrate": [
                  {
                    "display_priority": 1,
                    "logo_path": "/68MNrwlkpF7WnmNPXLah69CR5cb.jpg",
                    "provider_id": 119,
                    "provider_name": "Amazon Prime Video"
                  }
                ],
                "rent": [
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  }
                ],
                "buy": [
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  }
                ]
              },
              "HU": {
                "link": "https://www.themoviedb.org/movie/550-fight-club/watch?locale=HU",
                "rent": [
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  },
                  {
                    "display_priority": 12,
                    "logo_path": "/vDCcryHD32b0yMeSCgBhuYavsmx.jpg",
                    "provider_id": 192,
                    "provider_name": "YouTube"
                  }
                ],
                "buy": [
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  },
                  {
                    "display_priority": 12,
                    "logo_path": "/vDCcryHD32b0yMeSCgBhuYavsmx.jpg",
                    "provider_id": 192,
                    "provider_name": "YouTube"
                  }
                ],
                "flatrate": [
                  {
                    "display_priority": 1,
                    "logo_path": "/49zBTsyFqE0u2hO8NxlyVmjFZDH.jpg",
                    "provider_id": 250,
                    "provider_name": "Horizon"
                  },
                  {
                    "display_priority": 1,
                    "logo_path": "/68MNrwlkpF7WnmNPXLah69CR5cb.jpg",
                    "provider_id": 119,
                    "provider_name": "Amazon Prime Video"
                  }
                ]
              },
              "ID": {
                "link": "https://www.themoviedb.org/movie/550-fight-club/watch?locale=ID",
                "flatrate": [
                  {
                    "display_priority": 1,
                    "logo_path": "/68MNrwlkpF7WnmNPXLah69CR5cb.jpg",
                    "provider_id": 119,
                    "provider_name": "Amazon Prime Video"
                  }
                ],
                "rent": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  }
                ],
                "buy": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  }
                ]
              },
              "IE": {
                "link": "https://www.themoviedb.org/movie/550-fight-club/watch?locale=IE",
                "rent": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  },
                  {
                    "display_priority": 8,
                    "logo_path": "/pZgeSWpfvD59x6sY6stT5c6uc2h.jpg",
                    "provider_id": 130,
                    "provider_name": "Sky Store"
                  },
                  {
                    "display_priority": 18,
                    "logo_path": "/wuViyDkbFp4r7VqI0efPW5hFfQj.jpg",
                    "provider_id": 35,
                    "provider_name": "Rakuten TV"
                  },
                  {
                    "display_priority": 37,
                    "logo_path": "/paq2o2dIfQnxcERsVoq7Ys8KYz8.jpg",
                    "provider_id": 68,
                    "provider_name": "Microsoft Store"
                  }
                ],
                "flatrate": [
                  {
                    "display_priority": 1,
                    "logo_path": "/68MNrwlkpF7WnmNPXLah69CR5cb.jpg",
                    "provider_id": 119,
                    "provider_name": "Amazon Prime Video"
                  }
                ],
                "buy": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  },
                  {
                    "display_priority": 8,
                    "logo_path": "/pZgeSWpfvD59x6sY6stT5c6uc2h.jpg",
                    "provider_id": 130,
                    "provider_name": "Sky Store"
                  },
                  {
                    "display_priority": 18,
                    "logo_path": "/wuViyDkbFp4r7VqI0efPW5hFfQj.jpg",
                    "provider_id": 35,
                    "provider_name": "Rakuten TV"
                  },
                  {
                    "display_priority": 37,
                    "logo_path": "/paq2o2dIfQnxcERsVoq7Ys8KYz8.jpg",
                    "provider_id": 68,
                    "provider_name": "Microsoft Store"
                  }
                ]
              },
              "IN": {
                "link": "https://www.themoviedb.org/movie/550-fight-club/watch?locale=IN",
                "buy": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  },
                  {
                    "display_priority": 12,
                    "logo_path": "/vDCcryHD32b0yMeSCgBhuYavsmx.jpg",
                    "provider_id": 192,
                    "provider_name": "YouTube"
                  }
                ],
                "flatrate": [
                  {
                    "display_priority": 1,
                    "logo_path": "/68MNrwlkpF7WnmNPXLah69CR5cb.jpg",
                    "provider_id": 119,
                    "provider_name": "Amazon Prime Video"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/ycJT3Xh9E4OH3eW1QZ1OOR9pCCj.jpg",
                    "provider_id": 121,
                    "provider_name": "Voot"
                  }
                ],
                "rent": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  },
                  {
                    "display_priority": 12,
                    "logo_path": "/vDCcryHD32b0yMeSCgBhuYavsmx.jpg",
                    "provider_id": 192,
                    "provider_name": "YouTube"
                  }
                ]
              },
              "IT": {
                "link": "https://www.themoviedb.org/movie/550-fight-club/watch?locale=IT",
                "buy": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 7,
                    "logo_path": "/vjKeS7Y9fNyqNtvp2ROCc71iu1u.jpg",
                    "provider_id": 40,
                    "provider_name": "Chili"
                  },
                  {
                    "display_priority": 18,
                    "logo_path": "/wuViyDkbFp4r7VqI0efPW5hFfQj.jpg",
                    "provider_id": 35,
                    "provider_name": "Rakuten TV"
                  },
                  {
                    "display_priority": 37,
                    "logo_path": "/paq2o2dIfQnxcERsVoq7Ys8KYz8.jpg",
                    "provider_id": 68,
                    "provider_name": "Microsoft Store"
                  }
                ],
                "flatrate": [
                  {
                    "display_priority": 1,
                    "logo_path": "/68MNrwlkpF7WnmNPXLah69CR5cb.jpg",
                    "provider_id": 119,
                    "provider_name": "Amazon Prime Video"
                  }
                ],
                "rent": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 7,
                    "logo_path": "/vjKeS7Y9fNyqNtvp2ROCc71iu1u.jpg",
                    "provider_id": 40,
                    "provider_name": "Chili"
                  },
                  {
                    "display_priority": 18,
                    "logo_path": "/wuViyDkbFp4r7VqI0efPW5hFfQj.jpg",
                    "provider_id": 35,
                    "provider_name": "Rakuten TV"
                  },
                  {
                    "display_priority": 37,
                    "logo_path": "/paq2o2dIfQnxcERsVoq7Ys8KYz8.jpg",
                    "provider_id": 68,
                    "provider_name": "Microsoft Store"
                  }
                ]
              },
              "JP": {
                "link": "https://www.themoviedb.org/movie/550-fight-club/watch?locale=JP",
                "rent": [
                  {
                    "display_priority": 2,
                    "logo_path": "/1MXP8yzNAuVHQAT0sqBIFI9Fc2M.jpg",
                    "provider_id": 85,
                    "provider_name": "dTV"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  },
                  {
                    "display_priority": 10,
                    "logo_path": "/sVBEF7q7LqjHAWSnKwDbzmr2EMY.jpg",
                    "provider_id": 10,
                    "provider_name": "Amazon Video"
                  },
                  {
                    "display_priority": 37,
                    "logo_path": "/paq2o2dIfQnxcERsVoq7Ys8KYz8.jpg",
                    "provider_id": 68,
                    "provider_name": "Microsoft Store"
                  }
                ],
                "flatrate": [
                  {
                    "display_priority": 1,
                    "logo_path": "/68MNrwlkpF7WnmNPXLah69CR5cb.jpg",
                    "provider_id": 9,
                    "provider_name": "Amazon Prime Video"
                  }
                ],
                "buy": [
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  },
                  {
                    "display_priority": 10,
                    "logo_path": "/sVBEF7q7LqjHAWSnKwDbzmr2EMY.jpg",
                    "provider_id": 10,
                    "provider_name": "Amazon Video"
                  },
                  {
                    "display_priority": 37,
                    "logo_path": "/paq2o2dIfQnxcERsVoq7Ys8KYz8.jpg",
                    "provider_id": 68,
                    "provider_name": "Microsoft Store"
                  }
                ]
              },
              "KR": {
                "link": "https://www.themoviedb.org/movie/550-fight-club/watch?locale=KR",
                "buy": [
                  {
                    "display_priority": 2,
                    "logo_path": "/8N0DNa4BO3lH24KWv1EjJh4TxoD.jpg",
                    "provider_id": 356,
                    "provider_name": "wavve"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  }
                ],
                "rent": [
                  {
                    "display_priority": 2,
                    "logo_path": "/8N0DNa4BO3lH24KWv1EjJh4TxoD.jpg",
                    "provider_id": 356,
                    "provider_name": "wavve"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  }
                ],
                "flatrate": [
                  {
                    "display_priority": 1,
                    "logo_path": "/68MNrwlkpF7WnmNPXLah69CR5cb.jpg",
                    "provider_id": 119,
                    "provider_name": "Amazon Prime Video"
                  }
                ]
              },
              "LT": {
                "link": "https://www.themoviedb.org/movie/550-fight-club/watch?locale=LT",
                "buy": [
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  }
                ],
                "flatrate": [
                  {
                    "display_priority": 1,
                    "logo_path": "/68MNrwlkpF7WnmNPXLah69CR5cb.jpg",
                    "provider_id": 119,
                    "provider_name": "Amazon Prime Video"
                  }
                ]
              },
              "LV": {
                "link": "https://www.themoviedb.org/movie/550-fight-club/watch?locale=LV",
                "buy": [
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  }
                ],
                "flatrate": [
                  {
                    "display_priority": 1,
                    "logo_path": "/68MNrwlkpF7WnmNPXLah69CR5cb.jpg",
                    "provider_id": 119,
                    "provider_name": "Amazon Prime Video"
                  }
                ]
              },
              "MX": {
                "link": "https://www.themoviedb.org/movie/550-fight-club/watch?locale=MX",
                "flatrate": [
                  {
                    "display_priority": 1,
                    "logo_path": "/68MNrwlkpF7WnmNPXLah69CR5cb.jpg",
                    "provider_id": 119,
                    "provider_name": "Amazon Prime Video"
                  },
                  {
                    "display_priority": 7,
                    "logo_path": "/rgbalNWbAuhWklHH5JAnF53Wjey.jpg",
                    "provider_id": 339,
                    "provider_name": "Movistar Play"
                  }
                ],
                "rent": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 10,
                    "logo_path": "/sVBEF7q7LqjHAWSnKwDbzmr2EMY.jpg",
                    "provider_id": 10,
                    "provider_name": "Amazon Video"
                  },
                  {
                    "display_priority": 37,
                    "logo_path": "/paq2o2dIfQnxcERsVoq7Ys8KYz8.jpg",
                    "provider_id": 68,
                    "provider_name": "Microsoft Store"
                  }
                ],
                "buy": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 10,
                    "logo_path": "/sVBEF7q7LqjHAWSnKwDbzmr2EMY.jpg",
                    "provider_id": 10,
                    "provider_name": "Amazon Video"
                  },
                  {
                    "display_priority": 37,
                    "logo_path": "/paq2o2dIfQnxcERsVoq7Ys8KYz8.jpg",
                    "provider_id": 68,
                    "provider_name": "Microsoft Store"
                  }
                ]
              },
              "MY": {
                "link": "https://www.themoviedb.org/movie/550-fight-club/watch?locale=MY",
                "rent": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  }
                ],
                "flatrate": [
                  {
                    "display_priority": 1,
                    "logo_path": "/68MNrwlkpF7WnmNPXLah69CR5cb.jpg",
                    "provider_id": 119,
                    "provider_name": "Amazon Prime Video"
                  }
                ],
                "buy": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  }
                ]
              },
              "NL": {
                "link": "https://www.themoviedb.org/movie/550-fight-club/watch?locale=NL",
                "flatrate": [
                  {
                    "display_priority": 1,
                    "logo_path": "/68MNrwlkpF7WnmNPXLah69CR5cb.jpg",
                    "provider_id": 119,
                    "provider_name": "Amazon Prime Video"
                  },
                  {
                    "display_priority": 17,
                    "logo_path": "/a0WqPFsspok70LLZi7OD4Ap77ln.jpg",
                    "provider_id": 396,
                    "provider_name": "Film1"
                  }
                ],
                "buy": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  },
                  {
                    "display_priority": 6,
                    "logo_path": "/j7qnV5qyzWDB0uOdhe5PzQh71Th.jpg",
                    "provider_id": 71,
                    "provider_name": "Pathé Thuis"
                  },
                  {
                    "display_priority": 18,
                    "logo_path": "/wuViyDkbFp4r7VqI0efPW5hFfQj.jpg",
                    "provider_id": 35,
                    "provider_name": "Rakuten TV"
                  },
                  {
                    "display_priority": 37,
                    "logo_path": "/paq2o2dIfQnxcERsVoq7Ys8KYz8.jpg",
                    "provider_id": 68,
                    "provider_name": "Microsoft Store"
                  }
                ],
                "rent": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  },
                  {
                    "display_priority": 6,
                    "logo_path": "/j7qnV5qyzWDB0uOdhe5PzQh71Th.jpg",
                    "provider_id": 71,
                    "provider_name": "Pathé Thuis"
                  },
                  {
                    "display_priority": 18,
                    "logo_path": "/wuViyDkbFp4r7VqI0efPW5hFfQj.jpg",
                    "provider_id": 35,
                    "provider_name": "Rakuten TV"
                  },
                  {
                    "display_priority": 37,
                    "logo_path": "/paq2o2dIfQnxcERsVoq7Ys8KYz8.jpg",
                    "provider_id": 68,
                    "provider_name": "Microsoft Store"
                  }
                ]
              },
              "NO": {
                "link": "https://www.themoviedb.org/movie/550-fight-club/watch?locale=NO",
                "buy": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  },
                  {
                    "display_priority": 18,
                    "logo_path": "/wuViyDkbFp4r7VqI0efPW5hFfQj.jpg",
                    "provider_id": 35,
                    "provider_name": "Rakuten TV"
                  },
                  {
                    "display_priority": 19,
                    "logo_path": "/oEntjkQyz84qo1C4FZK9jW1qznl.jpg",
                    "provider_id": 423,
                    "provider_name": "Blockbuster"
                  },
                  {
                    "display_priority": 37,
                    "logo_path": "/paq2o2dIfQnxcERsVoq7Ys8KYz8.jpg",
                    "provider_id": 68,
                    "provider_name": "Microsoft Store"
                  }
                ],
                "rent": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  },
                  {
                    "display_priority": 18,
                    "logo_path": "/wuViyDkbFp4r7VqI0efPW5hFfQj.jpg",
                    "provider_id": 35,
                    "provider_name": "Rakuten TV"
                  },
                  {
                    "display_priority": 19,
                    "logo_path": "/oEntjkQyz84qo1C4FZK9jW1qznl.jpg",
                    "provider_id": 423,
                    "provider_name": "Blockbuster"
                  },
                  {
                    "display_priority": 37,
                    "logo_path": "/paq2o2dIfQnxcERsVoq7Ys8KYz8.jpg",
                    "provider_id": 68,
                    "provider_name": "Microsoft Store"
                  }
                ],
                "flatrate": [
                  {
                    "display_priority": 1,
                    "logo_path": "/68MNrwlkpF7WnmNPXLah69CR5cb.jpg",
                    "provider_id": 119,
                    "provider_name": "Amazon Prime Video"
                  }
                ]
              },
              "NZ": {
                "link": "https://www.themoviedb.org/movie/550-fight-club/watch?locale=NZ",
                "buy": [
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  },
                  {
                    "display_priority": 37,
                    "logo_path": "/paq2o2dIfQnxcERsVoq7Ys8KYz8.jpg",
                    "provider_id": 68,
                    "provider_name": "Microsoft Store"
                  }
                ],
                "rent": [
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  },
                  {
                    "display_priority": 37,
                    "logo_path": "/paq2o2dIfQnxcERsVoq7Ys8KYz8.jpg",
                    "provider_id": 68,
                    "provider_name": "Microsoft Store"
                  }
                ],
                "flatrate": [
                  {
                    "display_priority": 1,
                    "logo_path": "/68MNrwlkpF7WnmNPXLah69CR5cb.jpg",
                    "provider_id": 119,
                    "provider_name": "Amazon Prime Video"
                  }
                ]
              },
              "PE": {
                "link": "https://www.themoviedb.org/movie/550-fight-club/watch?locale=PE",
                "flatrate": [
                  {
                    "display_priority": 1,
                    "logo_path": "/68MNrwlkpF7WnmNPXLah69CR5cb.jpg",
                    "provider_id": 119,
                    "provider_name": "Amazon Prime Video"
                  }
                ],
                "rent": [
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  }
                ],
                "buy": [
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  }
                ]
              },
              "PH": {
                "link": "https://www.themoviedb.org/movie/550-fight-club/watch?locale=PH",
                "rent": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  }
                ],
                "buy": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  }
                ],
                "flatrate": [
                  {
                    "display_priority": 1,
                    "logo_path": "/68MNrwlkpF7WnmNPXLah69CR5cb.jpg",
                    "provider_id": 119,
                    "provider_name": "Amazon Prime Video"
                  }
                ]
              },
              "PL": {
                "link": "https://www.themoviedb.org/movie/550-fight-club/watch?locale=PL",
                "rent": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  }
                ],
                "flatrate": [
                  {
                    "display_priority": 1,
                    "logo_path": "/68MNrwlkpF7WnmNPXLah69CR5cb.jpg",
                    "provider_id": 119,
                    "provider_name": "Amazon Prime Video"
                  }
                ],
                "buy": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  },
                  {
                    "display_priority": 12,
                    "logo_path": "/vDCcryHD32b0yMeSCgBhuYavsmx.jpg",
                    "provider_id": 192,
                    "provider_name": "YouTube"
                  }
                ]
              },
              "PT": {
                "link": "https://www.themoviedb.org/movie/550-fight-club/watch?locale=PT",
                "rent": [
                  {
                    "display_priority": 2,
                    "logo_path": "/l9OqSYtqktdEFQ9Bk194DzTSGDN.jpg",
                    "provider_id": 242,
                    "provider_name": "Meo"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  },
                  {
                    "display_priority": 12,
                    "logo_path": "/vDCcryHD32b0yMeSCgBhuYavsmx.jpg",
                    "provider_id": 192,
                    "provider_name": "YouTube"
                  },
                  {
                    "display_priority": 18,
                    "logo_path": "/wuViyDkbFp4r7VqI0efPW5hFfQj.jpg",
                    "provider_id": 35,
                    "provider_name": "Rakuten TV"
                  }
                ],
                "flatrate": [
                  {
                    "display_priority": 1,
                    "logo_path": "/68MNrwlkpF7WnmNPXLah69CR5cb.jpg",
                    "provider_id": 119,
                    "provider_name": "Amazon Prime Video"
                  }
                ],
                "buy": [
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  },
                  {
                    "display_priority": 12,
                    "logo_path": "/vDCcryHD32b0yMeSCgBhuYavsmx.jpg",
                    "provider_id": 192,
                    "provider_name": "YouTube"
                  },
                  {
                    "display_priority": 18,
                    "logo_path": "/wuViyDkbFp4r7VqI0efPW5hFfQj.jpg",
                    "provider_id": 35,
                    "provider_name": "Rakuten TV"
                  }
                ]
              },
              "RO": {
                "link": "https://www.themoviedb.org/movie/550-fight-club/watch?locale=RO",
                "flatrate": [
                  {
                    "display_priority": 1,
                    "logo_path": "/68MNrwlkpF7WnmNPXLah69CR5cb.jpg",
                    "provider_id": 119,
                    "provider_name": "Amazon Prime Video"
                  }
                ]
              },
              "RU": {
                "link": "https://www.themoviedb.org/movie/550-fight-club/watch?locale=RU",
                "rent": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 2,
                    "logo_path": "/2DpMZHxP9jzu3v70bph1UD3LLv3.jpg",
                    "provider_id": 113,
                    "provider_name": "Ivi"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  },
                  {
                    "display_priority": 16,
                    "logo_path": "/4AWMLvjQUQNmU3CkpLp7FSSIyZX.jpg",
                    "provider_id": 501,
                    "provider_name": "Wink"
                  }
                ],
                "flatrate": [
                  {
                    "display_priority": 1,
                    "logo_path": "/68MNrwlkpF7WnmNPXLah69CR5cb.jpg",
                    "provider_id": 119,
                    "provider_name": "Amazon Prime Video"
                  }
                ],
                "buy": [
                  {
                    "display_priority": 2,
                    "logo_path": "/2DpMZHxP9jzu3v70bph1UD3LLv3.jpg",
                    "provider_id": 113,
                    "provider_name": "Ivi"
                  },
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  },
                  {
                    "display_priority": 16,
                    "logo_path": "/4AWMLvjQUQNmU3CkpLp7FSSIyZX.jpg",
                    "provider_id": 501,
                    "provider_name": "Wink"
                  }
                ]
              },
              "SE": {
                "link": "https://www.themoviedb.org/movie/550-fight-club/watch?locale=SE",
                "rent": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  },
                  {
                    "display_priority": 18,
                    "logo_path": "/wuViyDkbFp4r7VqI0efPW5hFfQj.jpg",
                    "provider_id": 35,
                    "provider_name": "Rakuten TV"
                  },
                  {
                    "display_priority": 19,
                    "logo_path": "/oEntjkQyz84qo1C4FZK9jW1qznl.jpg",
                    "provider_id": 423,
                    "provider_name": "Blockbuster"
                  },
                  {
                    "display_priority": 37,
                    "logo_path": "/paq2o2dIfQnxcERsVoq7Ys8KYz8.jpg",
                    "provider_id": 68,
                    "provider_name": "Microsoft Store"
                  }
                ],
                "flatrate": [
                  {
                    "display_priority": 1,
                    "logo_path": "/68MNrwlkpF7WnmNPXLah69CR5cb.jpg",
                    "provider_id": 119,
                    "provider_name": "Amazon Prime Video"
                  }
                ],
                "buy": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  },
                  {
                    "display_priority": 18,
                    "logo_path": "/wuViyDkbFp4r7VqI0efPW5hFfQj.jpg",
                    "provider_id": 35,
                    "provider_name": "Rakuten TV"
                  },
                  {
                    "display_priority": 19,
                    "logo_path": "/oEntjkQyz84qo1C4FZK9jW1qznl.jpg",
                    "provider_id": 423,
                    "provider_name": "Blockbuster"
                  },
                  {
                    "display_priority": 37,
                    "logo_path": "/paq2o2dIfQnxcERsVoq7Ys8KYz8.jpg",
                    "provider_id": 68,
                    "provider_name": "Microsoft Store"
                  }
                ]
              },
              "SG": {
                "link": "https://www.themoviedb.org/movie/550-fight-club/watch?locale=SG",
                "flatrate": [
                  {
                    "display_priority": 1,
                    "logo_path": "/68MNrwlkpF7WnmNPXLah69CR5cb.jpg",
                    "provider_id": 119,
                    "provider_name": "Amazon Prime Video"
                  }
                ],
                "buy": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  }
                ],
                "rent": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  }
                ]
              },
              "TH": {
                "link": "https://www.themoviedb.org/movie/550-fight-club/watch?locale=TH",
                "flatrate": [
                  {
                    "display_priority": 1,
                    "logo_path": "/68MNrwlkpF7WnmNPXLah69CR5cb.jpg",
                    "provider_id": 119,
                    "provider_name": "Amazon Prime Video"
                  }
                ],
                "rent": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  }
                ],
                "buy": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  }
                ]
              },
              "TR": {
                "link": "https://www.themoviedb.org/movie/550-fight-club/watch?locale=TR",
                "buy": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  }
                ],
                "rent": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  }
                ],
                "flatrate": [
                  {
                    "display_priority": 1,
                    "logo_path": "/68MNrwlkpF7WnmNPXLah69CR5cb.jpg",
                    "provider_id": 119,
                    "provider_name": "Amazon Prime Video"
                  }
                ]
              },
              "US": {
                "link": "https://www.themoviedb.org/movie/550-fight-club/watch?locale=US",
                "rent": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  },
                  {
                    "display_priority": 10,
                    "logo_path": "/sVBEF7q7LqjHAWSnKwDbzmr2EMY.jpg",
                    "provider_id": 10,
                    "provider_name": "Amazon Video"
                  },
                  {
                    "display_priority": 12,
                    "logo_path": "/vDCcryHD32b0yMeSCgBhuYavsmx.jpg",
                    "provider_id": 192,
                    "provider_name": "YouTube"
                  },
                  {
                    "display_priority": 18,
                    "logo_path": "/eqr1RvnDiHcM7UxmaZOIjdTmyx3.jpg",
                    "provider_id": 105,
                    "provider_name": "FandangoNOW"
                  },
                  {
                    "display_priority": 24,
                    "logo_path": "/pgaPsqgFh2grkcr7ROkoBajHJnf.jpg",
                    "provider_id": 7,
                    "provider_name": "Vudu"
                  },
                  {
                    "display_priority": 37,
                    "logo_path": "/paq2o2dIfQnxcERsVoq7Ys8KYz8.jpg",
                    "provider_id": 68,
                    "provider_name": "Microsoft Store"
                  },
                  {
                    "display_priority": 40,
                    "logo_path": "/nSr2IQSwc5C2QrttIWen8s06ofe.jpg",
                    "provider_id": 279,
                    "provider_name": "Redbox"
                  },
                  {
                    "display_priority": 43,
                    "logo_path": "/qZdEeINwQotbr1Rq15dL5G2BaAh.jpg",
                    "provider_id": 358,
                    "provider_name": "DIRECTV"
                  }
                ],
                "buy": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  },
                  {
                    "display_priority": 10,
                    "logo_path": "/sVBEF7q7LqjHAWSnKwDbzmr2EMY.jpg",
                    "provider_id": 10,
                    "provider_name": "Amazon Video"
                  },
                  {
                    "display_priority": 12,
                    "logo_path": "/vDCcryHD32b0yMeSCgBhuYavsmx.jpg",
                    "provider_id": 192,
                    "provider_name": "YouTube"
                  },
                  {
                    "display_priority": 18,
                    "logo_path": "/eqr1RvnDiHcM7UxmaZOIjdTmyx3.jpg",
                    "provider_id": 105,
                    "provider_name": "FandangoNOW"
                  },
                  {
                    "display_priority": 24,
                    "logo_path": "/pgaPsqgFh2grkcr7ROkoBajHJnf.jpg",
                    "provider_id": 7,
                    "provider_name": "Vudu"
                  },
                  {
                    "display_priority": 37,
                    "logo_path": "/paq2o2dIfQnxcERsVoq7Ys8KYz8.jpg",
                    "provider_id": 68,
                    "provider_name": "Microsoft Store"
                  },
                  {
                    "display_priority": 40,
                    "logo_path": "/nSr2IQSwc5C2QrttIWen8s06ofe.jpg",
                    "provider_id": 279,
                    "provider_name": "Redbox"
                  },
                  {
                    "display_priority": 43,
                    "logo_path": "/qZdEeINwQotbr1Rq15dL5G2BaAh.jpg",
                    "provider_id": 358,
                    "provider_name": "DIRECTV"
                  }
                ],
                "flatrate": [
                  {
                    "display_priority": 4,
                    "logo_path": "/2slPVV21kaPDx0NwjVtcUjdvzXz.jpg",
                    "provider_id": 31,
                    "provider_name": "HBO Go"
                  }
                ]
              },
              "VE": {
                "link": "https://www.themoviedb.org/movie/550-fight-club/watch?locale=VE",
                "flatrate": [
                  {
                    "display_priority": 1,
                    "logo_path": "/68MNrwlkpF7WnmNPXLah69CR5cb.jpg",
                    "provider_id": 119,
                    "provider_name": "Amazon Prime Video"
                  }
                ],
                "rent": [
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  }
                ],
                "buy": [
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  }
                ]
              },
              "ZA": {
                "link": "https://www.themoviedb.org/movie/550-fight-club/watch?locale=ZA",
                "rent": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  },
                  {
                    "display_priority": 14,
                    "logo_path": "/l1H4v9gAUOFHQhPC8qi7BYKMX7R.jpg",
                    "provider_id": 450,
                    "provider_name": "Vodacom Video Play"
                  }
                ],
                "buy": [
                  {
                    "display_priority": 2,
                    "logo_path": "/q6tl6Ib6X5FT80RMlcDbexIo4St.jpg",
                    "provider_id": 2,
                    "provider_name": "Apple iTunes"
                  },
                  {
                    "display_priority": 3,
                    "logo_path": "/p3Z12gKq2qvJaUOMeKNU2mzKVI9.jpg",
                    "provider_id": 3,
                    "provider_name": "Google Play Movies"
                  }
                ],
                "flatrate": [
                  {
                    "display_priority": 1,
                    "logo_path": "/68MNrwlkpF7WnmNPXLah69CR5cb.jpg",
                    "provider_id": 119,
                    "provider_name": "Amazon Prime Video"
                  }
                ]
              }
            }
          }', true);
    }

    public function mockGetLatestResponse(): array
    {
        return json_decode('{
            "adult": false,
            "backdrop_path": null,
            "belongs_to_collection": null,
            "budget": 0,
            "genres": [
              {
                "id": 99,
                "name": "Documentary"
              }
            ],
            "homepage": "",
            "id": 413323,
            "imdb_id": "tt5852644",
            "original_language": "en",
            "original_title": "Deadpool: From Comics to Screen... to Screen",
            "overview": "This documentary divided into five segments examines the source and its path to the movies, backstory, special effects story/character areas, cast and performances. It includes notes from Reynolds, Liefeld, Miller, Wernick, Reese, executive producers Aditya Sood and Stan Lee, co-creator/comics writer Fabian Nicieza, producer Simon Kinberg, comics writer Joe Kelly, specialty costume designer Russell Shinkle, makeup designer Bill Corso, production designer Sean Haworth, director of photography Ken Seng, executive producer/unit production manager John J. Kelly, previs supervisor Franck Balson, stunt coordinator Philip J. Silvera, visual effects supervisors Pauline Duvall and Jonathan Rothbart, visual effects producer Annemarie Griggs, 2nd unit director/stunt coordinator Robert Alonzo, special effects coordinator Alex Burdett, utility stunts Regis Harrington, composer Tom Holkenberg, and actors Morena Baccarin, TJ Miller, Brianna Hildebrand, Leslie Uggams, Ed Skrein, and Gina Carano.",
            "popularity": 0,
            "poster_path": "/chV0avy5ogIB2PMTInT4KpHDzwj.jpg",
            "production_companies": [],
            "production_countries": [],
            "release_date": "2016-05-10",
            "revenue": 0,
            "runtime": 80,
            "spoken_languages": [],
            "status": "Released",
            "tagline": "",
            "title": "Deadpool: From Comics to Screen... to Screen",
            "video": false,
            "vote_average": 0,
            "vote_count": 0
          }', true);
    }

    public function mockGetNowPlayingResponse(): array
    {
        return json_decode('{
            "page": 1,
            "results": [
              {
                "poster_path": "/e1mjopzAS2KNsvpbpahQ1a6SkSn.jpg",
                "adult": false,
                "overview": "From DC Comics comes the Suicide Squad, an antihero team of incarcerated supervillains who act as deniable assets for the United States government, undertaking high-risk black ops missions in exchange for commuted prison sentences.",
                "release_date": "2016-08-03",
                "genre_ids": [
                  14,
                  28,
                  80
                ],
                "id": 297761,
                "original_title": "Suicide Squad",
                "original_language": "en",
                "title": "Suicide Squad",
                "backdrop_path": "/ndlQ2Cuc3cjTL7lTynw6I4boP4S.jpg",
                "popularity": 48.261451,
                "vote_count": 1466,
                "video": false,
                "vote_average": 5.91
              },
              {
                "poster_path": "/lFSSLTlFozwpaGlO31OoUeirBgQ.jpg",
                "adult": false,
                "overview": "The most dangerous former operative of the CIA is drawn out of hiding to uncover hidden truths about his past.",
                "release_date": "2016-07-27",
                "genre_ids": [
                  28,
                  53
                ],
                "id": 324668,
                "original_title": "Jason Bourne",
                "original_language": "en",
                "title": "Jason Bourne",
                "backdrop_path": "/AoT2YrJUJlg5vKE3iMOLvHlTd3m.jpg",
                "popularity": 30.690177,
                "vote_count": 649,
                "video": false,
                "vote_average": 5.25
              },
              {
                "poster_path": "/tgfRDJs5PFW20Aoh1orEzuxW8cN.jpg",
                "adult": false,
                "overview": "Arthur Bishop thought he had put his murderous past behind him when his most formidable foe kidnaps the love of his life. Now he is forced to travel the globe to complete three impossible assassinations, and do what he does best, make them look like accidents.",
                "release_date": "2016-08-25",
                "genre_ids": [
                  80,
                  28,
                  53
                ],
                "id": 278924,
                "original_title": "Mechanic: Resurrection",
                "original_language": "en",
                "title": "Mechanic: Resurrection",
                "backdrop_path": "/3oRHlbxMLBXHfMqUsx1emwqiuQ3.jpg",
                "popularity": 20.375179,
                "vote_count": 119,
                "video": false,
                "vote_average": 4.59
              },
              {
                "poster_path": "/3ioyAtm0wXDyPy330Y7mJAJEHpU.jpg",
                "adult": false,
                "overview": "A high school senior finds herself immersed in an online game of truth or dare, where her every move starts to be manipulated by an anonymous community of \"watchers.\"",
                "release_date": "2016-07-27",
                "genre_ids": [
                  18,
                  53
                ],
                "id": 328387,
                "original_title": "Nerve",
                "original_language": "en",
                "title": "Nerve",
                "backdrop_path": "/a0wohltYr7Tzkgg2X6QKBe3txj1.jpg",
                "popularity": 7.17729,
                "vote_count": 86,
                "video": false,
                "vote_average": 6.84
              },
              {
                "poster_path": "/3S7V2Jd2G61LltoCsYUj4GwON5p.jpg",
                "adult": false,
                "overview": "A woman with a seemingly perfect life - a great marriage, overachieving kids, beautiful home, stunning looks and still holding down a career. However she is over-worked, over committed and exhausted to the point that she is about to snap. Fed up, she joins forces with two other over-stressed moms and all go on a quest to liberate themselves from conventional responsibilities, going on a wild un-mom like binge of freedom, fun and self-indulgence - putting them on a collision course with PTA Queen Bee Gwendolyn and her clique of devoted perfect moms.",
                "release_date": "2016-07-28",
                "genre_ids": [
                  35
                ],
                "id": 376659,
                "original_title": "Bad Moms",
                "original_language": "en",
                "title": "Bad Moms",
                "backdrop_path": "/l9aqTBdafSo0n7u0Azuqo01YVIC.jpg",
                "popularity": 6.450367,
                "vote_count": 107,
                "video": false,
                "vote_average": 5.49
              },
              {
                "poster_path": "/sRxazAAodkAWVPJighRAsls2zCo.jpg",
                "adult": false,
                "overview": "A falsely accused nobleman survives years of slavery to take vengeance on his best friend who betrayed him.",
                "release_date": "2016-08-17",
                "genre_ids": [
                  12,
                  36,
                  18
                ],
                "id": 271969,
                "original_title": "Ben-Hur",
                "original_language": "en",
                "title": "Ben-Hur",
                "backdrop_path": "/A4xbEpe9LevQCdvaNC0z6r8AfYk.jpg",
                "popularity": 6.379067,
                "vote_count": 60,
                "video": false,
                "vote_average": 3.83
              },
              {
                "poster_path": "/aRRLpsusORQxOpFkZvXdk00TkoY.jpg",
                "adult": false,
                "overview": "Nate Foster, a young, idealistic FBI agent, goes undercover to take down a radical white supremacy terrorist group. The bright up-and-coming analyst must confront the challenge of sticking to a new identity while maintaining his real principles as he navigates the dangerous underworld of white supremacy. Inspired by real events.",
                "release_date": "2016-08-19",
                "genre_ids": [
                  80,
                  18,
                  53
                ],
                "id": 374617,
                "original_title": "Imperium",
                "original_language": "en",
                "title": "Imperium",
                "backdrop_path": "/9dMvJJ0eTVetq3kLwUXcphsY5H.jpg",
                "popularity": 5.855316,
                "vote_count": 33,
                "video": false,
                "vote_average": 6.05
              },
              {
                "poster_path": "/4pUIQO6OqbzxrFLGMDf2dlplSR9.jpg",
                "adult": false,
                "overview": "Southside With You chronicles a single day in the summer of 1989 when the future president of the United States, Barack Obama, wooed his future First Lady on an epic first date across Chicago is South Side.",
                "release_date": "2016-08-26",
                "genre_ids": [
                  10749,
                  18
                ],
                "id": 310888,
                "original_title": "Southside With You",
                "original_language": "en",
                "title": "Southside With You",
                "backdrop_path": "/fukREcpoPugi0yx6cVrFvsR7JBE.jpg",
                "popularity": 5.229414,
                "vote_count": 13,
                "video": false,
                "vote_average": 3.12
              },
              {
                "poster_path": "/wJXku1YhMKeuzYNEHux7XtaYPsE.jpg",
                "adult": false,
                "overview": "Based on a true story, “War Dogs” follows two friends in their early 20s living in Miami during the first Iraq War who exploit a little-known government initiative that allows small businesses to bid on U.S. Military contracts. Starting small, they begin raking in big money and are living the high life. But the pair gets in over their heads when they land a 300 million dollar deal to arm the Afghan Military—a deal that puts them in business with some very shady people, not the least of which turns out to be the U.S. Government.",
                "release_date": "2016-08-18",
                "genre_ids": [
                  10752,
                  35,
                  18
                ],
                "id": 308266,
                "original_title": "War Dogs",
                "original_language": "en",
                "title": "War Dogs",
                "backdrop_path": "/2cLndRZy8e3das3vVaK3BdJfRIi.jpg",
                "popularity": 5.186717,
                "vote_count": 55,
                "video": false,
                "vote_average": 5.08
              },
              {
                "poster_path": "/e9Rzr8Hhu3pqdJtdDLC52PerLk1.jpg",
                "adult": false,
                "overview": "Pete is a mysterious 10-year-old with no family and no home who claims to live in the woods with a giant, green dragon named Elliott. With the help of Natalie, an 11-year-old girl whose father Jack owns the local lumber mill, forest ranger Grace sets out to determine where Pete came from, where he belongs, and the truth about this dragon.",
                "release_date": "2016-08-10",
                "genre_ids": [
                  12,
                  10751,
                  14
                ],
                "id": 294272,
                "original_title": "Pete is Dragon",
                "original_language": "en",
                "title": "Pete is Dragon",
                "backdrop_path": "/AaRhHX0Jfpju0O6hNzScPRgX9Mm.jpg",
                "popularity": 4.93384,
                "vote_count": 72,
                "video": false,
                "vote_average": 4.85
              },
              {
                "poster_path": "/pXqnqw4V1Rly2HEacfl07d5DcUE.jpg",
                "adult": false,
                "overview": "59 year-old Ove is the block’s grumpy man. Several years ago he was deposed as president of the condominium association, but he could not give a damn about being deposed and therefore keeps looking over the neighborhood with an iron fist. When pregnant Parvaneh and her family move into the terraced house opposite Ove and accidentally back into Ove’s mailbox it sets off the beginning of an unexpected change in his life.",
                "release_date": "2016-08-26",
                "genre_ids": [
                  35,
                  18
                ],
                "id": 348678,
                "original_title": "En man som heter Ove",
                "original_language": "sv",
                "title": "A Man Called Ove",
                "backdrop_path": "/o3PDMTyyMOGFNtze7YsfdWeMKpm.jpg",
                "popularity": 4.790786,
                "vote_count": 27,
                "video": false,
                "vote_average": 5.57
              },
              {
                "poster_path": "/3Kr9CIIMcXTPlm6cdZ9y3QTe4Y7.jpg",
                "adult": false,
                "overview": "In the epic fantasy, scruffy, kindhearted Kubo ekes out a humble living while devotedly caring for his mother in their sleepy shoreside village. It is a quiet existence – until a spirit from the past catches up with him to enforce an age-old vendetta. Suddenly on the run from gods and monsters, Kubo’s chance for survival rests on finding the magical suit of armor once worn by his fallen father, the greatest samurai the world has ever known. Summoning courage, Kubo embarks on a thrilling odyssey as he faces his family’s history, navigates the elements, and bravely fights for the earth and the stars.",
                "release_date": "2016-08-18",
                "genre_ids": [
                  12,
                  16,
                  14,
                  10751
                ],
                "id": 313297,
                "original_title": "Kubo and the Two Strings",
                "original_language": "en",
                "title": "Kubo and the Two Strings",
                "backdrop_path": "/akd0Z0OiR20btITvmvweDcJ3m8H.jpg",
                "popularity": 4.572192,
                "vote_count": 34,
                "video": false,
                "vote_average": 6.93
              },
              {
                "poster_path": "/rxXA5vwJElXQ8BgrB0pocUcuqFA.jpg",
                "adult": false,
                "overview": "When Rebecca left home, she thought she left her childhood fears behind. Growing up, she was never really sure of what was and wasn’t real when the lights went out…and now her little brother, Martin, is experiencing the same unexplained and terrifying events that had once tested her sanity and threatened her safety. A frightening entity with a mysterious attachment to their mother, Sophie, has reemerged.",
                "release_date": "2016-07-22",
                "genre_ids": [
                  27
                ],
                "id": 345911,
                "original_title": "Lights Out",
                "original_language": "en",
                "title": "Lights Out",
                "backdrop_path": "/mK9KdQj5Z6CAtxnFu2XPO8m78Il.jpg",
                "popularity": 4.483865,
                "vote_count": 133,
                "video": false,
                "vote_average": 6.11
              },
              {
                "poster_path": "/3mCcVbVLz23MhCngELFihX2uSwb.jpg",
                "adult": false,
                "overview": "XOXO follows six strangers whose lives collide in one frenetic, dream-chasing, hopelessly romantic night.",
                "release_date": "2016-08-26",
                "genre_ids": [
                  18
                ],
                "id": 352492,
                "original_title": "XOXO",
                "original_language": "en",
                "title": "XOXO",
                "backdrop_path": "/dP3bxMPEDc9eNN2nH9P5YyhS27p.jpg",
                "popularity": 4.478293,
                "vote_count": 4,
                "video": false,
                "vote_average": 7
              },
              {
                "poster_path": "/zm0ODjtfJfJW0W269LqsQl5OhJ8.jpg",
                "adult": false,
                "overview": "As Batman hunts for the escaped Joker, the Clown Prince of Crime attacks the Gordon family to prove a diabolical point mirroring his own fall into madness. Based on the graphic novel by Alan Moore and Brian Bolland.",
                "release_date": "2016-07-24",
                "genre_ids": [
                  28,
                  16,
                  80,
                  18
                ],
                "id": 382322,
                "original_title": "Batman: The Killing Joke",
                "original_language": "en",
                "title": "Batman: The Killing Joke",
                "backdrop_path": "/7AxMc1Mgm3xD2lySdM6r0sQGS3s.jpg",
                "popularity": 4.136973,
                "vote_count": 141,
                "video": false,
                "vote_average": 5.91
              },
              {
                "poster_path": "/4J2Vc32juKTSdqm273HDKHsWO42.jpg",
                "adult": false,
                "overview": "A weekend getaway for four couples takes a sharp turn when one of the couples discovers the entire trip was orchestrated to host an intervention on their marriage.",
                "release_date": "2016-08-26",
                "genre_ids": [
                  35,
                  18
                ],
                "id": 351242,
                "original_title": "The Intervention",
                "original_language": "en",
                "title": "The Intervention",
                "backdrop_path": "/xvghzVFYDJd26Txy2s0rHORrXIi.jpg",
                "popularity": 4.113746,
                "vote_count": 7,
                "video": false,
                "vote_average": 3.79
              },
              {
                "poster_path": "/eZJYbODPWMRe6aQ1KtKHMb5ZOnx.jpg",
                "adult": false,
                "overview": "The adventures of teenager Max McGrath and alien companion Steel, who must harness and combine their tremendous new powers to evolve into the turbo-charged superhero Max Steel.",
                "release_date": "2016-08-26",
                "genre_ids": [
                  878,
                  28,
                  12
                ],
                "id": 286567,
                "original_title": "Max Steel",
                "original_language": "en",
                "title": "Max Steel",
                "backdrop_path": "/9bM4Est3pyXPLr1vF2o5BiRtp0L.jpg",
                "popularity": 3.541536,
                "vote_count": 9,
                "video": false,
                "vote_average": 4.22
              },
              {
                "poster_path": "/v0krYaMdqD9uxFuFiWhEyKKIaw5.jpg",
                "adult": false,
                "overview": "Elite snipers Brandon Beckett (Chad Michael Collins) and Richard Miller (Billy Zane) tasked with protecting a gas pipeline from terrorists looking to make a statement. When battles with the enemy lead to snipers being killed by a ghost shooter who knows their exact location, tensions boil as a security breach is suspected. Is there someone working with the enemy on the inside? Is the mission a front for other activity? Is the Colonel pulling the strings?",
                "release_date": "2016-08-02",
                "genre_ids": [
                  28,
                  18,
                  10752
                ],
                "id": 407375,
                "original_title": "Sniper: Ghost Shooter",
                "original_language": "en",
                "title": "Sniper: Ghost Shooter",
                "backdrop_path": "/yYS8wtp7PgRcugt6EUMhv95NnaK.jpg",
                "popularity": 3.504234,
                "vote_count": 17,
                "video": false,
                "vote_average": 4.76
              },
              {
                "poster_path": "/c4mvBk9cRAkyp9DpzlOBSmeuzG6.jpg",
                "adult": false,
                "overview": "Summer, New York City. A college girl falls hard for a guy she just met. After a night of partying goes wrong, she goes to wild extremes to get him back.",
                "release_date": "2016-08-26",
                "genre_ids": [
                  18
                ],
                "id": 336011,
                "original_title": "White Girl",
                "original_language": "en",
                "title": "White Girl",
                "backdrop_path": "/dxUxtnxeMsI0jCUFAT6GbgyUdiz.jpg",
                "popularity": 3.485193,
                "vote_count": 8,
                "video": false,
                "vote_average": 1.88
              },
              {
                "poster_path": "/1SWIUZp4Gi2B6VxajpPWKhkbTMF.jpg",
                "adult": false,
                "overview": "The legendary Roberto Duran and his equally legendary trainer Ray Arcel change each other is lives.",
                "release_date": "2016-08-26",
                "genre_ids": [
                  18
                ],
                "id": 184341,
                "original_title": "Hands of Stone",
                "original_language": "en",
                "title": "Hands of Stone",
                "backdrop_path": "/pqRJD5RE5DgRQ1Mq4kSZHmMjozn.jpg",
                "popularity": 3.474028,
                "vote_count": 16,
                "video": false,
                "vote_average": 3.75
              }
            ],
            "dates": {
              "maximum": "2016-09-01",
              "minimum": "2016-07-21"
            },
            "total_pages": 33,
            "total_results": 649
          }', true);
    }

    public function mockGetPopularResponse(): array
    {
        return json_decode('{
            "page": 1,
            "results": [
              {
                "poster_path": "/e1mjopzAS2KNsvpbpahQ1a6SkSn.jpg",
                "adult": false,
                "overview": "From DC Comics comes the Suicide Squad, an antihero team of incarcerated supervillains who act as deniable assets for the United States government, undertaking high-risk black ops missions in exchange for commuted prison sentences.",
                "release_date": "2016-08-03",
                "genre_ids": [
                  14,
                  28,
                  80
                ],
                "id": 297761,
                "original_title": "Suicide Squad",
                "original_language": "en",
                "title": "Suicide Squad",
                "backdrop_path": "/ndlQ2Cuc3cjTL7lTynw6I4boP4S.jpg",
                "popularity": 48.261451,
                "vote_count": 1466,
                "video": false,
                "vote_average": 5.91
              },
              {
                "poster_path": "/lFSSLTlFozwpaGlO31OoUeirBgQ.jpg",
                "adult": false,
                "overview": "The most dangerous former operative of the CIA is drawn out of hiding to uncover hidden truths about his past.",
                "release_date": "2016-07-27",
                "genre_ids": [
                  28,
                  53
                ],
                "id": 324668,
                "original_title": "Jason Bourne",
                "original_language": "en",
                "title": "Jason Bourne",
                "backdrop_path": "/AoT2YrJUJlg5vKE3iMOLvHlTd3m.jpg",
                "popularity": 30.690177,
                "vote_count": 649,
                "video": false,
                "vote_average": 5.25
              },
              {
                "poster_path": "/hU0E130tsGdsYa4K9lc3Xrn5Wyt.jpg",
                "adult": false,
                "overview": "One year after outwitting the FBI and winning the public’s adulation with their mind-bending spectacles, the Four Horsemen resurface only to find themselves face to face with a new enemy who enlists them to pull off their most dangerous heist yet.",
                "release_date": "2016-06-02",
                "genre_ids": [
                  28,
                  12,
                  35,
                  80,
                  9648,
                  53
                ],
                "id": 291805,
                "original_title": "Now You See Me 2",
                "original_language": "en",
                "title": "Now You See Me 2",
                "backdrop_path": "/zrAO2OOa6s6dQMQ7zsUbDyIBrAP.jpg",
                "popularity": 29.737342,
                "vote_count": 684,
                "video": false,
                "vote_average": 6.64
              },
              {
                "poster_path": "/h28t2JNNGrZx0fIuAw8aHQFhIxR.jpg",
                "adult": false,
                "overview": "A recently cheated on married woman falls for a younger man who has moved in next door, but their torrid affair soon takes a dangerous turn.",
                "release_date": "2015-01-23",
                "genre_ids": [
                  53
                ],
                "id": 241251,
                "original_title": "The Boy Next Door",
                "original_language": "en",
                "title": "The Boy Next Door",
                "backdrop_path": "/vj4IhmH4HCMZYYjTMiYBybTWR5o.jpg",
                "popularity": 22.279864,
                "vote_count": 628,
                "video": false,
                "vote_average": 4.13
              },
              {
                "poster_path": "/vOipe2myi26UDwP978hsYOrnUWC.jpg",
                "adult": false,
                "overview": "An orphan boy is raised in the Jungle with the help of a pack of wolves, a bear and a black panther.",
                "release_date": "2016-04-07",
                "genre_ids": [
                  12,
                  18,
                  14
                ],
                "id": 278927,
                "original_title": "The Jungle Book",
                "original_language": "en",
                "title": "The Jungle Book",
                "backdrop_path": "/eIOTsGg9FCVrBc4r2nXaV61JF4F.jpg",
                "popularity": 21.104822,
                "vote_count": 1085,
                "video": false,
                "vote_average": 6.42
              },
              {
                "poster_path": "/tgfRDJs5PFW20Aoh1orEzuxW8cN.jpg",
                "adult": false,
                "overview": "Arthur Bishop thought he had put his murderous past behind him when his most formidable foe kidnaps the love of his life. Now he is forced to travel the globe to complete three impossible assassinations, and do what he does best, make them look like accidents.",
                "release_date": "2016-08-25",
                "genre_ids": [
                  80,
                  28,
                  53
                ],
                "id": 278924,
                "original_title": "Mechanic: Resurrection",
                "original_language": "en",
                "title": "Mechanic: Resurrection",
                "backdrop_path": "/3oRHlbxMLBXHfMqUsx1emwqiuQ3.jpg",
                "popularity": 20.375179,
                "vote_count": 119,
                "video": false,
                "vote_average": 4.59
              },
              {
                "poster_path": "/cGOPbv9wA5gEejkUN892JrveARt.jpg",
                "adult": false,
                "overview": "Fearing the actions of a god-like Super Hero left unchecked, Gotham City’s own formidable, forceful vigilante takes on Metropolis’s most revered, modern-day savior, while the world wrestles with what sort of hero it really needs. And with Batman and Superman at war with one another, a new threat quickly arises, putting mankind in greater danger than it’s ever known before.",
                "release_date": "2016-03-23",
                "genre_ids": [
                  28,
                  12,
                  14
                ],
                "id": 209112,
                "original_title": "Batman v Superman: Dawn of Justice",
                "original_language": "en",
                "title": "Batman v Superman: Dawn of Justice",
                "backdrop_path": "/vsjBeMPZtyB7yNsYY56XYxifaQZ.jpg",
                "popularity": 19.413721,
                "vote_count": 3486,
                "video": false,
                "vote_average": 5.52
              },
              {
                "poster_path": "/kqjL17yufvn9OVLyXYpvtyrFfak.jpg",
                "adult": false,
                "overview": "An apocalyptic story set in the furthest reaches of our planet, in a stark desert landscape where humanity is broken, and most everyone is crazed fighting for the necessities of life. Within this world exist two rebels on the run who just might be able to restore order. There is Max, a man of action and a man of few words, who seeks peace of mind following the loss of his wife and child in the aftermath of the chaos. And Furiosa, a woman of action and a woman who believes her path to survival may be achieved if she can make it across the desert back to her childhood homeland.",
                "release_date": "2015-05-13",
                "genre_ids": [
                  28,
                  12,
                  878,
                  53
                ],
                "id": 76341,
                "original_title": "Mad Max: Fury Road",
                "original_language": "en",
                "title": "Mad Max: Fury Road",
                "backdrop_path": "/tbhdm8UJAb4ViCTsulYFL3lxMCd.jpg",
                "popularity": 18.797187,
                "vote_count": 5236,
                "video": false,
                "vote_average": 7.26
              },
              {
                "poster_path": "/5N20rQURev5CNDcMjHVUZhpoCNC.jpg",
                "adult": false,
                "overview": "Following the events of Age of Ultron, the collective governments of the world pass an act designed to regulate all superhuman activity. This polarizes opinion amongst the Avengers, causing two factions to side with Iron Man or Captain America, which causes an epic battle between former allies.",
                "release_date": "2016-04-27",
                "genre_ids": [
                  28,
                  53,
                  878
                ],
                "id": 271110,
                "original_title": "Captain America: Civil War",
                "original_language": "en",
                "title": "Captain America: Civil War",
                "backdrop_path": "/m5O3SZvQ6EgD5XXXLPIP1wLppeW.jpg",
                "popularity": 16.733457,
                "vote_count": 2570,
                "video": false,
                "vote_average": 6.93
              },
              {
                "poster_path": "/jjBgi2r5cRt36xF6iNUEhzscEcb.jpg",
                "adult": false,
                "overview": "Twenty-two years after the events of Jurassic Park, Isla Nublar now features a fully functioning dinosaur theme park, Jurassic World, as originally envisioned by John Hammond.",
                "release_date": "2015-06-09",
                "genre_ids": [
                  28,
                  12,
                  878,
                  53
                ],
                "id": 135397,
                "original_title": "Jurassic World",
                "original_language": "en",
                "title": "Jurassic World",
                "backdrop_path": "/dkMD5qlogeRMiEixC4YNPUvax2T.jpg",
                "popularity": 15.930056,
                "vote_count": 4934,
                "video": false,
                "vote_average": 6.59
              },
              {
                "poster_path": "/gj282Pniaa78ZJfbaixyLXnXEDI.jpg",
                "adult": false,
                "overview": "Katniss Everdeen reluctantly becomes the symbol of a mass rebellion against the autocratic Capitol.",
                "release_date": "2014-11-18",
                "genre_ids": [
                  878,
                  12,
                  53
                ],
                "id": 131631,
                "original_title": "The Hunger Games: Mockingjay - Part 1",
                "original_language": "en",
                "title": "The Hunger Games: Mockingjay - Part 1",
                "backdrop_path": "/83nHcz2KcnEpPXY50Ky2VldewJJ.jpg",
                "popularity": 15.774241,
                "vote_count": 3182,
                "video": false,
                "vote_average": 6.69
              },
              {
                "poster_path": "/dCgm7efXDmiABSdWDHBDBx2jwmn.jpg",
                "adult": false,
                "overview": "Deckard Shaw seeks revenge against Dominic Toretto and his family for his comatose brother.",
                "release_date": "2015-04-01",
                "genre_ids": [
                  28,
                  80,
                  53
                ],
                "id": 168259,
                "original_title": "Furious 7",
                "original_language": "en",
                "title": "Furious 7",
                "backdrop_path": "/ypyeMfKydpyuuTMdp36rMlkGDUL.jpg",
                "popularity": 13.659073,
                "vote_count": 2718,
                "video": false,
                "vote_average": 7.39
              },
              {
                "poster_path": "/5JU9ytZJyR3zmClGmVm9q4Geqbd.jpg",
                "adult": false,
                "overview": "The year is 2029. John Connor, leader of the resistance continues the war against the machines. At the Los Angeles offensive, John is fears of the unknown future begin to emerge when TECOM spies reveal a new plot by SkyNet that will attack him from both fronts; past and future, and will ultimately change warfare forever.",
                "release_date": "2015-06-23",
                "genre_ids": [
                  878,
                  28,
                  53,
                  12
                ],
                "id": 87101,
                "original_title": "Terminator Genisys",
                "original_language": "en",
                "title": "Terminator Genisys",
                "backdrop_path": "/bIlYH4l2AyYvEysmS2AOfjO7Dn8.jpg",
                "popularity": 13.438976,
                "vote_count": 2334,
                "video": false,
                "vote_average": 5.91
              },
              {
                "poster_path": "/q0R4crx2SehcEEQEkYObktdeFy.jpg",
                "adult": false,
                "overview": "Minions Stuart, Kevin and Bob are recruited by Scarlet Overkill, a super-villain who, alongside her inventor husband Herb, hatches a plot to take over the world.",
                "release_date": "2015-06-17",
                "genre_ids": [
                  10751,
                  16,
                  12,
                  35
                ],
                "id": 211672,
                "original_title": "Minions",
                "original_language": "en",
                "title": "Minions",
                "backdrop_path": "/uX7LXnsC7bZJZjn048UCOwkPXWJ.jpg",
                "popularity": 13.001193,
                "vote_count": 2699,
                "video": false,
                "vote_average": 6.55
              },
              {
                "poster_path": "/nBNZadXqJSdt05SHLqgT0HuC5Gm.jpg",
                "adult": false,
                "overview": "Interstellar chronicles the adventures of a group of explorers who make use of a newly discovered wormhole to surpass the limitations on human space travel and conquer the vast distances involved in an interstellar voyage.",
                "release_date": "2014-11-05",
                "genre_ids": [
                  12,
                  18,
                  878
                ],
                "id": 157336,
                "original_title": "Interstellar",
                "original_language": "en",
                "title": "Interstellar",
                "backdrop_path": "/xu9zaAevzQ5nnrsXN6JcahLnG4i.jpg",
                "popularity": 12.481061,
                "vote_count": 5600,
                "video": false,
                "vote_average": 8.12
              },
              {
                "poster_path": "/1ZQVHkvOegv5wVzxD2fphcxl1Ba.jpg",
                "adult": false,
                "overview": "Set after the events of Continental Drift, Scrat is epic pursuit of his elusive acorn catapults him outside of Earth, where he accidentally sets off a series of cosmic events that transform and threaten the planet. To save themselves from peril, Manny, Sid, Diego, and the rest of the herd leave their home and embark on a quest full of thrills and spills, highs and lows, laughter and adventure while traveling to exotic new lands and encountering a host of colorful new characters.",
                "release_date": "2016-06-23",
                "genre_ids": [
                  12,
                  16,
                  35,
                  10751,
                  878
                ],
                "id": 278154,
                "original_title": "Ice Age: Collision Course",
                "original_language": "en",
                "title": "Ice Age: Collision Course",
                "backdrop_path": "/o29BFNqgXOUT1yHNYusnITsH7P9.jpg",
                "popularity": 12.150474,
                "vote_count": 242,
                "video": false,
                "vote_average": 5.15
              },
              {
                "poster_path": "/inVq3FRqcYIRl2la8iZikYYxFNR.jpg",
                "adult": false,
                "overview": "Based upon Marvel Comics’ most unconventional anti-hero, DEADPOOL tells the origin story of former Special Forces operative turned mercenary Wade Wilson, who after being subjected to a rogue experiment that leaves him with accelerated healing powers, adopts the alter ego Deadpool. Armed with his new abilities and a dark, twisted sense of humor, Deadpool hunts down the man who nearly destroyed his life.",
                "release_date": "2016-02-09",
                "genre_ids": [
                  28,
                  12,
                  35,
                  10749
                ],
                "id": 293660,
                "original_title": "Deadpool",
                "original_language": "en",
                "title": "Deadpool",
                "backdrop_path": "/nbIrDhOtUpdD9HKDBRy02a8VhpV.jpg",
                "popularity": 12.083976,
                "vote_count": 4834,
                "video": false,
                "vote_average": 7.16
              },
              {
                "poster_path": "/vNCeqxbKyDHL9LUza03V2Im16wB.jpg",
                "adult": false,
                "overview": "A private eye investigates the apparent suicide of a fading porn star in 1970s Los Angeles and uncovers a conspiracy.",
                "release_date": "2016-05-15",
                "genre_ids": [
                  28,
                  35,
                  80,
                  9648,
                  53
                ],
                "id": 290250,
                "original_title": "The Nice Guys",
                "original_language": "en",
                "title": "The Nice Guys",
                "backdrop_path": "/8GwMVfq8Hsq1EFbw2MYJgSCAckb.jpg",
                "popularity": 11.374819,
                "vote_count": 537,
                "video": false,
                "vote_average": 6.84
              },
              {
                "poster_path": "/bWUeJHbKIyT306WtJFRHoSzX9nk.jpg",
                "adult": false,
                "overview": "A sorority moves in next door to the home of Mac and Kelly Radner who have a young child. The Radner is enlist their former nemeses from the fraternity to help battle the raucous sisters.",
                "release_date": "2016-05-05",
                "genre_ids": [
                  35
                ],
                "id": 325133,
                "original_title": "Neighbors 2: Sorority Rising",
                "original_language": "en",
                "title": "Neighbors 2: Sorority Rising",
                "backdrop_path": "/8HuO1RMDI3prfWDkF7t1y8EhLVO.jpg",
                "popularity": 11.178222,
                "vote_count": 414,
                "video": false,
                "vote_average": 5.36
              },
              {
                "poster_path": "/lIv1QinFqz4dlp5U4lQ6HaiskOZ.jpg",
                "adult": false,
                "overview": "Under the direction of a ruthless instructor, a talented young drummer begins to pursue perfection at any cost, even his humanity.",
                "release_date": "2014-10-10",
                "genre_ids": [
                  18,
                  10402
                ],
                "id": 244786,
                "original_title": "Whiplash",
                "original_language": "en",
                "title": "Whiplash",
                "backdrop_path": "/6bbZ6XyvgfjhQwbplnUh1LSj1ky.jpg",
                "popularity": 10.776056,
                "vote_count": 2059,
                "video": false,
                "vote_average": 8.29
              }
            ],
            "total_results": 19629,
            "total_pages": 982
          }', true);
    }

    public function mockGetTopRatedResponse(): array
    {
        return json_decode('{
            "page": 1,
            "results": [
              {
                "poster_path": "/9O7gLzmreU0nGkIB6K3BsJbzvNv.jpg",
                "adult": false,
                "overview": "Framed in the 1940s for the double murder of his wife and her lover, upstanding banker Andy Dufresne begins a new life at the Shawshank prison, where he puts his accounting skills to work for an amoral warden. During his long stretch in prison, Dufresne comes to be admired by the other inmates -- including an older prisoner named Red -- for his integrity and unquenchable sense of hope.",
                "release_date": "1994-09-10",
                "genre_ids": [
                  18,
                  80
                ],
                "id": 278,
                "original_title": "The Shawshank Redemption",
                "original_language": "en",
                "title": "The Shawshank Redemption",
                "backdrop_path": "/xBKGJQsAIeweesB79KC89FpBrVr.jpg",
                "popularity": 6.741296,
                "vote_count": 5238,
                "video": false,
                "vote_average": 8.32
              },
              {
                "poster_path": "/lIv1QinFqz4dlp5U4lQ6HaiskOZ.jpg",
                "adult": false,
                "overview": "Under the direction of a ruthless instructor, a talented young drummer begins to pursue perfection at any cost, even his humanity.",
                "release_date": "2014-10-10",
                "genre_ids": [
                  18,
                  10402
                ],
                "id": 244786,
                "original_title": "Whiplash",
                "original_language": "en",
                "title": "Whiplash",
                "backdrop_path": "/6bbZ6XyvgfjhQwbplnUh1LSj1ky.jpg",
                "popularity": 10.776056,
                "vote_count": 2059,
                "video": false,
                "vote_average": 8.29
              },
              {
                "poster_path": "/d4KNaTrltq6bpkFS01pYtyXa09m.jpg",
                "adult": false,
                "overview": "The story spans the years from 1945 to 1955 and chronicles the fictional Italian-American Corleone crime family. When organized crime family patriarch Vito Corleone barely survives an attempt on his life, his youngest son, Michael, steps in to take care of the would-be killers, launching a campaign of bloody revenge.",
                "release_date": "1972-03-15",
                "genre_ids": [
                  18,
                  80
                ],
                "id": 238,
                "original_title": "The Godfather",
                "original_language": "en",
                "title": "The Godfather",
                "backdrop_path": "/6xKCYgH16UuwEGAyroLU6p8HLIn.jpg",
                "popularity": 4.554654,
                "vote_count": 3570,
                "video": false,
                "vote_average": 8.26
              },
              {
                "poster_path": "/ynXoOxmDHNQ4UAy0oU6avW71HVW.jpg",
                "adult": false,
                "overview": "Spirited Away is an Oscar winning Japanese animated film about a ten year old girl who wanders away from her parents along a path that leads to a world ruled by strange and unusual monster-like animals. Her parents have been changed into pigs along with others inside a bathhouse full of these creatures. Will she ever see the world how it once was?",
                "release_date": "2001-07-20",
                "genre_ids": [
                  14,
                  12,
                  16,
                  10751
                ],
                "id": 129,
                "original_title": "千と千尋の神隠し",
                "original_language": "ja",
                "title": "Spirited Away",
                "backdrop_path": "/djgM2d3e42p9GFQObg6lwK2SVw2.jpg",
                "popularity": 6.886678,
                "vote_count": 2000,
                "video": false,
                "vote_average": 8.15
              },
              {
                "poster_path": "/nBNZadXqJSdt05SHLqgT0HuC5Gm.jpg",
                "adult": false,
                "overview": "Interstellar chronicles the adventures of a group of explorers who make use of a newly discovered wormhole to surpass the limitations on human space travel and conquer the vast distances involved in an interstellar voyage.",
                "release_date": "2014-11-05",
                "genre_ids": [
                  12,
                  18,
                  878
                ],
                "id": 157336,
                "original_title": "Interstellar",
                "original_language": "en",
                "title": "Interstellar",
                "backdrop_path": "/xu9zaAevzQ5nnrsXN6JcahLnG4i.jpg",
                "popularity": 12.481061,
                "vote_count": 5600,
                "video": false,
                "vote_average": 8.12
              },
              {
                "poster_path": "/tHbMIIF51rguMNSastqoQwR0sBs.jpg",
                "adult": false,
                "overview": "The continuing saga of the Corleone crime family tells the story of a young Vito Corleone growing up in Sicily and in 1910s New York; and follows Michael Corleone in the 1950s as he attempts to expand the family business into Las Vegas, Hollywood and Cuba",
                "release_date": "1974-12-20",
                "genre_ids": [
                  18,
                  80
                ],
                "id": 240,
                "original_title": "The Godfather: Part II",
                "original_language": "en",
                "title": "The Godfather: Part II",
                "backdrop_path": "/gLbBRyS7MBrmVUNce91Hmx9vzqI.jpg",
                "popularity": 4.003715,
                "vote_count": 1894,
                "video": false,
                "vote_average": 8.1
              },
              {
                "poster_path": "/4mFsNQwbD0F237Tx7gAPotd0nbJ.jpg",
                "adult": false,
                "overview": "A true story of two men who should never have met - a quadriplegic aristocrat who was injured in a paragliding accident and a young man from the projects.",
                "release_date": "2011-11-02",
                "genre_ids": [
                  18,
                  35
                ],
                "id": 77338,
                "original_title": "Intouchables",
                "original_language": "fr",
                "title": "The Intouchables",
                "backdrop_path": "/ihWaJZCUIon2dXcosjQG2JHJAPN.jpg",
                "popularity": 3.698279,
                "vote_count": 2740,
                "video": false,
                "vote_average": 8.1
              },
              {
                "poster_path": "/bwVhmPpydv8P7mWfrmL3XVw0MV5.jpg",
                "adult": false,
                "overview": "In the latter part of World War II, a boy and his sister, orphaned when their mother is killed in the firebombing of Tokyo, are left to survive on their own in what remains of civilian life in Japan. The plot follows this boy and his sister as they do their best to survive in the Japanese countryside, battling hunger, prejudice, and pride in their own quiet, personal battle.",
                "release_date": "1988-04-16",
                "genre_ids": [
                  16,
                  18,
                  10751,
                  10752
                ],
                "id": 12477,
                "original_title": "火垂るの墓",
                "original_language": "ja",
                "title": "Grave of the Fireflies",
                "backdrop_path": "/fCUIuG7y4YKC3hofZ8wsj7zhCpR.jpg",
                "popularity": 1.001401,
                "vote_count": 430,
                "video": false,
                "vote_average": 8.07
              },
              {
                "poster_path": "/yPisjyLweCl1tbgwgtzBCNCBle.jpg",
                "adult": false,
                "overview": "Told from the perspective of businessman Oskar Schindler who saved over a thousand Jewish lives from the Nazis while they worked as slaves in his factory. Schindler’s List is based on a true story, illustrated in black and white and controversially filmed in many original locations.",
                "release_date": "1993-11-29",
                "genre_ids": [
                  18,
                  36,
                  10752
                ],
                "id": 424,
                "original_title": "Schindler is List",
                "original_language": "en",
                "title": "Schindler is List",
                "backdrop_path": "/rIpSszng8P0DL0TimSzZbpfnvh1.jpg",
                "popularity": 5.372319,
                "vote_count": 2308,
                "video": false,
                "vote_average": 8.07
              },
              {
                "poster_path": "/eqFckcHuFCT1FrzLOAvXBb4jHwq.jpg",
                "adult": false,
                "overview": "Jack is a young boy of 5 years old who has lived all his life in one room. He believes everything within it are the only real things in the world. But what will happen when his Ma suddenly tells him that there are other things outside of Room?",
                "release_date": "2015-10-16",
                "genre_ids": [
                  18,
                  53
                ],
                "id": 264644,
                "original_title": "Room",
                "original_language": "en",
                "title": "Room",
                "backdrop_path": "/tBhp8MGaiL3BXpPCSl5xY397sGH.jpg",
                "popularity": 5.593128,
                "vote_count": 1179,
                "video": false,
                "vote_average": 8.06
              },
              {
                "poster_path": "/f7DImXDebOs148U4uPjI61iDvaK.jpg",
                "adult": false,
                "overview": "A touching story of an Italian book seller of Jewish ancestry who lives in his own little fairy tale. His creative and happy life would come to an abrupt halt when his entire family is deported to a concentration camp during World War II. While locked up he tries to convince his son that the whole thing is just a game.",
                "release_date": "1997-12-20",
                "genre_ids": [
                  35,
                  18
                ],
                "id": 637,
                "original_title": "La vita è bella",
                "original_language": "it",
                "title": "Life Is Beautiful",
                "backdrop_path": "/bORe0eI72D874TMawOOFvqWS6Xe.jpg",
                "popularity": 5.385594,
                "vote_count": 1593,
                "video": false,
                "vote_average": 8.06
              },
              {
                "poster_path": "/s0C78plmx3dFcO3WMnoXCz56FiN.jpg",
                "adult": false,
                "overview": "A boy growing up in Dublin during the 1980s escapes his strained family life by starting a band to impress the mysterious girl he likes.",
                "release_date": "2016-04-15",
                "genre_ids": [
                  10749,
                  18,
                  10402
                ],
                "id": 369557,
                "original_title": "Sing Street",
                "original_language": "en",
                "title": "Sing Street",
                "backdrop_path": "/9j4UaRypr19wz0BOofwvkPRm1Se.jpg",
                "popularity": 3.343073,
                "vote_count": 61,
                "video": false,
                "vote_average": 8.06
              },
              {
                "poster_path": "/1hRoyzDtpgMU7Dz4JF22RANzQO7.jpg",
                "adult": false,
                "overview": "Batman raises the stakes in his war on crime. With the help of Lt. Jim Gordon and District Attorney Harvey Dent, Batman sets out to dismantle the remaining criminal organizations that plague the streets. The partnership proves to be effective, but they soon find themselves prey to a reign of chaos unleashed by a rising criminal mastermind known to the terrified citizens of Gotham as the Joker.",
                "release_date": "2008-07-16",
                "genre_ids": [
                  18,
                  28,
                  80,
                  53
                ],
                "id": 155,
                "original_title": "The Dark Knight",
                "original_language": "en",
                "title": "The Dark Knight",
                "backdrop_path": "/nnMC0BM6XbjIIrT4miYmMtPGcQV.jpg",
                "popularity": 8.090715,
                "vote_count": 7744,
                "video": false,
                "vote_average": 8.06
              },
              {
                "poster_path": "/811DjJTon9gD6hZ8nCjSitaIXFQ.jpg",
                "adult": false,
                "overview": "A ticking-time-bomb insomniac and a slippery soap salesman channel primal male aggression into a shocking new form of therapy. Their concept catches on, with underground \"fight clubs\" forming in every town, until an eccentric gets in the way and ignites an out-of-control spiral toward oblivion.",
                "release_date": "1999-10-14",
                "genre_ids": [
                  18
                ],
                "id": 550,
                "original_title": "Fight Club",
                "original_language": "en",
                "title": "Fight Club",
                "backdrop_path": "/8uO0gUM8aNqYLs1OsTBQiXu0fEv.jpg",
                "popularity": 6.590102,
                "vote_count": 5221,
                "video": false,
                "vote_average": 8.05
              },
              {
                "poster_path": "/dM2w364MScsjFf8pfMbaWUcWrR.jpg",
                "adult": false,
                "overview": "A burger-loving hit man, his philosophical partner, a drug-addled gangster is moll and a washed-up boxer converge in this sprawling, comedic crime caper. Their adventures unfurl in three stories that ingeniously trip back and forth in time.",
                "release_date": "1994-10-14",
                "genre_ids": [
                  53,
                  80
                ],
                "id": 680,
                "original_title": "Pulp Fiction",
                "original_language": "en",
                "title": "Pulp Fiction",
                "backdrop_path": "/mte63qJaVnoxkkXbHkdFujBnBgd.jpg",
                "popularity": 7.760216,
                "vote_count": 4722,
                "video": false,
                "vote_average": 8.04
              },
              {
                "poster_path": "/gzlJkVfWV5VEG5xK25cvFGJgkDz.jpg",
                "adult": false,
                "overview": "Ashitaka, a prince of the disappearing Ainu tribe, is cursed by a demonized boar god and must journey to the west to find a cure. Along the way, he encounters San, a young human woman fighting to protect the forest, and Lady Eboshi, who is trying to destroy it. Ashitaka must find a way to bring balance to this conflict.",
                "release_date": "1997-07-12",
                "genre_ids": [
                  12,
                  14,
                  16
                ],
                "id": 128,
                "original_title": "もののけ姫",
                "original_language": "ja",
                "title": "Princess Mononoke",
                "backdrop_path": "/dB2rATwfCbsPGfRLIoluBnKdVHb.jpg",
                "popularity": 4.672361,
                "vote_count": 954,
                "video": false,
                "vote_average": 8.04
              },
              {
                "poster_path": "/3TpMBcAYH4cxCw5WoRacWodMTCG.jpg",
                "adult": false,
                "overview": "An urban office worker finds that paper airplanes are instrumental in meeting a girl in ways he never expected.",
                "release_date": "2012-11-02",
                "genre_ids": [
                  16,
                  10751,
                  10749
                ],
                "id": 140420,
                "original_title": "Paperman",
                "original_language": "en",
                "title": "Paperman",
                "backdrop_path": "/cqn1ynw78Wan37jzs1Ckm7va97G.jpg",
                "popularity": 2.907096,
                "vote_count": 452,
                "video": false,
                "vote_average": 8.03
              },
              {
                "poster_path": "/pwpGfTImTGifEGgLb3s6LRPd4I6.jpg",
                "adult": false,
                "overview": "Henry Hill is a small time gangster, who takes part in a robbery with Jimmy Conway and Tommy De Vito, two other gangsters who have set their sights a bit higher. His two partners kill off everyone else involved in the robbery, and slowly start to climb up through the hierarchy of the Mob. Henry, however, is badly affected by his partners success, but will he stoop low enough to bring about the downfall of Jimmy and Tommy?",
                "release_date": "1990-09-12",
                "genre_ids": [
                  18,
                  80
                ],
                "id": 769,
                "original_title": "Goodfellas",
                "original_language": "en",
                "title": "Goodfellas",
                "backdrop_path": "/xDEOxA01480uLTWuvQCw61VmDBt.jpg",
                "popularity": 3.783589,
                "vote_count": 1528,
                "video": false,
                "vote_average": 8.02
              },
              {
                "poster_path": "/z4ROnCrL77ZMzT0MsNXY5j25wS2.jpg",
                "adult": false,
                "overview": "A man with a low IQ has accomplished great things in his life and been present during significant historic events - in each case, far exceeding what anyone imagined he could do. Yet, despite all the things he has attained, his one true love eludes him. Forrest Gump is the story of a man who rose above his challenges, and who proved that determination, courage, and love are more important than ability.",
                "release_date": "1994-07-06",
                "genre_ids": [
                  35,
                  18,
                  10749
                ],
                "id": 13,
                "original_title": "Forrest Gump",
                "original_language": "en",
                "title": "Forrest Gump",
                "backdrop_path": "/ctOEhQiFIHWkiaYp7b0ibSTe5IL.jpg",
                "popularity": 6.224491,
                "vote_count": 4279,
                "video": false,
                "vote_average": 8.02
              },
              {
                "poster_path": "/5hqbJSmtAimbaP3XcYshCixuUtk.jpg",
                "adult": false,
                "overview": "A veteran samurai, who has fallen on hard times, answers a village is request for protection from bandits. He gathers 6 other samurai to help him, and they teach the townspeople how to defend themselves, and they supply the samurai with three small meals a day. The film culminates in a giant battle when 40 bandits attack the village.",
                "release_date": "1954-04-26",
                "genre_ids": [
                  28,
                  18
                ],
                "id": 346,
                "original_title": "七人の侍",
                "original_language": "ja",
                "title": "Seven Samurai",
                "backdrop_path": "/61vLiK96sbXeHpQiMxI4CuqBA3z.jpg",
                "popularity": 2.93856,
                "vote_count": 436,
                "video": false,
                "vote_average": 8.02
              }
            ],
            "total_results": 5206,
            "total_pages": 261
          }', true);
    }

    public function mockGetUpcomingResponse(): array
    {
        return json_decode('{
            "page": 1,
            "results": [
              {
                "poster_path": "/pEFRzXtLmxYNjGd0XqJDHPDFKB2.jpg",
                "adult": false,
                "overview": "A lighthouse keeper and his wife living off the coast of Western Australia raise a baby they rescue from an adrift rowboat.",
                "release_date": "2016-09-02",
                "genre_ids": [
                  18
                ],
                "id": 283552,
                "original_title": "The Light Between Oceans",
                "original_language": "en",
                "title": "The Light Between Oceans",
                "backdrop_path": "/2Ah63TIvVmZM3hzUwR5hXFg2LEk.jpg",
                "popularity": 4.546151,
                "vote_count": 11,
                "video": false,
                "vote_average": 4.41
              },
              {
                "poster_path": "/udU6t5xPNDLlRTxhjXqgWFFYlvO.jpg",
                "adult": false,
                "overview": "Friends hatch a plot to retrieve a stolen cat by posing as drug dealers for a street gang.",
                "release_date": "2016-09-14",
                "genre_ids": [
                  28,
                  35
                ],
                "id": 342521,
                "original_title": "Keanu",
                "original_language": "en",
                "title": "Keanu",
                "backdrop_path": "/scM6zcBTXvUByKxQnyM11qWJbtX.jpg",
                "popularity": 3.51555,
                "vote_count": 97,
                "video": false,
                "vote_average": 6.04
              },
              {
                "poster_path": "/1BdD1kMK1phbANQHmddADzoeKgr.jpg",
                "adult": false,
                "overview": "On January 15, 2009, the world witnessed the \"Miracle on the Hudson\" when Captain \"Sully\" Sullenberger glided his disabled plane onto the frigid waters of the Hudson River, saving the lives of all 155 aboard. However, even as Sully was being heralded by the public and the media for his unprecedented feat of aviation skill, an investigation was unfolding that threatened to destroy his reputation and his career.",
                "release_date": "2016-09-08",
                "genre_ids": [
                  36,
                  18
                ],
                "id": 363676,
                "original_title": "Sully",
                "original_language": "en",
                "title": "Sully",
                "backdrop_path": "/nfj8iBvOjlb7ArbThO764HCQw5H.jpg",
                "popularity": 3.254896,
                "vote_count": 8,
                "video": false,
                "vote_average": 4.88
              },
              {
                "poster_path": "/2gd30NS4RD6XOnDlxp7nXYiCtT1.jpg",
                "adult": false,
                "overview": "The fates of Henry - an American correspondent - and Teresa, one of the Republic is censors during the Spanish Civil War.",
                "release_date": "2016-09-09",
                "genre_ids": [
                  18,
                  10752,
                  10749
                ],
                "id": 363841,
                "original_title": "Guernika",
                "original_language": "en",
                "title": "Guernica",
                "backdrop_path": "/abuvTNGs7d05C3OdYdmPqZLEFpY.jpg",
                "popularity": 3.218451,
                "vote_count": 9,
                "video": false,
                "vote_average": 4.61
              },
              {
                "poster_path": "/ag6NsqD8tpDGgAcs4CnfdI3miSD.jpg",
                "adult": false,
                "overview": "Louis, a terminally ill writer, returns home after a long absence to tell his family that he is dying.",
                "release_date": "2016-09-01",
                "genre_ids": [
                  18
                ],
                "id": 338189,
                "original_title": "Juste la fin du monde",
                "original_language": "fr",
                "title": "It is Only the End of the World",
                "backdrop_path": "/ngCkX82tbmMXQ2DhP9vqZbtSume.jpg",
                "popularity": 2.995961,
                "vote_count": 11,
                "video": false,
                "vote_average": 5.23
              },
              {
                "poster_path": "/kqmGs9q5WZkxKub60K6pU37GdvU.jpg",
                "adult": false,
                "overview": "A college student ventures with a group of friends into the Black Hills Forest in Maryland to uncover the mystery surrounding the disappearance of his sister years earlier, which many believe is connected to the legend of the Blair Witch. At first the group is hopeful, especially when a pair of locals offer to act as guides through the dark and winding woods, but as the endless night wears on, the group is visited by a menacing presence. Slowly, they begin to realize the legend is all too real and more sinister than they could have imagined.",
                "release_date": "2016-09-16",
                "genre_ids": [
                  27,
                  53
                ],
                "id": 351211,
                "original_title": "Blair Witch",
                "original_language": "en",
                "title": "Blair Witch",
                "backdrop_path": "/njj4Zk1ZEMNVvSO68BHHRHgqkcv.jpg",
                "popularity": 2.877025,
                "vote_count": 5,
                "video": false,
                "vote_average": 1.9
              },
              {
                "poster_path": "/zn3mchTeqXrSCJBpHsbS68HozWZ.jpg",
                "adult": false,
                "overview": "A big screen remake of John Sturges classic western The Magnificent Seven, itself a remake of Akira Kurosawa is Seven Samurai. Seven gun men in the old west gradually come together to help a poor village against savage thieves.",
                "release_date": "2016-09-22",
                "genre_ids": [
                  37,
                  28
                ],
                "id": 333484,
                "original_title": "The Magnificent Seven",
                "original_language": "en",
                "title": "The Magnificent Seven",
                "backdrop_path": "/g54J9MnNLe7WJYVIvdWTeTIygAH.jpg",
                "popularity": 2.652445,
                "vote_count": 8,
                "video": false,
                "vote_average": 3.94
              },
              {
                "poster_path": "/a4qrfP2fVWqasbUUdKCwjDGCTTM.jpg",
                "adult": false,
                "overview": "Breaking up with Mark Darcy leaves Bridget Jones over 40 and single again. Feeling that she has everything under control, Jones decides to focus on her career as a top news producer. Suddenly, her love life comes back from the dead when she meets a dashing and handsome American named Jack. Things could not be better, until Bridget discovers that she is pregnant. Now, the befuddled mom-to-be must figure out if the proud papa is Mark or Jack.",
                "release_date": "2016-09-15",
                "genre_ids": [
                  35,
                  10749
                ],
                "id": 95610,
                "original_title": "Bridget Jones is Baby",
                "original_language": "en",
                "title": "Bridget Jones is Baby",
                "backdrop_path": "/u81y11sFzOIHdduSrrajeHOaCbU.jpg",
                "popularity": 2.56718,
                "vote_count": 8,
                "video": false,
                "vote_average": 4.81
              },
              {
                "poster_path": "/39ia8d9HPZlnYuEX5w2Gk25Tpgs.jpg",
                "adult": false,
                "overview": "Morgan is about a corporate risk-management consultant who has to decide and determine whether or not to terminate an artificial being is life that was made in a laboratory environment.",
                "release_date": "2016-09-02",
                "genre_ids": [
                  53,
                  878
                ],
                "id": 377264,
                "original_title": "Morgan",
                "original_language": "en",
                "title": "Morgan",
                "backdrop_path": "/j8h0zfecahJlamSle54UP3AP2k3.jpg",
                "popularity": 2.351093,
                "vote_count": 6,
                "video": false,
                "vote_average": 6.75
              },
              {
                "poster_path": "/jMRRPpUlDrCGWlMWJ1cuSANcgTP.jpg",
                "adult": false,
                "overview": "A psychologist who begins working with a young boy who has suffered a near-fatal fall finds himself drawn into a mystery that tests the boundaries of fantasy and reality.",
                "release_date": "2016-09-01",
                "genre_ids": [
                  53,
                  9648
                ],
                "id": 294795,
                "original_title": "The 9th Life of Louis Drax",
                "original_language": "en",
                "title": "The 9th Life of Louis Drax",
                "backdrop_path": "/yoHlRFkgcP5AbaFpyanmEhe21Dn.jpg",
                "popularity": 2.260147,
                "vote_count": 2,
                "video": false,
                "vote_average": 1
              },
              {
                "poster_path": "/a1rgwkG8tmnCStnpxsYaoaoyyFE.jpg",
                "adult": false,
                "overview": "In PUPPET MASTER XI - AXIS TERMINATION, the final chapter of the AXIS Saga, we find our heroic band of lethal puppets-BLADE, PINHEAD, TUNNELER, JESTER, SIX SHOOTER, and LEECH WOMAN, joining forces with a secret team of Allied Operatives, all masters of psychic powers, as they face off together against a new bunch of evil Nazi adversaries and their collection of vicious Axis Puppets in a showdown that will decide the future of the free world.",
                "release_date": "2016-09-01",
                "genre_ids": [
                  10752,
                  27,
                  14
                ],
                "id": 384978,
                "original_title": "Puppet Master: Axis Termination",
                "original_language": "en",
                "title": "Puppet Master: Axis Termination",
                "backdrop_path": null,
                "popularity": 2.084518,
                "vote_count": 1,
                "video": false,
                "vote_average": 0.5
              },
              {
                "poster_path": "/2bispHSt2EGcnQdd5qZEZlJesvz.jpg",
                "adult": false,
                "overview": "Living in her family is secluded mansion, Audrina is kept alone and out of sight and is haunted by nightmares of her older sister, First Audrina, who was left for dead in the woods after an attack. As she begins to question her past and her disturbing dreams, the grim truth is slowly revealed.",
                "release_date": "2016-09-01",
                "genre_ids": [
                  18
                ],
                "id": 377186,
                "original_title": "My Sweet Audrina",
                "original_language": "en",
                "title": "My Sweet Audrina",
                "backdrop_path": "/7tfLi2dhNVjXQTzCvSveuwuGI9r.jpg",
                "popularity": 2.009281,
                "vote_count": 1,
                "video": false,
                "vote_average": 6
              },
              {
                "poster_path": "/nhFfXtrWmWkv3C3wO8Js4MuOmMk.jpg",
                "adult": false,
                "overview": "CIA employee Edward Snowden leaks thousands of classified documents to the press.",
                "release_date": "2016-09-16",
                "genre_ids": [
                  18,
                  53
                ],
                "id": 302401,
                "original_title": "Snowden",
                "original_language": "en",
                "title": "Snowden",
                "backdrop_path": "/gtVH1gIhcgba26kPqFfYul7RuPA.jpg",
                "popularity": 1.975744,
                "vote_count": 17,
                "video": false,
                "vote_average": 5.38
              },
              {
                "poster_path": "/troGmWMITCiQzH7sZOhCirryx0u.jpg",
                "adult": false,
                "overview": "It is the 1960s. Two Maori families, the Mahanas and the Poatas, make a living shearing sheep on the east coast of New Zealand. The two clans, who are bitter enemies, face each other as rivals at the annual sheep shearing competitions. Simeon is a 14-year-old scion of the Mahana clan. A courageous schoolboy, he rebels against his authoritarian grandfather Tamihana and his traditional ways of thinking and begins to unravel the reasons for the long-standing feud between the two families. Before long, the hierarchies and established structures of the community are in disarray because Tamihana, who is as stubborn as he is proud, is not prepared to acquiesce and pursue new paths.",
                "release_date": "2016-09-01",
                "genre_ids": [
                  18
                ],
                "id": 371647,
                "original_title": "Mahana",
                "original_language": "en",
                "title": "Mahana",
                "backdrop_path": "/6HHpnlFsKNxPCEg8Ey0qIP6ag84.jpg",
                "popularity": 1.938685,
                "vote_count": 1,
                "video": false,
                "vote_average": 6
              },
              {
                "poster_path": "/9Qzt2ywgaoQCIA3WtQSqRccCJaL.jpg",
                "adult": false,
                "overview": "Akira (English: Graceful Strength) is an upcoming Hindi action drama film directed and produced by AR Murugadoss. It is the remake of Tamil film Mouna Guru (2011) and features Sonakshi Sinha in lead role.",
                "release_date": "2016-09-02",
                "genre_ids": [
                  80,
                  18,
                  53
                ],
                "id": 404579,
                "original_title": "Akira",
                "original_language": "hi",
                "title": "Akira",
                "backdrop_path": null,
                "popularity": 1.921411,
                "vote_count": 3,
                "video": false,
                "vote_average": 9.33
              },
              {
                "poster_path": "/yVHF2J5J0DRr0X4kSgzvxJLJuKa.jpg",
                "adult": false,
                "overview": "Three inept night watchmen, aided by a young rookie and a fearless tabloid journalist, fight an epic battle to save their lives. A mistaken warehouse delivery unleashes a horde of hungry vampires, and these unlikely heroes must not only save themselves but also stop the scourge that threatens to take over the city of Baltimore.",
                "release_date": "2016-09-01",
                "genre_ids": [
                  35,
                  27
                ],
                "id": 398798,
                "original_title": "The Night Watchmen",
                "original_language": "en",
                "title": "The Night Watchmen",
                "backdrop_path": "/hb2f9Ru1hoYT9Mfxm44bxdDYcZ7.jpg",
                "popularity": 1.919426,
                "vote_count": 0,
                "video": false,
                "vote_average": 0
              },
              {
                "poster_path": "/60WOPoQnDOQrA7FpT3a176QE4BU.jpg",
                "adult": false,
                "overview": "Politics is the Puerto Rican national sport, and in this sport anything is possible. Fate brings Pepo González, an ordinary, unemployed citizen, before an unscrupulous former political adviser. Her plan: to select a total stranger, without qualities or political lineage, and take the Capitol during one of the most important elections in the history of Puerto Rico. Will she be able to get Pepo a seat in the Senate?",
                "release_date": "2016-09-01",
                "genre_ids": [
                  35
                ],
                "id": 398351,
                "original_title": "Pepo Pal Senado",
                "original_language": "es",
                "title": "Pepo Pal Senado",
                "backdrop_path": null,
                "popularity": 1.899033,
                "vote_count": 1,
                "video": false,
                "vote_average": 10
              },
              {
                "poster_path": "/sKSyI4Ebw0gZOH4a1B6FLQQwvex.jpg",
                "adult": false,
                "overview": "An art student named Gwang-ho gets dumped by his girlfriend because she was only his source of comfort, and that he is a Mama is boy and a premature ejaculator. He tries to avoid seeing her by going to a different academy and that is when his mother introduces him to her friend Soo-yeon, a sophisticated and intelligent looking woman. Gwang-ho falls for her. Gwang-ho is mother suddenly leaves for Australia because his father is sick and Gwang-ho gets to stay in Soo-yeon is house for a few days. Looking at her, he thinks of all the things he would like to do with her and Soo-yeon is niece Ha-kyeong stimulates him to do something about his feelings.",
                "release_date": "2016-09-01",
                "genre_ids": [],
                "id": 412092,
                "original_title": "Mom is Friend 2",
                "original_language": "en",
                "title": "Mom is Friend 2",
                "backdrop_path": null,
                "popularity": 1.832246,
                "vote_count": 0,
                "video": false,
                "vote_average": 0
              },
              {
                "poster_path": "/dEn82uit9cE3jisE94JlFLxZBF3.jpg",
                "adult": false,
                "overview": "A musical drama inspired by the 1956 classic, Tiga Dara.",
                "release_date": "2016-09-01",
                "genre_ids": [
                  18,
                  10402
                ],
                "id": 406593,
                "original_title": "Ini Kisah Tiga Dara",
                "original_language": "id",
                "title": "Three Sassy Sisters",
                "backdrop_path": null,
                "popularity": 1.810012,
                "vote_count": 0,
                "video": false,
                "vote_average": 0
              },
              {
                "poster_path": "/vMZ7SejN1NITX1LhcSJ5vAe63lf.jpg",
                "adult": false,
                "overview": "Janatha Garage is an upcoming 2016 Indian bilingual action film made in Telugu and Malayalam languages. The film is written and directed by Koratala Siva and produced by Naveen Yerneni, Y. Ravi Shankar, and C. V. Mohan under their banner Mythri Movie Makers in association with Eros International.",
                "release_date": "2016-09-01",
                "genre_ids": [
                  18,
                  28
                ],
                "id": 405924,
                "original_title": "జనతా గ్యారేజ్",
                "original_language": "te",
                "title": "Janatha Garage",
                "backdrop_path": "/hup1MpyXuemlaHPslMzVhrex3mZ.jpg",
                "popularity": 1.803778,
                "vote_count": 0,
                "video": false,
                "vote_average": 0
              }
            ],
            "dates": {
              "maximum": "2016-09-22",
              "minimum": "2016-09-01"
            },
            "total_pages": 12,
            "total_results": 222
          }', true);
    }
}
