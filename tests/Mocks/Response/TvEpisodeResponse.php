<?php

namespace CodeBugLab\Tmdb\Tests\Mocks\Response;

trait TvEpisodeResponse
{
    public function mockGetDetailsResponse(): array
    {
        return json_decode('{
            "air_date": "2011-04-17",
            "crew": [
              {
                "id": 44797,
                "credit_id": "5256c8a219c2956ff6046e77",
                "name": "Tim Van Patten",
                "department": "Directing",
                "job": "Director",
                "profile_path": "/6b7l9YbkDHDOzOKUFNqBVaPjcgm.jpg"
              },
              {
                "id": 1318704,
                "credit_id": "54eef2429251417974005cb6",
                "name": "Alik Sakharov",
                "department": "Camera",
                "job": "Director of Photography",
                "profile_path": "/50ZlHkh66aOPxQMjQ21LJDAkYlR.jpg"
              },
              {
                "id": 18077,
                "credit_id": "54eef2ab925141795f005d4f",
                "name": "Oral Norrie Ottey",
                "department": "Editing",
                "job": "Editor",
                "profile_path": null
              },
              {
                "id": 9813,
                "credit_id": "5256c8a019c2956ff6046e2b",
                "name": "David Benioff",
                "department": "Writing",
                "job": "Writer",
                "profile_path": "/8CuuNIKMzMUL1NKOPv9AqEwM7og.jpg"
              },
              {
                "id": 228068,
                "credit_id": "5256c8a219c2956ff6046e4b",
                "name": "D. B. Weiss",
                "department": "Writing",
                "job": "Writer",
                "profile_path": "/caUAtilEe06OwOjoQY3B7BgpARi.jpg"
              }
            ],
            "episode_number": 1,
            "guest_stars": [
              {
                "id": 117642,
                "name": "Jason Momoa",
                "credit_id": "5256c8a219c2956ff6046f40",
                "character": "Khal Drogo",
                "order": 0,
                "profile_path": "/PSK6GmsVwdhqz9cd1lwzC6a7EA.jpg"
              },
              {
                "id": 946696,
                "name": "Ian Whyte",
                "credit_id": "5750cd459251412b0f000224",
                "character": "White Walker",
                "order": 46,
                "profile_path": "/6mRY7hTtHfDTGuTLmZmODOu9buF.jpg"
              },
              {
                "id": 438859,
                "name": "Susan Brown",
                "credit_id": "57520bc19251414c470000de",
                "character": "Septa Mordane",
                "order": 52,
                "profile_path": "/5bYvoJDOw4okAzSxJ1avXweUyA9.jpg"
              },
              {
                "id": 1833,
                "name": "Jamie Sives",
                "credit_id": "5752136f9251414c510001a0",
                "character": "Jory Cassel",
                "order": 55,
                "profile_path": "/92BcXrr2W7gZri6xVlLhpLLaPsf.jpg"
              },
              {
                "id": 234907,
                "name": "Dar Salim",
                "credit_id": "5752158b9251414c470001c0",
                "character": "Qotho",
                "order": 56,
                "profile_path": "/3CrPTwZJ0hsWzX7oi7sKFfzDo82.jpg"
              },
              {
                "id": 11279,
                "name": "Roger Allam",
                "credit_id": "575216bdc3a36851fe0001d8",
                "character": "Illyrio Mopatis",
                "order": 57,
                "profile_path": "/gr59GfVZz9QV6jZyHKOsKCBxXPr.jpg"
              },
              {
                "id": 1600544,
                "name": "Aimee Richardson",
                "credit_id": "57521d4cc3a3685215000344",
                "character": "Myrcella Baratheon",
                "order": 60,
                "profile_path": "/r53KnAfLiR8NaK3Kp2Nu4q0KSoP.jpg"
              },
              {
                "id": 1600543,
                "name": "Callum Wharry",
                "credit_id": "57521fafc3a368521500041d",
                "character": "Tommen Baratheon",
                "order": 61,
                "profile_path": "/rVaMQfGwylZWWM2eRJ3qAEkS0tK.jpg"
              }
            ],
            "name": "Winter Is Coming",
            "overview": "Jon Arryn, the Hand of the King, is dead. King Robert Baratheon plans to ask his oldest friend, Eddard Stark, to take Jon\'s place. Across the sea, Viserys Targaryen plans to wed his sister to a nomadic warlord in exchange for an army.",
            "id": 63056,
            "production_code": "101",
            "season_number": 1,
            "still_path": "/wrGWeW4WKxnaeA8sxJb2T9O6ryo.jpg",
            "vote_average": 7.11904761904762,
            "vote_count": 21
          }', true);
    }

    public function mockGetChangesResponse(): array
    {
        return json_decode('{
            "changes": [
              {
                "key": "production_code",
                "items": [
                  {
                    "id": "54bd9ed7c3a3686c6b00da66",
                    "action": "added",
                    "time": "2015-01-20 00:18:31 UTC",
                    "value": "101"
                  }
                ]
              },
              {
                "key": "overview",
                "items": [
                  {
                    "id": "54bd9ed7c3a3686c6b00da67",
                    "action": "updated",
                    "time": "2015-01-20 00:18:31 UTC",
                    "iso_639_1": "fr",
                    "value": "Sur le continent de Westeros, un jeune patrouilleur de la Garde de Nuit, charg??e de veiller sur le Mur, est condamn?? ?? mort pour d??sertion par Eddard Stark, seigneur de Winterfell et Gardien du Nord. Mais de sombres nouvelles arrivent de Port-R??al, la capitale des Sept Couronnes : Jon Arryn, ami intime d\'Eddard et Main du roi Robert Baratheon, vient de mourir. Le roi Robert et sa cour entreprennent alors un voyage vers Winterfell, pour gratifier son ami Eddard de la charge de Main du roi. Pendant ce temps, les descendants des rois Targaryen en exil, renvers??s par Robert, fomentent leur retour en Westeros par un jeu d\'alliance avec les Dothrakis, une tribu de guerriers nomades.\nAlors qu\'?? Winterfell les festivit??s vont bon train durant le s??jour du roi, Brandon, l\'un des fils d\'Eddard Stark, fait une d??couverte qui lui attire les foudres de la famille royale???",
                    "original_value": "Sur le continent de Westeros, un jeune patrouilleur de la Garde de Nuit, charg??e de veiller sur le Mur, est condamn?? ?? mort pour d??sertion par Eddard Stark, seigneur de Winterfell et Gardien du Nord. Mais de sombres nouvelles arrivent de Port-R??al, la capitale des Sept Couronnes : Jon Arryn, ami intime d\'Eddard et Main du roi Robert Baratheon, vient de mourir. Le roi Robert et sa cour entreprennent alors un voyage vers Winterfell, pour gratifier son ami Eddard de la charge de Main du roi. Pendant ce temps, les descendants des rois Targaryen en exil, renvers??s par Robert, fomentent leur retour en Westeros par un jeu d\'alliance avec les Dothrakis, une tribu de guerriers nomades.\n\nAlors qu\'?? Winterfell les festivit??s vont bon train durant le s??jour du roi, Brandon, l\'un des fils d\'Eddard Stark, fait une d??couverte qui lui attire les foudres de la famille royale..."
                  },
                  {
                    "id": "54c53255c3a36814210141d0",
                    "action": "added",
                    "time": "2015-01-25 18:13:41 UTC",
                    "iso_639_1": "es",
                    "value": "Ned Stark, Se??or de Invernalia se entera de que su mentor, Jon Arryn, ha muerto y por esto el Rey Robert se dirige hacia el norte para ofrecerle ser la Mano del Rey. Al otro lado del Mar en Pentos, Viserys Targaryen planea casar a su hermana Daenerys con el lider de los guerreros de la tribu Dothraki, Khal Drogo con el objetivo de forjar una alianza que le permita reclamar el trono."
                  }
                ]
              },
              {
                "key": "tvrage_id",
                "items": [
                  {
                    "id": "54bd9ed89251416e9b005079",
                    "action": "added",
                    "time": "2015-01-20 00:18:32 UTC",
                    "value": "1065008299"
                  }
                ]
              },
              {
                "key": "name",
                "items": [
                  {
                    "id": "54c53255c3a36814210141cf",
                    "action": "added",
                    "time": "2015-01-25 18:13:41 UTC",
                    "iso_639_1": "es",
                    "value": "Se acerca el invierno"
                  }
                ]
              }
            ]
          }', true);
    }

    public function mockGetCreditsResponse(): array
    {
        return json_decode('{
            "cast": [
              {
                "adult": false,
                "gender": 1,
                "id": 1223786,
                "known_for_department": "Acting",
                "name": "Emilia Clarke",
                "original_name": "Emilia Clarke",
                "popularity": 14.322,
                "profile_path": "/r6i4C3kYrBRzUzZ8JKAHYQ0T0dD.jpg",
                "character": "Daenerys Targaryen",
                "credit_id": "5256c8af19c2956ff60479f6",
                "order": 0
              },
              {
                "adult": false,
                "gender": 2,
                "id": 13633,
                "known_for_department": "Acting",
                "name": "Mark Addy",
                "original_name": "Mark Addy",
                "popularity": 6.012,
                "profile_path": "/4ao6jitEAxmQDlJheEOKT8lhJI8.jpg",
                "character": "Robert Baratheon",
                "credit_id": "5256c8ad19c2956ff60478e2",
                "order": 1
              },
              {
                "adult": false,
                "gender": 1,
                "id": 17286,
                "known_for_department": "Acting",
                "name": "Lena Headey",
                "original_name": "Lena Headey",
                "popularity": 17.409,
                "profile_path": "/i2fAeyUY42URnR0bR4wBYvAo2eB.jpg",
                "character": "Cersei Lannister",
                "credit_id": "5256c8ad19c2956ff60479ce",
                "order": 1
              },
              {
                "adult": false,
                "gender": 1,
                "id": 1001657,
                "known_for_department": "Acting",
                "name": "Sophie Turner",
                "original_name": "Sophie Turner",
                "popularity": 10.289,
                "profile_path": "/1hUAKYvSi4vZSYvTnD2TlqF6VVx.jpg",
                "character": "Sansa Stark",
                "credit_id": "5256c8b419c2956ff6047f34",
                "order": 2
              },
              {
                "adult": false,
                "gender": 2,
                "id": 239019,
                "known_for_department": "Acting",
                "name": "Kit Harington",
                "original_name": "Kit Harington",
                "popularity": 4.84,
                "profile_path": "/4MqUjb1SYrzHmFSyGiXnlZWLvBs.jpg",
                "character": "Jon Snow",
                "credit_id": "5256c8af19c2956ff6047af6",
                "order": 3
              },
              {
                "adult": false,
                "gender": 2,
                "id": 22970,
                "known_for_department": "Acting",
                "name": "Peter Dinklage",
                "original_name": "Peter Dinklage",
                "popularity": 6.646,
                "profile_path": "/aVHPYuRNQub8aQYX9clFEdq9ZQS.jpg",
                "character": "Tyrion Lannister",
                "credit_id": "5256c8b219c2956ff6047cd8",
                "order": 4
              },
              {
                "adult": false,
                "gender": 2,
                "id": 12795,
                "known_for_department": "Acting",
                "name": "Nikolaj Coster-Waldau",
                "original_name": "Nikolaj Coster-Waldau",
                "popularity": 8.532,
                "profile_path": "/dv1zRmSvSg8lDrxeM0SswYze6Z0.jpg",
                "character": "Jaime Lannister",
                "credit_id": "5256c8ad19c2956ff604793e",
                "order": 5
              },
              {
                "adult": false,
                "gender": 1,
                "id": 1181313,
                "known_for_department": "Acting",
                "name": "Maisie Williams",
                "original_name": "Maisie Williams",
                "popularity": 26.361,
                "profile_path": "/zLTq39cdRjS43dEzb78c1p1QcbT.jpg",
                "character": "Arya Stark",
                "credit_id": "5256c8b419c2956ff6047f0c",
                "order": 6
              },
              {
                "adult": false,
                "gender": 2,
                "id": 489467,
                "known_for_department": "Acting",
                "name": "Jack Gleeson",
                "original_name": "Jack Gleeson",
                "popularity": 1.929,
                "profile_path": "/t29CnCe6UKonBAxwNXkpJ54QLYR.jpg",
                "character": "Joffrey Baratheon",
                "credit_id": "5256c8b119c2956ff6047c4e",
                "order": 7
              },
              {
                "adult": false,
                "gender": 2,
                "id": 84423,
                "known_for_department": "Acting",
                "name": "Conleth Hill",
                "original_name": "Conleth Hill",
                "popularity": 4.646,
                "profile_path": "/eeTnNiustUbShHU09EQ6LoOpzcg.jpg",
                "character": "Varys",
                "credit_id": "5256c8b219c2956ff6047d6e",
                "order": 9
              },
              {
                "adult": false,
                "gender": 2,
                "id": 239020,
                "known_for_department": "Acting",
                "name": "Isaac Hempstead-Wright",
                "original_name": "Isaac Hempstead-Wright",
                "popularity": 2.796,
                "profile_path": "/b6hQvID3oXPXnyrrXs22MBv2lyN.jpg",
                "character": "Bran Stark",
                "credit_id": "5256c8b119c2956ff6047c22",
                "order": 11
              },
              {
                "adult": false,
                "gender": 2,
                "id": 49735,
                "known_for_department": "Acting",
                "name": "Aidan Gillen",
                "original_name": "Aidan Gillen",
                "popularity": 6.389,
                "profile_path": "/ju5ho6nnwOQ2QLGLnDP9yOZhGpb.jpg",
                "character": "Petyr Baelish",
                "credit_id": "5256c8af19c2956ff6047aa4",
                "order": 12
              },
              {
                "adult": false,
                "gender": 2,
                "id": 3075,
                "known_for_department": "Acting",
                "name": "Rory McCann",
                "original_name": "Rory McCann",
                "popularity": 2.825,
                "profile_path": "/meEHyiCRXTTCiYQMzP4VEdvEuD0.jpg",
                "character": "Sandor Clegane",
                "credit_id": "5256c8b119c2956ff6047c84",
                "order": 14
              },
              {
                "adult": false,
                "gender": 2,
                "id": 205258,
                "known_for_department": "Acting",
                "name": "Harry Lloyd",
                "original_name": "Harry Lloyd",
                "popularity": 3.753,
                "profile_path": "/qZSf6OzRpDaZdOCX6pynSRp6jVV.jpg",
                "character": "Viserys Targaryen",
                "credit_id": "5256c8af19c2956ff6047ac2",
                "order": 26
              },
              {
                "adult": false,
                "gender": 2,
                "id": 512991,
                "known_for_department": "Acting",
                "name": "Richard Madden",
                "original_name": "Richard Madden",
                "popularity": 6.545,
                "profile_path": "/kC7X9LgAtJfpxUBRtVwaVTEXomH.jpg",
                "character": "Robb Stark",
                "credit_id": "5256c8af19c2956ff6047b1a",
                "order": 27
              },
              {
                "adult": false,
                "gender": 2,
                "id": 20508,
                "known_for_department": "Acting",
                "name": "Iain Glen",
                "original_name": "Iain Glen",
                "popularity": 5.771,
                "profile_path": "/vYEI5xJWJ6HKjPusvO2klAvez3J.jpg",
                "character": "Jorah Mormont",
                "credit_id": "5256c8af19c2956ff6047a5c",
                "order": 476
              },
              {
                "adult": false,
                "gender": 1,
                "id": 20057,
                "known_for_department": "Acting",
                "name": "Michelle Fairley",
                "original_name": "Michelle Fairley",
                "popularity": 5.555,
                "profile_path": "/j8lQfEPHCKWV2QCiJJuH97CnoBX.jpg",
                "character": "Catelyn Stark",
                "credit_id": "5256c8ad19c2956ff604796a",
                "order": 478
              },
              {
                "adult": false,
                "gender": 2,
                "id": 71586,
                "known_for_department": "Acting",
                "name": "Alfie Allen",
                "original_name": "Alfie Allen",
                "popularity": 4.228,
                "profile_path": "/zmhO4Awjf7naHPXkbJWwjQpojwq.jpg",
                "character": "Theon Greyjoy",
                "credit_id": "5256c8b019c2956ff6047b5a",
                "order": 478
              },
              {
                "adult": false,
                "gender": 2,
                "id": 48,
                "known_for_department": "Acting",
                "name": "Sean Bean",
                "original_name": "Sean Bean",
                "popularity": 22.671,
                "profile_path": "/kTjiABk3TJ3yI0Cto5RsvyT6V3o.jpg",
                "character": "Ned Stark",
                "credit_id": "58c7134792514179d20011a9",
                "order": 500
              },
              {
                "adult": false,
                "gender": 2,
                "id": 117642,
                "known_for_department": "Acting",
                "name": "Jason Momoa",
                "original_name": "Jason Momoa",
                "popularity": 9.196,
                "profile_path": "/6dEFBpZH8C8OijsynkSajQT99Pb.jpg",
                "character": "Drogo",
                "credit_id": "5d075ca49251416c7db8cf5d",
                "order": 500
              }
            ],
            "crew": [
              {
                "department": "Directing",
                "job": "Director",
                "credit_id": "5256c8a219c2956ff6046e77",
                "adult": false,
                "gender": 2,
                "id": 44797,
                "known_for_department": "Directing",
                "name": "Timothy Van Patten",
                "original_name": "Timothy Van Patten",
                "popularity": 1.96,
                "profile_path": "/MzSOFrd99HRdr6pkSRSctk3kBR.jpg"
              },
              {
                "job": "Director of Photography",
                "department": "Camera",
                "credit_id": "54eef2429251417974005cb6",
                "adult": false,
                "gender": 2,
                "id": 1318704,
                "known_for_department": "Directing",
                "name": "Alik Sakharov",
                "original_name": "Alik Sakharov",
                "popularity": 1.4,
                "profile_path": null
              },
              {
                "job": "Editor",
                "department": "Editing",
                "credit_id": "54eef2ab925141795f005d4f",
                "adult": false,
                "gender": 2,
                "id": 18077,
                "known_for_department": "Editing",
                "name": "Oral Norrie Ottey",
                "original_name": "Oral Norrie Ottey",
                "popularity": 0.994,
                "profile_path": null
              },
              {
                "job": "Writer",
                "department": "Writing",
                "credit_id": "5256c8a019c2956ff6046e2b",
                "adult": false,
                "gender": 2,
                "id": 9813,
                "known_for_department": "Writing",
                "name": "David Benioff",
                "original_name": "David Benioff",
                "popularity": 1.27,
                "profile_path": "/xvNN5huL0X8yJ7h3IZfGG4O2zBD.jpg"
              },
              {
                "job": "Writer",
                "department": "Writing",
                "credit_id": "5256c8a219c2956ff6046e4b",
                "adult": false,
                "gender": 2,
                "id": 228068,
                "known_for_department": "Creator",
                "name": "D. B. Weiss",
                "original_name": "D. B. Weiss",
                "popularity": 1.631,
                "profile_path": null
              }
            ],
            "guest_stars": [
              {
                "character_name": "Khal Drogo",
                "credit_id": "5256c8a219c2956ff6046f40",
                "order": 0,
                "adult": false,
                "gender": 2,
                "id": 117642,
                "known_for_department": "Acting",
                "name": "Jason Momoa",
                "original_name": "Jason Momoa",
                "popularity": 9.196,
                "profile_path": "/6dEFBpZH8C8OijsynkSajQT99Pb.jpg"
              },
              {
                "character_name": "Benjen Stark",
                "credit_id": "5256c8b919c2956ff604836a",
                "order": 39,
                "adult": false,
                "gender": 2,
                "id": 119783,
                "known_for_department": "Acting",
                "name": "Joseph Mawle",
                "original_name": "Joseph Mawle",
                "popularity": 3.644,
                "profile_path": "/1Ocb9v3h54beGVoJMm4w50UQhLf.jpg"
              },
              {
                "character_name": "Wun Weg Wun Dar Wun",
                "credit_id": "5750cd459251412b0f000224",
                "order": 46,
                "adult": false,
                "gender": 2,
                "id": 946696,
                "known_for_department": "Acting",
                "name": "Ian Whyte",
                "original_name": "Ian Whyte",
                "popularity": 2.006,
                "profile_path": "/5wCmWytRO26tmtzkrCpFp6fIhHW.jpg"
              },
              {
                "character_name": "Septa Mordane",
                "credit_id": "57520bc19251414c470000de",
                "order": 52,
                "adult": false,
                "gender": 1,
                "id": 438859,
                "known_for_department": "Acting",
                "name": "Susan Brown",
                "original_name": "Susan Brown",
                "popularity": 1.62,
                "profile_path": "/rbi81V4GUsOqjUfLvnoHj4lIAMf.jpg"
              },
              {
                "character_name": "Jory Cassel",
                "credit_id": "5752136f9251414c510001a0",
                "order": 55,
                "adult": false,
                "gender": 2,
                "id": 1833,
                "known_for_department": "Acting",
                "name": "Jamie Sives",
                "original_name": "Jamie Sives",
                "popularity": 1.96,
                "profile_path": null
              },
              {
                "character_name": "Qotho",
                "credit_id": "5752158b9251414c470001c0",
                "order": 56,
                "adult": false,
                "gender": 2,
                "id": 234907,
                "known_for_department": "Acting",
                "name": "Dar Salim",
                "original_name": "Dar Salim",
                "popularity": 1.812,
                "profile_path": "/9zHcalMzeD3aW9jnTQqKhpuuZpP.jpg"
              },
              {
                "character_name": "Illyrio Mopatis",
                "credit_id": "575216bdc3a36851fe0001d8",
                "order": 57,
                "adult": false,
                "gender": 2,
                "id": 11279,
                "known_for_department": "Acting",
                "name": "Roger Allam",
                "original_name": "Roger Allam",
                "popularity": 3.332,
                "profile_path": "/hrtVjATnltwatFCOjhtCZTnN2hW.jpg"
              },
              {
                "character_name": "Myrcella Baratheon",
                "credit_id": "57521d4cc3a3685215000344",
                "order": 60,
                "adult": false,
                "gender": 1,
                "id": 1600544,
                "known_for_department": "Acting",
                "name": "Aimee Richardson",
                "original_name": "Aimee Richardson",
                "popularity": 1.4,
                "profile_path": "/97wwITEknXx7MbQda71NegQvJtz.jpg"
              },
              {
                "character_name": "Tommen Baratheon",
                "credit_id": "57521fafc3a368521500041d",
                "order": 61,
                "adult": false,
                "gender": 0,
                "id": 1600543,
                "known_for_department": "Acting",
                "name": "Callum Wharry",
                "original_name": "Callum Wharry",
                "popularity": 5.232,
                "profile_path": "/tNW2DukUhi0ljCxOcYqs6x30LIH.jpg"
              },
              {
                "character_name": "Gared",
                "credit_id": "57b72bcc925141389d002188",
                "order": 79,
                "adult": false,
                "gender": 2,
                "id": 191751,
                "known_for_department": "Acting",
                "name": "Dermot Keaney",
                "original_name": "Dermot Keaney",
                "popularity": 1.4,
                "profile_path": "/nvXkSjiw3cgpGRmeKRwQkgdprb5.jpg"
              },
              {
                "character_name": "Maester Luwin",
                "credit_id": "5987d310c3a3681e2a014bfe",
                "order": 121,
                "adult": false,
                "gender": 2,
                "id": 20425,
                "known_for_department": "Acting",
                "name": "Donald Sumpter",
                "original_name": "Donald Sumpter",
                "popularity": 2.796,
                "profile_path": "/jCxD84Vr9TTM5am0Ij3pCsNcted.jpg"
              },
              {
                "character_name": "Rodrik Cassel",
                "credit_id": "5987d342c3a3681df0012c76",
                "order": 122,
                "adult": false,
                "gender": 2,
                "id": 63141,
                "known_for_department": "Acting",
                "name": "Ron Donachie",
                "original_name": "Ron Donachie",
                "popularity": 1.22,
                "profile_path": "/niYfS6kaVww3nPEHbijVeTFW0xT.jpg"
              },
              {
                "character_name": "Ros",
                "credit_id": "5987d3909251415244014acc",
                "order": 123,
                "adult": false,
                "gender": 1,
                "id": 1014921,
                "known_for_department": "Acting",
                "name": "Esm?? Bianco",
                "original_name": "Esm?? Bianco",
                "popularity": 1.562,
                "profile_path": "/mcbQdFHVEbGypOdDiNMCcqHgNaX.jpg"
              },
              {
                "character_name": "Will",
                "credit_id": "5987d3a4c3a3683234028a9e",
                "order": 124,
                "adult": false,
                "gender": 2,
                "id": 75076,
                "known_for_department": "Acting",
                "name": "Bronson Webb",
                "original_name": "Bronson Webb",
                "popularity": 3.38,
                "profile_path": "/foMvmr6ch16GGM1L413KA9UQKIO.jpg"
              },
              {
                "character_name": "Jon Arryn",
                "credit_id": "5987d3cc925141059d01ae88",
                "order": 125,
                "adult": false,
                "gender": 2,
                "id": 11282,
                "known_for_department": "Acting",
                "name": "John Standing",
                "original_name": "John Standing",
                "popularity": 2.744,
                "profile_path": "/m3vyuNLRH0k4SShJGhvEsOKfEKu.jpg"
              },
              {
                "character_name": "Waymar Royce",
                "credit_id": "5987d3dec3a368375f019c59",
                "order": 126,
                "adult": false,
                "gender": 0,
                "id": 1864916,
                "known_for_department": "Acting",
                "name": "Rob Ostlere",
                "original_name": "Rob Ostlere",
                "popularity": 1.96,
                "profile_path": "/wwsP4vXDWbClGiGOznSR4dJjim2.jpg"
              },
              {
                "character_name": "Pentoshi Servant",
                "credit_id": "5987d4a09251413d4a025c71",
                "order": 127,
                "adult": false,
                "gender": 1,
                "id": 1864921,
                "known_for_department": "Acting",
                "name": "Rania Zouari",
                "original_name": "Rania Zouari",
                "popularity": 0.6,
                "profile_path": null
              },
              {
                "character_name": "Hodor",
                "credit_id": "5256c8be19c2956ff6048446",
                "order": 478,
                "adult": false,
                "gender": 2,
                "id": 1223792,
                "known_for_department": "Acting",
                "name": "Kristian Nairn",
                "original_name": "Kristian Nairn",
                "popularity": 1.96,
                "profile_path": "/dlbq6cCW0xdpFY15q6flP6lDXWV.jpg"
              },
              {
                "character_name": "Illyrio Mopatis",
                "credit_id": "5f24242ee2bca8003691e444",
                "order": 482,
                "adult": false,
                "gender": 0,
                "id": 2727709,
                "known_for_department": "Acting",
                "name": "Roger Allam",
                "original_name": "Roger Allam",
                "popularity": 0.6,
                "profile_path": null
              },
              {
                "character_name": "Rickon Stark",
                "credit_id": "566a83bcc3a3683f56003604",
                "order": 500,
                "adult": false,
                "gender": 2,
                "id": 1050248,
                "known_for_department": "Acting",
                "name": "Art Parkinson",
                "original_name": "Art Parkinson",
                "popularity": 4.404,
                "profile_path": "/ejAKOJME1DsvHECLWdQ7dEtXyyc.jpg"
              }
            ],
            "id": 63056
          }', true);
    }

    public function mockGetExternalIdsResponse(): array
    {
        return json_decode('{
            "imdb_id": "tt1480055",
            "freebase_mid": "/m/0gmc6ph",
            "freebase_id": "/en/winter_is_coming",
            "tvdb_id": 3254641,
            "tvrage_id": 1065008299,
            "id": 63056
          }', true);
    }

    public function mockGetImagesResponse(): array
    {
        return json_decode('{
            "id": 63056,
            "stills": [
              {
                "aspect_ratio": 1.77777777777778,
                "file_path": "/wrGWeW4WKxnaeA8sxJb2T9O6ryo.jpg",
                "height": 1080,
                "iso_639_1": null,
                "vote_average": 5.30505952380952,
                "vote_count": 1,
                "width": 1920
              },
              {
                "aspect_ratio": 1.77777777777778,
                "file_path": "/9o3HXUmWaZq14tIAbBrn7e34NRZ.jpg",
                "height": 1080,
                "iso_639_1": "en",
                "vote_average": 0,
                "vote_count": 0,
                "width": 1920
              },
              {
                "aspect_ratio": 1.77777777777778,
                "file_path": "/xIfvIM7YgkADTrqp23rm3CLaOVQ.jpg",
                "height": 1080,
                "iso_639_1": null,
                "vote_average": 0,
                "vote_count": 0,
                "width": 1920
              },
              {
                "aspect_ratio": 1.77777777777778,
                "file_path": "/uaSOtAsNrXbKxOVzC31GjYxLRXJ.jpg",
                "height": 1080,
                "iso_639_1": null,
                "vote_average": 0,
                "vote_count": 0,
                "width": 1920
              },
              {
                "aspect_ratio": 1.77777777777778,
                "file_path": "/v3bGMbT5Ik86ERFBfsXFqpiMTFy.jpg",
                "height": 1080,
                "iso_639_1": null,
                "vote_average": 0,
                "vote_count": 0,
                "width": 1920
              },
              {
                "aspect_ratio": 1.77777777777778,
                "file_path": "/g0OnOaBqSepbA8omNTfYBCl4Sbo.jpg",
                "height": 1080,
                "iso_639_1": null,
                "vote_average": 0,
                "vote_count": 0,
                "width": 1920
              },
              {
                "aspect_ratio": 1.77777777777778,
                "file_path": "/w85NsRYgZQZrICE1kC9q8F2D6wS.jpg",
                "height": 1080,
                "iso_639_1": null,
                "vote_average": 0,
                "vote_count": 0,
                "width": 1920
              },
              {
                "aspect_ratio": 1.77777777777778,
                "file_path": "/pyp0LgtqjgaeXzPMtXKnkuNBugV.jpg",
                "height": 1080,
                "iso_639_1": null,
                "vote_average": 0,
                "vote_count": 0,
                "width": 1920
              }
            ]
          }', true);
    }

    public function mockGetTranslationsResponse(): array
    {
        return json_decode('{
            "id": 63056,
            "translations": [
              {
                "iso_3166_1": "US",
                "iso_639_1": "en",
                "name": "English",
                "english_name": "English",
                "data": {
                  "name": "Winter Is Coming",
                  "overview": "Jon Arryn, the Hand of the King, is dead. King Robert Baratheon plans to ask his oldest friend, Eddard Stark, to take Jon\'s place. Across the sea, Viserys Targaryen plans to wed his sister to a nomadic warlord in exchange for an army."
                }
              },
              {
                "iso_3166_1": "RS",
                "iso_639_1": "sr",
                "name": "Srpski",
                "english_name": "Serbian",
                "data": {
                  "name": "",
                  "overview": ""
                }
              },
              {
                "iso_3166_1": "TH",
                "iso_639_1": "th",
                "name": "?????????????????????",
                "english_name": "Thai",
                "data": {
                  "name": "",
                  "overview": ""
                }
              },
              {
                "iso_3166_1": "DE",
                "iso_639_1": "de",
                "name": "Deutsch",
                "english_name": "German",
                "data": {
                  "name": "Der Winter naht",
                  "overview": "Ein Deserteur der Nachtwache bringt erschreckende Nachrichten von den L??ndern n??rdlich der Mauer, und Lord Eddard \"Ned\" Stark soll die Hand des K??nigs Robert Baratheon werden."
                }
              },
              {
                "iso_3166_1": "CN",
                "iso_639_1": "zh",
                "name": "?????????",
                "english_name": "Mandarin",
                "data": {
                  "name": "????????????",
                  "overview": "??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????12????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????"
                }
              },
              {
                "iso_3166_1": "PT",
                "iso_639_1": "pt",
                "name": "Portugu??s",
                "english_name": "Portuguese",
                "data": {
                  "name": "O Inverno Est?? a Chegar",
                  "overview": "Os Stark de Winterfell recebem a visita da fam??lia real. O Rei Robert Baratheon faz a Eddard Stark, Lorde de Winterfell, uma oferta que ele n??o pode recusar. Do outro lado do oceano, o exilado Pr??ncipe Viserys Targaryen cria uma alian??a para reconquistar o Trono de Ferro; ele dar?? sua irm??, Daenerys, em casamento para o selvagem Khal Drogo em troca de seu ex??rcito. De volta a Winterfell, Catelyn Stark recebe uma pista que pode implicar membros fam??lia real em um assassinato, enquanto o jovem Bran Stark faz uma perigosa descoberta."
                }
              },
              {
                "iso_3166_1": "BG",
                "iso_639_1": "bg",
                "name": "?????????????????? ????????",
                "english_name": "Bulgarian",
                "data": {
                  "name": "???????????? ????????",
                  "overview": "???? ?????????? ???? ?????????????? ???????????? ?????????????????? ?? ???????? ?????????? ?????????? ?????????????? ???? ????????, ???????? ???????? ???????????? ??????????????. ???????? ???????????? ???????????? ???? ??????????, ???? ???? ???????????????? ???? ?????? ???????? ?????????????????? ???? ?????????????????? ???? ??????????. ?? ???????????? ??????????, ?????????? ?????????????? ???????? ?????????????? ?????????????????? ?????????? ???????? ???? ???? ?????????? ??????????. ?????? ???????? ???? ?????????? ???????????? ???? ?????????????? ???? ?????????????????? ???????????????? ?????? ??????????. ???????? ???????????? ???????????????? ?????? ??????????????????, ???????????? ?????????????? ?????????????????? ???? ???????????? ?? ?????????????????? ????????????????."
                }
              },
              {
                "iso_3166_1": "IT",
                "iso_639_1": "it",
                "name": "Italiano",
                "english_name": "Italian",
                "data": {
                  "name": "L\'inverno sta arrivando",
                  "overview": "Robert Baratheon, Re di Westeros, chiede aiuto al suo vecchio amico Eddard Stark per governare il suo regno. Allo stesso tempo, i due giovani Targaryen, figli del precedente sovrano, stanno cercando degli alleati per detronizzare re Robert."
                }
              },
              {
                "iso_3166_1": "RO",
                "iso_639_1": "ro",
                "name": "Rom??n??",
                "english_name": "Romanian",
                "data": {
                  "name": "",
                  "overview": ""
                }
              },
              {
                "iso_3166_1": "ES",
                "iso_639_1": "es",
                "name": "Espa??ol",
                "english_name": "Spanish",
                "data": {
                  "name": "Se acerca el invierno",
                  "overview": "El Lord Ned Stark est?? preocupado por los perturbantes reportes de un desertor del Nights Watch; El Rey Robert y los Lannisters llegan a Winterfell; el exiliado Viserys Targaryen forja una nueva y poderosa alianza."
                }
              },
              {
                "iso_3166_1": "UA",
                "iso_639_1": "uk",
                "name": "??????????????????????",
                "english_name": "Ukrainian",
                "data": {
                  "name": "???????? ??????????????",
                  "overview": ""
                }
              },
              {
                "iso_3166_1": "IL",
                "iso_639_1": "he",
                "name": "????????????????",
                "english_name": "Hebrew",
                "data": {
                  "name": "?????????? ??????????",
                  "overview": "?????????? ???????????????????? ?????????? ??????-????????. ?????????? ???????????? ???? ?????????? ?????????? ???????? ?????? ???? ???? ???????????? ???? ???????? ?????????? ??????????????????, ?????????? ???? ?????????? ?????????????? ?????????? ???? ??????????, ?????????? ?????????? ??????????."
                }
              },
              {
                "iso_3166_1": "HR",
                "iso_639_1": "hr",
                "name": "Hrvatski",
                "english_name": "Croatian",
                "data": {
                  "name": "",
                  "overview": ""
                }
              },
              {
                "iso_3166_1": "NL",
                "iso_639_1": "nl",
                "name": "Nederlands",
                "english_name": "Dutch",
                "data": {
                  "name": "Winter Is Coming",
                  "overview": "Er roert iets in het land waar de zomers decennia duren en de winters een leven lang kunnen aanslepen. Achter een eeuwenoude, gigantische muur van ijs in het uiterste noorden van Westeros maakt een kille vijand zich op om het land onder de voet te lopen. Robert Baratheon, de vorst van Westeros, strijkt met zijn hofhouding neer in Winterfell, bezuiden de Muur, om de hulp van zijn oude vriend Eddard Stark in te roepen. Terzelfdertijd, op een ander continent, gaan de laatste overlevenden van het vorige Targaryenregime op zoek naar een nieuwe alliantie. Ze willen hun rijk gewapenderhand heroveren op de \"usurpator\", Koning Robert..."
                }
              },
              {
                "iso_3166_1": "HU",
                "iso_639_1": "hu",
                "name": "Magyar",
                "english_name": "Hungarian",
                "data": {
                  "name": "K??zeleg a t??l",
                  "overview": "Westeros kir??lys??g ??szaki hat??r??t hatalmas jeges fal v??lasztja el az ??r??k t??l birodalm??t??l. Lord Eddard \"Ned\" Stark az ??szaki birodalom, Deres (Winterfell) ura ??s az ??szaki nemesek vez??re, az ?? ??sei ??p??tett??k a Falat, amelyet az ??jszakai ??rs??g v??d. Amikor Robert kir??ly tan??csad??ja ??s Ned mentora, Jon Arryn meghal, Robert Baratheon a bar??tj??t, Nedet k??ri fel, hogy l??pjen a hely??be. Ek??zben a r??gi uralkod??h??z, a Targaryenek utols?? lesz??rmazottja, Viserys azt tervezi, hogy visszaszerzi a tr??nt. Sz??vets??get k??t a nom??d dothraki harcosokkal, ??s vez??r??knek, Khal Drog??nak adja a h??ga, Daenerys kez??t. Baratheon kir??ly ??s a feles??ge, a Lannister-h??zbeli Cersei kir??lyn?? Deresbe utazik. Vel??k tart a Lannister fam??lia t??bb tagja: a kir??lyn?? ikertestv??re, Jaime, a m??sik testv??re, a t??rpe Tyrion, illetve a kir??lyn?? tizenk??t ??ves fia, a tr??n ??r??k??se, Joffrey. Ned nem utas??thatja vissza ??reg kir??lya ??s bar??tja k??r??s??t, ??gy a birodalom f??v??ros??ba k??sz??l. Mindek??zben Havas Jon elhat??rozza, hogy ??szakra utazik a Fekete Kast??lyba, hogy csatlakozzon az ??jszakai ??rs??ghez, ahov?? a k??v??ncsi Tyrion is elk??s??ri. De az ifj?? Bran s??t??t titokra bukkan, ami nem v??rt k??vetkezm??nyekkel j??r."
                }
              },
              {
                "iso_3166_1": "BS",
                "iso_639_1": "bs",
                "name": "Bosanski",
                "english_name": "Bosnian",
                "data": {
                  "name": "Winter Is Coming",
                  "overview": "Dezerter iz No??ne stra??e prona??en je izvan Zimogora, na ??to lord Eddard \"Ned\" Stark reagira promptno i pravedno. Ujedno, doga??aj podi??e zabrinutost zbog opasnosti u zemljama sjeverno od Zida u kojima vlada bezakonje. Po povratku ku??i Ned od supruge Catelyn saznaje da je njegov mentor, Jon Arryn, preminuo u glavnom gradu Zapadnih zemalja, Kraljevom Pristanu, te da se kralj Robert zaputio na sjever kako bi Nedu ponudio Arrynov polo??aj kraljeve desnice.\n\nZa to vrijeme, s druge strane Tijesnog mora, u Pentosu, Viserys Targaryen kuje plan kako da ponovno zasjedne na tron - sklapanjem saveza s nomadskim ratnicima Dothrakima, ??ijem ??e vo??i khalu Drogou dati za ??enu svoju ljupku sestru Daenerys.\n\nRobert sti??e u Zimogor sa svojom suprugom, kraljicom Cersei, i ostalim ??lanovima obitelji Lannister: njezinim bratom blizancem Jamiejem, bratom patuljkom Tyrionom i Cerseinim sinom, 12-godi??njim prijestolonasljednikom Joffreyem. Ne mogav??i odbiti starog prijatelja i kralja, Ned se sprema napustiti Kraljev Pristan dok Jon Snijeg odlu??uje otputovati na sjever u Crni dvorac kako bi se priklju??io No??noj stra??i, u pratnji znati??eljnog Tyriona. No iznenadni izdajni??ki ??in usmjeren prema mladom Branu mo??da ??e odgoditi njihov odlazak."
                }
              },
              {
                "iso_3166_1": "RU",
                "iso_639_1": "ru",
                "name": "P????????????",
                "english_name": "Russian",
                "data": {
                  "name": "???????? ????????????",
                  "overview": "???????????????????????? ???? ???????????? ???????????????? ?????????? ???????????? ???????????????????????? ?? ???????? ?????????? ???????????????? ????????, ?????? ?????????? ?????????? ??????????. ????????????????????. ???????? ???????????? ?????????? ???????????? ?? ???????????? ??????????????????, ?????????????????????????? ?? ?????????????????????? ?????????? ??????????????, ?? ???????? ?????????? ?????????????? ???????????????? ????????????????. ???? ?????????????????????? ???????????? ???????????????? ???????????????? ?? ???????????? ?????????????????? ????????????, ?? ?????????? ?????????????? ?? ???????????????????????? ???????????? ?????????????????????? ??????????. ???????????? ???????????? ???????????????? ???????????????????? ???????????? ???? ???????????? ?????????? ??????????????????, ???? ?? ?????????????????????? ??????????. ????????????. ???????? ???????????????????? ???????????? ?????????????? ?????????????????? ???????????????????? ???????????? ?????????????????? ?????????????????? ?????????????? ???????? ?? ???????????? ??????????."
                }
              },
              {
                "iso_3166_1": "SA",
                "iso_639_1": "ar",
                "name": "??????????????",
                "english_name": "Arabic",
                "data": {
                  "name": "",
                  "overview": ""
                }
              },
              {
                "iso_3166_1": "CZ",
                "iso_639_1": "cs",
                "name": "??esk??",
                "english_name": "Czech",
                "data": {
                  "name": "Zima se bl??????",
                  "overview": "Lord Eddard \'Ned\' Stark z Winterfellu je nav??t??ven kr??lovskou rodinou. Jeho star?? p????tel a kr??l Robert Baratheon mu u??in?? nab??dku, kterou nem????e odm??tnout. Catelyn Stark, Nedova ??ena, dostane vzkaz od sv?? sestry Lysy, d??ky kter??mu by mohla obvinit ??leny kr??lovsk?? rodiny z vra??dy. Ned??v mlad?? syn Bran u??in?? ohromuj??c?? objev, d??ky kter??mu bude bojovat o hol?? ??ivot. P??es ??zk?? mo??e deportovan?? princ Viserys Targaryen tvo???? alianci s vidinou zisku ??elezn??ho tr??nu. Divok??mu v??le??n??kovi khalu Drogovi d?? za man??elku svou sestru Daenerys v??m??nou za jeho vojenskou podporu."
                }
              },
              {
                "iso_3166_1": "FI",
                "iso_639_1": "fi",
                "name": "suomi",
                "english_name": "Finnish",
                "data": {
                  "name": "Talvi on tulossa",
                  "overview": "Kuningas Robert Baratheon saapuu Talvivaaraan tarjoamaan lordi Ned Starkille virkaa valtakunnan kakkosmiehen??."
                }
              },
              {
                "iso_3166_1": "GR",
                "iso_639_1": "el",
                "name": "????????????????",
                "english_name": "Greek",
                "data": {
                  "name": "Winter Is Coming",
                  "overview": "H ?????????????? ?????????????? 298 ???????????? ???????? ?????? ?????????????????? ?????? ?????????????? ?????? Westeros ?????? ?????? Aegon ?????? ??????????????????. ???????? ?? ?????????? ???????????????? ??????????????, ?????? ?????????? ?????? ???????????????? ???????????????????? ?????? ???????????????? ?????????????????? ?????? ???????????????????? ?????? ???????????? ?????? ???????? ????????????????."
                }
              },
              {
                "iso_3166_1": "ID",
                "iso_639_1": "id",
                "name": "Bahasa indonesia",
                "english_name": "Indonesian",
                "data": {
                  "name": "",
                  "overview": ""
                }
              },
              {
                "iso_3166_1": "MX",
                "iso_639_1": "es",
                "name": "Espa??ol",
                "english_name": "Spanish",
                "data": {
                  "name": "",
                  "overview": ""
                }
              },
              {
                "iso_3166_1": "PL",
                "iso_639_1": "pl",
                "name": "Polski",
                "english_name": "Polish",
                "data": {
                  "name": "Nadci??ga zima",
                  "overview": "Dezerter z Nocnej Stra??y, b??d??cy ??wiadkiem niewyt??umaczalnych zjawisk, zostaje pojmany tu?? za murami Winterfell i poddany pod s??d Lorda Eddarda \"Neda\" Starka. Po powrocie do domu Ned dowiaduje si?? od ??ony Catelyn, ??e jego mentor, Jon Arryn, zmar?? w Kr??lewskiej Przystani w stolicy kr??lestwa Westeros. W tym samym czasie na drugim kra??cu W??skiego Morza w Pentos, Viserys Targaryen knuje plan, by odzyska?? utracony przez jego rodzin?? tron przy wsparciu koczowniczych dotrackich wojownik??w. W imi?? sojuszu jest got??w zaoferowa?? Khalowi Drogo, przyw??dcy plemienia, swoj?? pi??kn?? siostr?? Daenerys. Kr??l Robert wraz z ??on?? Cersei, przybywaj?? do Winterfell. Towarzysz?? im pozostali cz??onkowie rodziny Lannister??w - brat bli??niak kr??lowej Jaime, kolejny brat Tyrion oraz 12-letni Joffrey. Kr??l Robert proponuje Nedowi obj??cie stanowiska namiestnika. Ned nie umie odm??wi?? w??adcy, kt??ry jest jego starym przyjacielem. Przyjmuje z??o??on?? mu propozycj?? i szykuje si?? do wyjazdu do Kr??lewskiej Przystani. Jon Snow, pozama????e??ski syn Neda, opuszcza Winterfell, by do????czy?? do Nocnej Stra??y. Towarzysz?? mu Benjen Stark i Tyrion Lannister."
                }
              },
              {
                "iso_3166_1": "TR",
                "iso_639_1": "tr",
                "name": "T??rk??e",
                "english_name": "Turkish",
                "data": {
                  "name": "B??l??m 1 : Winter Is Coming",
                  "overview": "Game of Thrones???un ekranlara merhaba dedi??i b??l??m. Karakterler aras??nda kimin kim oldu??unu anlamam??z yan??nda Dany???nin evlenmesi ve Bran???in pencereden a??a???? at??lmas?? b??l??m??n ??ne ????kan detaylar?? aras??nda."
                }
              },
              {
                "iso_3166_1": "KR",
                "iso_639_1": "ko",
                "name": "?????????/?????????",
                "english_name": "Korean",
                "data": {
                  "name": "????????? ?????? ??????",
                  "overview": "?????????????????? ????????? ?????????????????? ??????????????? ????????????. ??? ??????????????? ??? ????????? ???????????? ?????? ?????? ??????, ??????????????? ??????????????? ????????? ?????? ???????????? ?????? ?????? ??????????????? ?????? ???????????????..."
                }
              },
              {
                "iso_3166_1": "FR",
                "iso_639_1": "fr",
                "name": "Fran??ais",
                "english_name": "French",
                "data": {
                  "name": "L\'hiver vient",
                  "overview": "Sur le continent de Westeros, un jeune patrouilleur de la Garde de Nuit, charg??e de veiller sur le Mur, est condamn?? ?? mort pour d??sertion par Eddard Stark, seigneur de Winterfell et Gardien du Nord. Mais de sombres nouvelles arrivent de Port-R??al, la capitale des Sept Couronnes : Jon Arryn, ami intime d\'Eddard et Main du roi Robert Baratheon, vient de mourir. Le roi Robert et sa cour entreprennent alors un voyage vers Winterfell, pour gratifier son ami Eddard de la charge de Main du roi. Pendant ce temps, les descendants des rois Targaryen en exil, renvers??s par Robert, fomentent leur retour en Westeros par un jeu d\'alliance avec les Dothrakis, une tribu de guerriers nomades.\n\nAlors qu\'?? Winterfell les festivit??s vont bon train durant le s??jour du roi, Brandon, l\'un des fils d\'Eddard Stark, fait une d??couverte qui lui attire les foudres de la famille royale???"
                }
              },
              {
                "iso_3166_1": "IR",
                "iso_639_1": "fa",
                "name": "??????????",
                "english_name": "Persian",
                "data": {
                  "name": "",
                  "overview": ""
                }
              },
              {
                "iso_3166_1": "SK",
                "iso_639_1": "sk",
                "name": "Sloven??ina",
                "english_name": "Slovak",
                "data": {
                  "name": "",
                  "overview": ""
                }
              },
              {
                "iso_3166_1": "IS",
                "iso_639_1": "is",
                "name": "??slenska",
                "english_name": "Icelandic",
                "data": {
                  "name": "",
                  "overview": ""
                }
              },
              {
                "iso_3166_1": "LT",
                "iso_639_1": "lt",
                "name": "Lietuvi??",
                "english_name": "Lithuanian",
                "data": {
                  "name": "",
                  "overview": ""
                }
              },
              {
                "iso_3166_1": "TW",
                "iso_639_1": "tw",
                "name": "",
                "english_name": "Twi",
                "data": {
                  "name": "",
                  "overview": ""
                }
              },
              {
                "iso_3166_1": "BR",
                "iso_639_1": "pt",
                "name": "Portugu??s",
                "english_name": "Portuguese",
                "data": {
                  "name": "O Inverno Est?? Chegando",
                  "overview": "Os Stark de Winterfell recebem a visita da fam??lia real. O Rei Robert Baratheon faz a Eddard Stark uma oferta que ele n??o pode recusar. Do outro lado do oceano, o exilado Pr??ncipe Viserys Targaryen cria uma alian??a para reconquistar o Trono de Ferro; ele dar?? sua irm??, Daenerys, em casamento para o selvagem Khal Drogo em troca de seu ex??rcito. De volta a Winterfell, Catelyn Stark recebe uma pista que pode implicar no envolvimento de membros da fam??lia real em um assassinato, enquanto o jovem Bran Stark faz uma perigosa descoberta."
                }
              },
              {
                "iso_3166_1": "LB",
                "iso_639_1": "lb",
                "name": "",
                "english_name": "Letzeburgesch",
                "data": {
                  "name": "",
                  "overview": ""
                }
              },
              {
                "iso_3166_1": "VN",
                "iso_639_1": "vi",
                "name": "Ti???ng Vi???t",
                "english_name": "Vietnamese",
                "data": {
                  "name": "",
                  "overview": ""
                }
              },
              {
                "iso_3166_1": "TW",
                "iso_639_1": "zh",
                "name": "?????????",
                "english_name": "Mandarin",
                "data": {
                  "name": "",
                  "overview": ""
                }
              },
              {
                "iso_3166_1": "DK",
                "iso_639_1": "da",
                "name": "Dansk",
                "english_name": "Danish",
                "data": {
                  "name": "",
                  "overview": "En desert??r opspores uden for Winterfell, hvilket f??rer til hurtig rettergang ved dommer Lord Eddard \"Ned\" Stark og giver anledning til bekymringer om farerne i nord. Neds mentor Jon Arryn er d??d i hovedstaden, og Kong Robert er p?? vej for at tilbyde ham Arryns job som kongens hj??lper. Imens i Pentos udt??nker Viserys Targaryen en plan for en alliance med Dothraki nomadekrigerne. Robert ankommer med Dronning Cersei og deres f??lge, og Ned forbereder sig p?? at tage af sted, da Jon Snow beslutter at slutte sig til Night\'s Watch. Men et overraskende forr??deri kan s??tte en stoppe for begges afgang."
                }
              },
              {
                "iso_3166_1": "EO",
                "iso_639_1": "eo",
                "name": "Esperanto",
                "english_name": "Esperanto",
                "data": {
                  "name": "",
                  "overview": ""
                }
              },
              {
                "iso_3166_1": "SE",
                "iso_639_1": "sv",
                "name": "svenska",
                "english_name": "Swedish",
                "data": {
                  "name": "Winter Is Coming",
                  "overview": "Man hittar en desert??r fr??n Nattens V??ktare utanf??r Winterfell, vilket leder till att lord Eddard \"Ned\" Stark skipar omedelbar r??ttvisa, men det ger ocks?? upphov till oro ??ver farorna som lurar norr om muren. P?? andra sidan havet planerar Viserys Targaryen att ta tillbaka tronen genom att ??kta sin vackra syster Daenerys med dothrakiernas ledare Khal Drogo. Kung Robert anl??nder till Winterfell med sin fru, drottning Cersei, och andra medlemmar av familjen Lannister. Ned tar jobbet som kungens hand och f??rbereder sig att l??mna Winterfell, men ett d??d mot unga Bran kan f??rdr??ja avresan."
                }
              },
              {
                "iso_3166_1": "NO",
                "iso_639_1": "no",
                "name": "Norsk",
                "english_name": "Norwegian",
                "data": {
                  "name": "Winter Is Coming",
                  "overview": "En desert??r fra Nattevakten blir funnet n??r Vinterfall, og Lord Eddard \"Ned\" Stark m?? fullbyrde straffen. Neds hustru Catelyn forteller at hans mentor, Jon Arryn, har d??dd i hovedstaden Kongshavn, og at kong Robert er p?? vei nordover for ?? tilby Ned stillingen som kongens h??nd. Viserys Targaryen vil danne en allianse med de nomadiske Dothraki-krigerne ved ?? gi sin s??ster Daenerys til deres leder, khal Drogo. Robert ankommer med sin hustru, dronning Cersei, og andre fra Lannister-slekten: Hennes tvillingbror Jaime, dvergbroren Tyrion og hennes s??nn og tronarving Joffrey. Ned kan ikke si nei til sin gamle venn kongen, og Jon Sn?? velger ?? verve seg i Nattevakten. Men en grufull handling mot unge Bran kan stanse alle planer."
                }
              },
              {
                "iso_3166_1": "CA",
                "iso_639_1": "fr",
                "name": "Fran??ais",
                "english_name": "French",
                "data": {
                  "name": "L\'hiver vient",
                  "overview": "Au del?? d\'un gigantesque mur de protection de glace dans le nord de Westeros. Robert Baratheon, le roi, arrive avec son cort??ge au sud du mur de Winterfell pour demander de l\'aide ?? son vieil ami Eddard Stark. Dans le m??me temps, sur un autre continent, les derniers survivants de l\'ancien r??gime Targaryen sont ?? la recherche d\'une nouvelle alliance pour reprendre leur royaume de \"l\'usurpateur\" roi Robert..."
                }
              },
              {
                "iso_3166_1": "LV",
                "iso_639_1": "lv",
                "name": "Latvie??u",
                "english_name": "Latvian",
                "data": {
                  "name": "",
                  "overview": ""
                }
              },
              {
                "iso_3166_1": "BY",
                "iso_639_1": "be",
                "name": "???????????????????? ????????",
                "english_name": "Belarusian",
                "data": {
                  "name": "",
                  "overview": ""
                }
              },
              {
                "iso_3166_1": "CN",
                "iso_639_1": "cn",
                "name": "????????? / ?????????",
                "english_name": "Cantonese",
                "data": {
                  "name": "",
                  "overview": ""
                }
              }
            ]
          }', true);
    }

    public function mockGetVideosResponse(): array
    {
        return json_decode('{
            "id": 63057,
            "results": [
              {
                "iso_639_1": "en",
                "iso_3166_1": "US",
                "name": "Game of Thrones: Season 1 - Episode 2 Clip #1 (HBO)",
                "key": "kPrW3Swrp4E",
                "published_at": "2011-04-21T20:16:51.000Z",
                "site": "YouTube",
                "size": 720,
                "type": "Clip",
                "official": true,
                "id": "5349285f0e0a266b4a00153e"
              }
            ]
          }', true);
    }
}
