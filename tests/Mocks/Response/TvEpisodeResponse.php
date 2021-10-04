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
                    "value": "Sur le continent de Westeros, un jeune patrouilleur de la Garde de Nuit, chargée de veiller sur le Mur, est condamné à mort pour désertion par Eddard Stark, seigneur de Winterfell et Gardien du Nord. Mais de sombres nouvelles arrivent de Port-Réal, la capitale des Sept Couronnes : Jon Arryn, ami intime d\'Eddard et Main du roi Robert Baratheon, vient de mourir. Le roi Robert et sa cour entreprennent alors un voyage vers Winterfell, pour gratifier son ami Eddard de la charge de Main du roi. Pendant ce temps, les descendants des rois Targaryen en exil, renversés par Robert, fomentent leur retour en Westeros par un jeu d\'alliance avec les Dothrakis, une tribu de guerriers nomades.\nAlors qu\'à Winterfell les festivités vont bon train durant le séjour du roi, Brandon, l\'un des fils d\'Eddard Stark, fait une découverte qui lui attire les foudres de la famille royale…",
                    "original_value": "Sur le continent de Westeros, un jeune patrouilleur de la Garde de Nuit, chargée de veiller sur le Mur, est condamné à mort pour désertion par Eddard Stark, seigneur de Winterfell et Gardien du Nord. Mais de sombres nouvelles arrivent de Port-Réal, la capitale des Sept Couronnes : Jon Arryn, ami intime d\'Eddard et Main du roi Robert Baratheon, vient de mourir. Le roi Robert et sa cour entreprennent alors un voyage vers Winterfell, pour gratifier son ami Eddard de la charge de Main du roi. Pendant ce temps, les descendants des rois Targaryen en exil, renversés par Robert, fomentent leur retour en Westeros par un jeu d\'alliance avec les Dothrakis, une tribu de guerriers nomades.\n\nAlors qu\'à Winterfell les festivités vont bon train durant le séjour du roi, Brandon, l\'un des fils d\'Eddard Stark, fait une découverte qui lui attire les foudres de la famille royale..."
                  },
                  {
                    "id": "54c53255c3a36814210141d0",
                    "action": "added",
                    "time": "2015-01-25 18:13:41 UTC",
                    "iso_639_1": "es",
                    "value": "Ned Stark, Señor de Invernalia se entera de que su mentor, Jon Arryn, ha muerto y por esto el Rey Robert se dirige hacia el norte para ofrecerle ser la Mano del Rey. Al otro lado del Mar en Pentos, Viserys Targaryen planea casar a su hermana Daenerys con el lider de los guerreros de la tribu Dothraki, Khal Drogo con el objetivo de forjar una alianza que le permita reclamar el trono."
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
                "name": "Esmé Bianco",
                "original_name": "Esmé Bianco",
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
                "name": "ภาษาไทย",
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
                  "overview": "Ein Deserteur der Nachtwache bringt erschreckende Nachrichten von den Ländern nördlich der Mauer, und Lord Eddard \"Ned\" Stark soll die Hand des Königs Robert Baratheon werden."
                }
              },
              {
                "iso_3166_1": "CN",
                "iso_639_1": "zh",
                "name": "普通话",
                "english_name": "Mandarin",
                "data": {
                  "name": "凛冬将至",
                  "overview": "一名守夜人军团的逃兵在临冬城外被抓获，领主艾德（奈德）·史塔克下令将其处斩。奈德对绝境长城之外的形势忧心忡忡。行刑结束后，奈德回到城中，他的夫人凯特琳带来一个令人震惊的消息：奈德的良师益友、现任首相琼恩·艾林在都城离奇死亡，罗伯特国王正启程赶往北方，希望奈德接替琼恩·艾林出任国王之手。与此同时，在狭海对岸的潘托斯，韦赛里斯·坦格利安正计划与多斯拉克游牧民族的一位重要首领卓戈卡奥结盟，凭借多斯拉克人的力量夺回本属于他的铁王座。他妹妹丹妮莉斯的终身幸福成了他手中最重要的筹码。罗伯特国王带着瑟曦·兰尼斯特王后及兰尼斯特家族的重要成员抵达临冬城。他的随行人员包括：王后的弟弟詹姆和提力昂，他们一个英俊潇洒，一个却是侏儒；12岁的乔佛里王子，王位的继承人。奈德无法拒绝国王的盛情邀请，决定南下君临城帮助国王稳定国内局势。就在罗伯特和奈德动身之前，奈德的私生子琼恩·雪诺决定北上黑城堡加盟守夜人军团，对守夜人颇为好奇的提力昂打算和雪诺一同前往。厄运突然降临到奈德的次子布兰身上，奈德和琼恩都被迫推迟了行程。"
                }
              },
              {
                "iso_3166_1": "PT",
                "iso_639_1": "pt",
                "name": "Português",
                "english_name": "Portuguese",
                "data": {
                  "name": "O Inverno Está a Chegar",
                  "overview": "Os Stark de Winterfell recebem a visita da família real. O Rei Robert Baratheon faz a Eddard Stark, Lorde de Winterfell, uma oferta que ele não pode recusar. Do outro lado do oceano, o exilado Príncipe Viserys Targaryen cria uma aliança para reconquistar o Trono de Ferro; ele dará sua irmã, Daenerys, em casamento para o selvagem Khal Drogo em troca de seu exército. De volta a Winterfell, Catelyn Stark recebe uma pista que pode implicar membros família real em um assassinato, enquanto o jovem Bran Stark faz uma perigosa descoberta."
                }
              },
              {
                "iso_3166_1": "BG",
                "iso_639_1": "bg",
                "name": "български език",
                "english_name": "Bulgarian",
                "data": {
                  "name": "Зимата идва",
                  "overview": "На север от Стената дебнат предатели и лорд Едард Старк разбира за това, след като залавя шпионин. Крал Робърт пътува на север, за да предложи на Нед Арин позицията на съветника на краля. В същото време, отвъд Тясното море Висерис Таргариен готви план да си върне трона. Той иска да омъжи сестра си Данерис за номадския командир Кал Дрого. Крал Робърт пристига във Винтерфел, където заварва съпругата си Серсей и семейство Ланистер."
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
                "name": "Română",
                "english_name": "Romanian",
                "data": {
                  "name": "",
                  "overview": ""
                }
              },
              {
                "iso_3166_1": "ES",
                "iso_639_1": "es",
                "name": "Español",
                "english_name": "Spanish",
                "data": {
                  "name": "Se acerca el invierno",
                  "overview": "El Lord Ned Stark está preocupado por los perturbantes reportes de un desertor del Nights Watch; El Rey Robert y los Lannisters llegan a Winterfell; el exiliado Viserys Targaryen forja una nueva y poderosa alianza."
                }
              },
              {
                "iso_3166_1": "UA",
                "iso_639_1": "uk",
                "name": "Український",
                "english_name": "Ukrainian",
                "data": {
                  "name": "Зима близько",
                  "overview": ""
                }
              },
              {
                "iso_3166_1": "IL",
                "iso_639_1": "he",
                "name": "עִבְרִית",
                "english_name": "Hebrew",
                "data": {
                  "name": "החורף מתקרב",
                  "overview": "עיבוד טלוויזיוני לסדרת רבי-המכר. הסדרה מגוללת את סיפור המאבק עקוב הדם על כס המלוכה של המלך רוברט באראתיאון, ששולט על ממלכת ווסטרוז בעזרת יד ימינו, הלורד אדארד סטארק."
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
                  "name": "Közeleg a tél",
                  "overview": "Westeros királyság északi határát hatalmas jeges fal választja el az örök tél birodalmától. Lord Eddard \"Ned\" Stark az északi birodalom, Deres (Winterfell) ura és az északi nemesek vezére, az ő ősei építették a Falat, amelyet az Éjszakai Őrség véd. Amikor Robert király tanácsadója és Ned mentora, Jon Arryn meghal, Robert Baratheon a barátját, Nedet kéri fel, hogy lépjen a helyébe. Eközben a régi uralkodóház, a Targaryenek utolsó leszármazottja, Viserys azt tervezi, hogy visszaszerzi a trónt. Szövetséget köt a nomád dothraki harcosokkal, és vezérüknek, Khal Drogónak adja a húga, Daenerys kezét. Baratheon király és a felesége, a Lannister-házbeli Cersei királyné Deresbe utazik. Velük tart a Lannister família több tagja: a királyné ikertestvére, Jaime, a másik testvére, a törpe Tyrion, illetve a királyné tizenkét éves fia, a trón örököse, Joffrey. Ned nem utasíthatja vissza öreg királya és barátja kérését, így a birodalom fővárosába készül. Mindeközben Havas Jon elhatározza, hogy északra utazik a Fekete Kastélyba, hogy csatlakozzon az Éjszakai Őrséghez, ahová a kíváncsi Tyrion is elkíséri. De az ifjú Bran sötét titokra bukkan, ami nem várt következményekkel jár."
                }
              },
              {
                "iso_3166_1": "BS",
                "iso_639_1": "bs",
                "name": "Bosanski",
                "english_name": "Bosnian",
                "data": {
                  "name": "Winter Is Coming",
                  "overview": "Dezerter iz Noćne straže pronađen je izvan Zimogora, na što lord Eddard \"Ned\" Stark reagira promptno i pravedno. Ujedno, događaj podiže zabrinutost zbog opasnosti u zemljama sjeverno od Zida u kojima vlada bezakonje. Po povratku kući Ned od supruge Catelyn saznaje da je njegov mentor, Jon Arryn, preminuo u glavnom gradu Zapadnih zemalja, Kraljevom Pristanu, te da se kralj Robert zaputio na sjever kako bi Nedu ponudio Arrynov položaj kraljeve desnice.\n\nZa to vrijeme, s druge strane Tijesnog mora, u Pentosu, Viserys Targaryen kuje plan kako da ponovno zasjedne na tron - sklapanjem saveza s nomadskim ratnicima Dothrakima, čijem će vođi khalu Drogou dati za ženu svoju ljupku sestru Daenerys.\n\nRobert stiže u Zimogor sa svojom suprugom, kraljicom Cersei, i ostalim članovima obitelji Lannister: njezinim bratom blizancem Jamiejem, bratom patuljkom Tyrionom i Cerseinim sinom, 12-godišnjim prijestolonasljednikom Joffreyem. Ne mogavši odbiti starog prijatelja i kralja, Ned se sprema napustiti Kraljev Pristan dok Jon Snijeg odlučuje otputovati na sjever u Crni dvorac kako bi se priključio Noćnoj straži, u pratnji znatiželjnog Tyriona. No iznenadni izdajnički čin usmjeren prema mladom Branu možda će odgoditi njihov odlazak."
                }
              },
              {
                "iso_3166_1": "RU",
                "iso_639_1": "ru",
                "name": "Pусский",
                "english_name": "Russian",
                "data": {
                  "name": "Зима близко",
                  "overview": "Отправленный на поиски одичалых отряд воинов сталкивается с куда более пугающим злом, чем племя диких людей. Винтерфелл. Лорд Эддард Старк узнает о поимке дезертира, утверждающего о возвращении белых ходоков, а дети лорда заводят домашних питомцев. Из Королевской гавани приходит известие о смерти советника короля, а также новость о намечающемся визите королевской семьи. Король Роберт Баратеон предлагает Старку не только новую должность, но и объединение семей. Пентос. Ради достижения власти Визерис Таргариен принуждает сестру Дэйенерис заключить брачный союз с кхалом Дрого."
                }
              },
              {
                "iso_3166_1": "SA",
                "iso_639_1": "ar",
                "name": "العربية",
                "english_name": "Arabic",
                "data": {
                  "name": "",
                  "overview": ""
                }
              },
              {
                "iso_3166_1": "CZ",
                "iso_639_1": "cs",
                "name": "Český",
                "english_name": "Czech",
                "data": {
                  "name": "Zima se blíží",
                  "overview": "Lord Eddard \'Ned\' Stark z Winterfellu je navštíven královskou rodinou. Jeho starý přítel a král Robert Baratheon mu učiní nabídku, kterou nemůže odmítnout. Catelyn Stark, Nedova žena, dostane vzkaz od své sestry Lysy, díky kterému by mohla obvinit členy královské rodiny z vraždy. Nedův mladý syn Bran učiní ohromující objev, díky kterému bude bojovat o holý život. Přes Úzké moře deportovaný princ Viserys Targaryen tvoří alianci s vidinou zisku Železného trůnu. Divokému válečníkovi khalu Drogovi dá za manželku svou sestru Daenerys výměnou za jeho vojenskou podporu."
                }
              },
              {
                "iso_3166_1": "FI",
                "iso_639_1": "fi",
                "name": "suomi",
                "english_name": "Finnish",
                "data": {
                  "name": "Talvi on tulossa",
                  "overview": "Kuningas Robert Baratheon saapuu Talvivaaraan tarjoamaan lordi Ned Starkille virkaa valtakunnan kakkosmiehenä."
                }
              },
              {
                "iso_3166_1": "GR",
                "iso_639_1": "el",
                "name": "ελληνικά",
                "english_name": "Greek",
                "data": {
                  "name": "Winter Is Coming",
                  "overview": "H ιστορία αρχίζει 298 χρόνια μετά την κατάκτηση της ηπείρου του Westeros από τον Aegon τον κατακτητή. Όταν ο βαρύς χειμώνας έρχεται, μια σειρά από γεγονότα ανατρέπουν την πολιτική κατάσταση και πυροδοτούν τον πόλεμο των επτά Βασιλέων."
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
                "name": "Español",
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
                  "name": "Nadciąga zima",
                  "overview": "Dezerter z Nocnej Straży, będący świadkiem niewytłumaczalnych zjawisk, zostaje pojmany tuż za murami Winterfell i poddany pod sąd Lorda Eddarda \"Neda\" Starka. Po powrocie do domu Ned dowiaduje się od żony Catelyn, że jego mentor, Jon Arryn, zmarł w Królewskiej Przystani w stolicy królestwa Westeros. W tym samym czasie na drugim krańcu Wąskiego Morza w Pentos, Viserys Targaryen knuje plan, by odzyskać utracony przez jego rodzinę tron przy wsparciu koczowniczych dotrackich wojowników. W imię sojuszu jest gotów zaoferować Khalowi Drogo, przywódcy plemienia, swoją piękną siostrę Daenerys. Król Robert wraz z żoną Cersei, przybywają do Winterfell. Towarzyszą im pozostali członkowie rodziny Lannisterów - brat bliźniak królowej Jaime, kolejny brat Tyrion oraz 12-letni Joffrey. Król Robert proponuje Nedowi objęcie stanowiska namiestnika. Ned nie umie odmówić władcy, który jest jego starym przyjacielem. Przyjmuje złożoną mu propozycję i szykuje się do wyjazdu do Królewskiej Przystani. Jon Snow, pozamałżeński syn Neda, opuszcza Winterfell, by dołączyć do Nocnej Straży. Towarzyszą mu Benjen Stark i Tyrion Lannister."
                }
              },
              {
                "iso_3166_1": "TR",
                "iso_639_1": "tr",
                "name": "Türkçe",
                "english_name": "Turkish",
                "data": {
                  "name": "Bölüm 1 : Winter Is Coming",
                  "overview": "Game of Thrones’un ekranlara merhaba dediği bölüm. Karakterler arasında kimin kim olduğunu anlamamız yanında Dany’nin evlenmesi ve Bran’in pencereden aşağı atılması bölümün öne çıkan detayları arasında."
                }
              },
              {
                "iso_3166_1": "KR",
                "iso_639_1": "ko",
                "name": "한국어/조선말",
                "english_name": "Korean",
                "data": {
                  "name": "겨울이 오고 있다",
                  "overview": "블랙캐슬에서 세명의 나이트워치는 성벽밖으로 순찰한다. 그 나이트워치 중 한명이 야인들이 죽은 것을 보고, 블랙캐슬로 돌아가자고 하지만 죽은 야인들을 보지 못한 순찰대장은 이를 무시하는데..."
                }
              },
              {
                "iso_3166_1": "FR",
                "iso_639_1": "fr",
                "name": "Français",
                "english_name": "French",
                "data": {
                  "name": "L\'hiver vient",
                  "overview": "Sur le continent de Westeros, un jeune patrouilleur de la Garde de Nuit, chargée de veiller sur le Mur, est condamné à mort pour désertion par Eddard Stark, seigneur de Winterfell et Gardien du Nord. Mais de sombres nouvelles arrivent de Port-Réal, la capitale des Sept Couronnes : Jon Arryn, ami intime d\'Eddard et Main du roi Robert Baratheon, vient de mourir. Le roi Robert et sa cour entreprennent alors un voyage vers Winterfell, pour gratifier son ami Eddard de la charge de Main du roi. Pendant ce temps, les descendants des rois Targaryen en exil, renversés par Robert, fomentent leur retour en Westeros par un jeu d\'alliance avec les Dothrakis, une tribu de guerriers nomades.\n\nAlors qu\'à Winterfell les festivités vont bon train durant le séjour du roi, Brandon, l\'un des fils d\'Eddard Stark, fait une découverte qui lui attire les foudres de la famille royale…"
                }
              },
              {
                "iso_3166_1": "IR",
                "iso_639_1": "fa",
                "name": "فارسی",
                "english_name": "Persian",
                "data": {
                  "name": "",
                  "overview": ""
                }
              },
              {
                "iso_3166_1": "SK",
                "iso_639_1": "sk",
                "name": "Slovenčina",
                "english_name": "Slovak",
                "data": {
                  "name": "",
                  "overview": ""
                }
              },
              {
                "iso_3166_1": "IS",
                "iso_639_1": "is",
                "name": "Íslenska",
                "english_name": "Icelandic",
                "data": {
                  "name": "",
                  "overview": ""
                }
              },
              {
                "iso_3166_1": "LT",
                "iso_639_1": "lt",
                "name": "Lietuvių",
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
                "name": "Português",
                "english_name": "Portuguese",
                "data": {
                  "name": "O Inverno Está Chegando",
                  "overview": "Os Stark de Winterfell recebem a visita da família real. O Rei Robert Baratheon faz a Eddard Stark uma oferta que ele não pode recusar. Do outro lado do oceano, o exilado Príncipe Viserys Targaryen cria uma aliança para reconquistar o Trono de Ferro; ele dará sua irmã, Daenerys, em casamento para o selvagem Khal Drogo em troca de seu exército. De volta a Winterfell, Catelyn Stark recebe uma pista que pode implicar no envolvimento de membros da família real em um assassinato, enquanto o jovem Bran Stark faz uma perigosa descoberta."
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
                "name": "Tiếng Việt",
                "english_name": "Vietnamese",
                "data": {
                  "name": "",
                  "overview": ""
                }
              },
              {
                "iso_3166_1": "TW",
                "iso_639_1": "zh",
                "name": "普通话",
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
                  "overview": "En desertør opspores uden for Winterfell, hvilket fører til hurtig rettergang ved dommer Lord Eddard \"Ned\" Stark og giver anledning til bekymringer om farerne i nord. Neds mentor Jon Arryn er død i hovedstaden, og Kong Robert er på vej for at tilbyde ham Arryns job som kongens hjælper. Imens i Pentos udtænker Viserys Targaryen en plan for en alliance med Dothraki nomadekrigerne. Robert ankommer med Dronning Cersei og deres følge, og Ned forbereder sig på at tage af sted, da Jon Snow beslutter at slutte sig til Night\'s Watch. Men et overraskende forræderi kan sætte en stoppe for begges afgang."
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
                  "overview": "Man hittar en desertör från Nattens Väktare utanför Winterfell, vilket leder till att lord Eddard \"Ned\" Stark skipar omedelbar rättvisa, men det ger också upphov till oro över farorna som lurar norr om muren. På andra sidan havet planerar Viserys Targaryen att ta tillbaka tronen genom att äkta sin vackra syster Daenerys med dothrakiernas ledare Khal Drogo. Kung Robert anländer till Winterfell med sin fru, drottning Cersei, och andra medlemmar av familjen Lannister. Ned tar jobbet som kungens hand och förbereder sig att lämna Winterfell, men ett dåd mot unga Bran kan fördröja avresan."
                }
              },
              {
                "iso_3166_1": "NO",
                "iso_639_1": "no",
                "name": "Norsk",
                "english_name": "Norwegian",
                "data": {
                  "name": "Winter Is Coming",
                  "overview": "En desertør fra Nattevakten blir funnet nær Vinterfall, og Lord Eddard \"Ned\" Stark må fullbyrde straffen. Neds hustru Catelyn forteller at hans mentor, Jon Arryn, har dødd i hovedstaden Kongshavn, og at kong Robert er på vei nordover for å tilby Ned stillingen som kongens hånd. Viserys Targaryen vil danne en allianse med de nomadiske Dothraki-krigerne ved å gi sin søster Daenerys til deres leder, khal Drogo. Robert ankommer med sin hustru, dronning Cersei, og andre fra Lannister-slekten: Hennes tvillingbror Jaime, dvergbroren Tyrion og hennes sønn og tronarving Joffrey. Ned kan ikke si nei til sin gamle venn kongen, og Jon Snø velger å verve seg i Nattevakten. Men en grufull handling mot unge Bran kan stanse alle planer."
                }
              },
              {
                "iso_3166_1": "CA",
                "iso_639_1": "fr",
                "name": "Français",
                "english_name": "French",
                "data": {
                  "name": "L\'hiver vient",
                  "overview": "Au delà d\'un gigantesque mur de protection de glace dans le nord de Westeros. Robert Baratheon, le roi, arrive avec son cortège au sud du mur de Winterfell pour demander de l\'aide à son vieil ami Eddard Stark. Dans le même temps, sur un autre continent, les derniers survivants de l\'ancien régime Targaryen sont à la recherche d\'une nouvelle alliance pour reprendre leur royaume de \"l\'usurpateur\" roi Robert..."
                }
              },
              {
                "iso_3166_1": "LV",
                "iso_639_1": "lv",
                "name": "Latviešu",
                "english_name": "Latvian",
                "data": {
                  "name": "",
                  "overview": ""
                }
              },
              {
                "iso_3166_1": "BY",
                "iso_639_1": "be",
                "name": "беларуская мова",
                "english_name": "Belarusian",
                "data": {
                  "name": "",
                  "overview": ""
                }
              },
              {
                "iso_3166_1": "CN",
                "iso_639_1": "cn",
                "name": "广州话 / 廣州話",
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
