<?php

namespace CodeBugLab\Tmdb\Tests\Mocks\Response;

trait CredentialsResponse
{
    public function mockGetMovieCredentialsResponse(): array
    {
        return json_decode('{
            "certifications": {
              "US": [
                {
                  "certification": "G",
                  "meaning": "All ages admitted. There is no content that would be objectionable to most parents. This is one of only two ratings dating back to 1968 that still exists today.",
                  "order": 1
                },
                {
                  "certification": "PG-13",
                  "meaning": "Some material may be inappropriate for children under 13. Films given this rating may contain sexual content, brief or partial nudity, some strong language and innuendo, humor, mature themes, political themes, terror and/or intense action violence. However, bloodshed is rarely present. This is the minimum rating at which drug content is present.",
                  "order": 3
                },
                {
                  "certification": "R",
                  "meaning": "Under 17 requires accompanying parent or adult guardian 21 or older. The parent/guardian is required to stay with the child under 17 through the entire movie, even if the parent gives the child/teenager permission to see the film alone. These films may contain strong profanity, graphic sexuality, nudity, strong violence, horror, gore, and strong drug use. A movie rated R for profanity often has more severe or frequent language than the PG-13 rating would permit. An R-rated movie may have more blood, gore, drug use, nudity, or graphic sexuality than a PG-13 movie would admit.",
                  "order": 4
                },
                {
                  "certification": "NC-17",
                  "meaning": "These films contain excessive graphic violence, intense or explicit sex, depraved, abhorrent behavior, explicit drug abuse, strong language, explicit nudity, or any other elements which, at present, most parents would consider too strong and therefore off-limits for viewing by their children and teens. NC-17 does not necessarily mean obscene or pornographic in the oft-accepted or legal meaning of those words.",
                  "order": 5
                },
                {
                  "certification": "NR",
                  "meaning": "No rating information.",
                  "order": 0
                },
                {
                  "certification": "PG",
                  "meaning": "Some material may not be suitable for children under 10. These films may contain some mild language, crude/suggestive humor, scary moments and/or violence. No drug content is present. There are a few exceptions to this rule. A few racial insults may also be heard.",
                  "order": 2
                }
              ],
              "CA": [
                {
                  "certification": "18A",
                  "meaning": "Persons under 18 years of age must be accompanied by an adult. In the Maritimes & Manitoba, children under the age of 14 are prohibited from viewing the film.",
                  "order": 4
                },
                {
                  "certification": "G",
                  "meaning": "All ages.",
                  "order": 1
                },
                {
                  "certification": "PG",
                  "meaning": "Parental guidance advised. There is no age restriction but some material may not be suitable for all children.",
                  "order": 2
                },
                {
                  "certification": "14A",
                  "meaning": "Persons under 14 years of age must be accompanied by an adult.",
                  "order": 3
                },
                {
                  "certification": "A",
                  "meaning": "Admittance restricted to people 18 years of age or older. Sole purpose of the film is the portrayal of sexually explicit activity and/or explicit violence.",
                  "order": 5
                }
              ],
              "AU": [
                {
                  "certification": "E",
                  "meaning": "Exempt from classification. Films that are exempt from classification must not contain contentious material (i.e. material that would ordinarily be rated M or higher).",
                  "order": 1
                },
                {
                  "certification": "G",
                  "meaning": "General. The content is very mild in impact.",
                  "order": 2
                },
                {
                  "certification": "R18+",
                  "meaning": "Restricted to 18 years and over. Adults only. The content is high in impact.",
                  "order": 6
                },
                {
                  "certification": "RC",
                  "meaning": "Refused Classification. Banned from sale or hire in Australia; also generally applies to importation (if inspected by and suspicious to Customs). Private Internet viewing is unenforced and attempts to legally censor such online material has resulted in controversy. Films are rated RC if their content exceeds the guidelines. The content is very high in impact.",
                  "order": 8
                },
                {
                  "certification": "PG",
                  "meaning": "Parental guidance recommended. There are no age restrictions. The content is mild in impact.",
                  "order": 3
                },
                {
                  "certification": "M",
                  "meaning": "Recommended for mature audiences. There are no age restrictions. The content is moderate in impact.",
                  "order": 4
                },
                {
                  "certification": "MA15+",
                  "meaning": "Mature Accompanied. Unsuitable for children younger than 15. Children younger than 15 years must be accompanied by a parent or guardian. The content is strong in impact.",
                  "order": 5
                },
                {
                  "certification": "X18+",
                  "meaning": "Restricted to 18 years and over. Films with this rating have pornographic content. Films classified as X18+ are banned from being sold or rented in all Australian states and are only legally available in the Australian Capital Territory and the Northern Territory. However, importing X18+ material from the two territories to any of the Australian states is legal.The content is sexually explicit in impact.",
                  "order": 7
                }
              ],
              "DE": [
                {
                  "certification": "0",
                  "meaning": "No age restriction.",
                  "order": 1
                },
                {
                  "certification": "6",
                  "meaning": "No children younger than 6 years admitted.",
                  "order": 2
                },
                {
                  "certification": "12",
                  "meaning": "Children 12 or older admitted, children between 6 and 11 only when accompanied by parent or a legal guardian.",
                  "order": 3
                },
                {
                  "certification": "16",
                  "meaning": "Children 16 or older admitted, nobody under this age admitted.",
                  "order": 4
                },
                {
                  "certification": "18",
                  "meaning": "No youth admitted, only adults.",
                  "order": 5
                }
              ],
              "FR": [
                {
                  "certification": "U",
                  "meaning": "(Tous publics) valid for all audiences.",
                  "order": 1
                },
                {
                  "certification": "12",
                  "meaning": "(Interdit aux moins de 12 ans) unsuitable for children younger than 12 or forbidden in cinemas for under 12.",
                  "order": 3
                },
                {
                  "certification": "10",
                  "meaning": "(Déconseillé aux moins de 10 ans) unsuitable for children younger than 10 (this rating is only used for TV); equivalent in theatres : -avertissement- (warning), some scenes may be disturbing to young children and sensitive people; equivalent on video : -accord parental- (parental guidance).",
                  "order": 2
                },
                {
                  "certification": "16",
                  "meaning": "(Interdit aux moins de 16 ans) unsuitable for children younger than 16 or forbidden in cinemas for under 16.",
                  "order": 4
                },
                {
                  "certification": "18",
                  "meaning": "(Interdit aux mineurs) unsuitable for children younger than 18 or forbidden in cinemas for under 18.",
                  "order": 5
                }
              ],
              "NZ": [
                {
                  "certification": "M",
                  "meaning": "Suitable for (but not restricted to) mature audiences 16 years and up.",
                  "order": 3
                },
                {
                  "certification": "13",
                  "meaning": "Restricted to persons 13 years of age and over.",
                  "order": 4
                },
                {
                  "certification": "15",
                  "meaning": "Restricted to persons 15 years of age and over.",
                  "order": 5
                },
                {
                  "certification": "G",
                  "meaning": "Suitable for general audiences.",
                  "order": 1
                },
                {
                  "certification": "PG",
                  "meaning": "Parental guidance recommended for younger viewers.",
                  "order": 2
                },
                {
                  "certification": "16",
                  "meaning": "Restricted to persons 16 years of age and over.",
                  "order": 6
                },
                {
                  "certification": "18",
                  "meaning": "Restricted to persons 18 years of age and over.",
                  "order": 7
                },
                {
                  "certification": "R",
                  "meaning": "Restricted to a particular class of persons, or for particular purposes, or both.",
                  "order": 8
                }
              ],
              "IN": [
                {
                  "certification": "U",
                  "meaning": "Unrestricted Public Exhibition throughout India, suitable for all age groups. Films under this category should not upset children over 4. Such films may contain educational, social or family-oriented themes. Films under this category may also contain fantasy violence and/or mild bad language.",
                  "order": 0
                },
                {
                  "certification": "UA",
                  "meaning": "All ages admitted, but it is advised that children below 12 be accompanied by a parent as the theme or content may be considered intense or inappropriate for young children. Films under this category may contain mature themes, sexual references, mild sex scenes, violence with brief gory images and/or infrequent use of crude language.",
                  "order": 1
                },
                {
                  "certification": "A",
                  "meaning": "Restricted to adult audiences (18 years or over). Nobody below the age of 18 may buy/rent an A-rated DVD, VHS, UMD or watch a film in the cinema with this rating. Films under this category may contain adult/disturbing themes, frequent crude language, brutal violence with blood and gore, strong sex scenes and/or scenes of drug abuse which is considered unsuitable for minors.",
                  "order": 2
                }
              ],
              "GB": [
                {
                  "certification": "15",
                  "meaning": "Only those over 15 years are admitted. Nobody younger than 15 can rent or buy a 15-rated VHS, DVD, Blu-ray Disc, UMD or game, or watch a film in the cinema with this rating. Films under this category can contain adult themes, hard drugs, frequent strong language and limited use of very strong language, strong violence and strong sex references, and nudity without graphic detail. Sexual activity may be portrayed but without any strong detail. Sexual violence may be shown if discreet and justified by context.",
                  "order": 5
                },
                {
                  "certification": "R18",
                  "meaning": "Can only be shown at licensed adult cinemas or sold at licensed sex shops, and only to adults, those aged 18 or over. Films under this category are always hard-core pornography, defined as material intended for sexual stimulation and containing clear images of real sexual activity, strong fetish material, explicit animated images, or sight of certain acts such as triple simultaneous penetration and snowballing. There remains a range of material that is often cut from the R18 rating: strong images of injury in BDSM or spanking works, urolagnia, scenes suggesting incest even if staged, references to underage sex or childhood sexual development and aggressive behaviour such as hair-pulling or spitting on a performer are not permitted. More cuts are demanded in this category than any other category.",
                  "order": 7
                },
                {
                  "certification": "U",
                  "meaning": "All ages admitted, there is nothing unsuitable for children.",
                  "order": 1
                },
                {
                  "certification": "PG",
                  "meaning": "All ages admitted, but certain scenes may be unsuitable for young children. May contain mild language and sex/drugs references. May contain moderate violence if justified by context (e.g. fantasy).",
                  "order": 2
                },
                {
                  "certification": "12A",
                  "meaning": "Films under this category are considered to be unsuitable for very young people. Those aged under 12 years are only admitted if accompanied by an adult, aged at least 18 years, at all times during the motion picture. However, it is generally not recommended that children under 12 years should watch the film. Films under this category can contain mature themes, discrimination, soft drugs, moderate swear words, infrequent strong language and moderate violence, sex references and nudity. Sexual activity may be briefly and discreetly portrayed. Sexual violence may be implied or briefly indicated.",
                  "order": 3
                },
                {
                  "certification": "12",
                  "meaning": "Home media only since 2002. 12A-rated films are usually given a 12 certificate for the VHS/DVD version unless extra material has been added that requires a higher rating. Nobody younger than 12 can rent or buy a 12-rated VHS, DVD, Blu-ray Disc, UMD or game. The content guidelines are identical to those used for the 12A certificate.",
                  "order": 4
                },
                {
                  "certification": "18",
                  "meaning": "Only adults are admitted. Nobody younger than 18 can rent or buy an 18-rated VHS, DVD, Blu-ray Disc, UMD or game, or watch a film in the cinema with this rating. Films under this category do not have limitation on the bad language that is used. Hard drugs are generally allowed, and explicit sex references along with detailed sexual activity are also allowed. Scenes of strong real sex may be permitted if justified by the context. Very strong, gory, and/or sadistic violence is usually permitted. Strong sexual violence is permitted unless it is eroticised or excessively graphic.",
                  "order": 6
                }
              ],
              "NL": [
                {
                  "certification": "AL",
                  "meaning": "All ages.",
                  "order": 1
                },
                {
                  "certification": "6",
                  "meaning": "Potentially harmful to children under 6 years.",
                  "order": 2
                },
                {
                  "certification": "9",
                  "meaning": "Potentially harmful to children under 9 years.",
                  "order": 3
                },
                {
                  "certification": "12",
                  "meaning": "Potentially harmful to children under 12 years; broadcasting is not allowed before 8:00 pm.",
                  "order": 4
                },
                {
                  "certification": "16",
                  "meaning": "Potentially harmful to children under 16 years; broadcasting is not allowed before 10:00 pm.",
                  "order": 5
                }
              ],
              "BR": [
                {
                  "certification": "L",
                  "meaning": "General Audiences. Do not expose children to potentially harmful content.",
                  "order": 1
                },
                {
                  "certification": "10",
                  "meaning": "Not recommended for minors under ten. Violent content or inappropriate language to children, even if of a less intensity.",
                  "order": 2
                },
                {
                  "certification": "12",
                  "meaning": "Not recommended for minors under twelve. Scenes can include physical aggression, use of legal drugs and sexual innuendo.",
                  "order": 3
                },
                {
                  "certification": "14",
                  "meaning": "Not recommended for minors under fourteen. More violent material, stronger sex references and/or nudity.",
                  "order": 4
                },
                {
                  "certification": "16",
                  "meaning": "Not recommended for minors under sixteen. Scenes featuring production, trafficking and/or use of illegal drugs, hyper-realistic sex, sexual violence, abortion, torture, mutilation, suicide, trivialization of violence and death penalty.",
                  "order": 5
                },
                {
                  "certification": "18",
                  "meaning": "Not recommended for minors under eighteen. Scenes featuring explicit sex, incest, pedophilia, praising of the use of illegal drugs and violence of a strong imagery impact.",
                  "order": 6
                }
              ],
              "FI": [
                {
                  "certification": "S",
                  "meaning": "For all ages.",
                  "order": 1
                },
                {
                  "certification": "K-7",
                  "meaning": "Over 7 years.",
                  "order": 2
                },
                {
                  "certification": "K-12",
                  "meaning": "Over 12 years.",
                  "order": 3
                },
                {
                  "certification": "K-16",
                  "meaning": "Over 16 years.",
                  "order": 4
                },
                {
                  "certification": "K-18",
                  "meaning": "Adults only.",
                  "order": 5
                },
                {
                  "certification": "KK",
                  "meaning": "Banned from commercial distribution.",
                  "order": 6
                }
              ],
              "BG": [
                {
                  "certification": "A",
                  "meaning": "Recommended for children.",
                  "order": 1
                },
                {
                  "certification": "B",
                  "meaning": "Without age restrictions.",
                  "order": 2
                },
                {
                  "certification": "C",
                  "meaning": "Not recommended for children under 12.",
                  "order": 3
                },
                {
                  "certification": "D",
                  "meaning": "Prohibited for persons under 16.",
                  "order": 4
                },
                {
                  "certification": "X",
                  "meaning": "Prohibited for persons under 18.",
                  "order": 5
                }
              ],
              "ES": [
                {
                  "certification": "APTA",
                  "meaning": "General admission.",
                  "order": 1
                },
                {
                  "certification": "7",
                  "meaning": "Not recommended for audiences under 7.",
                  "order": 2
                },
                {
                  "certification": "12",
                  "meaning": "Not recommended for audiences under 12.",
                  "order": 3
                },
                {
                  "certification": "16",
                  "meaning": "Not recommended for audiences under 16.",
                  "order": 4
                },
                {
                  "certification": "18",
                  "meaning": "Not recommended for audiences under 18.",
                  "order": 5
                },
                {
                  "certification": "X",
                  "meaning": "Prohibited for audiences under 18.",
                  "order": 6
                }
              ],
              "PH": [
                {
                  "certification": "G",
                  "meaning": "General Audiences. Viewers of all ages are admitted.",
                  "order": 1
                },
                {
                  "certification": "PG",
                  "meaning": "Parental Guidance. Viewers below 13 years old must be accompanied by a parent or supervising adult.",
                  "order": 2
                },
                {
                  "certification": "R-13",
                  "meaning": "Restricted-13. Only viewers who are 13 years old and above can be admitted.",
                  "order": 3
                },
                {
                  "certification": "R-16",
                  "meaning": "Restricted-16. Only viewers who are 16 years old and above can be admitted.",
                  "order": 4
                },
                {
                  "certification": "R-18",
                  "meaning": "Restricted-18. Only viewers who are 18 years old and above can be admitted.",
                  "order": 5
                },
                {
                  "certification": "X",
                  "meaning": "Not For Public Exhibition. X-rated films are not suitable for public exhibition.",
                  "order": 6
                }
              ],
              "PT": [
                {
                  "certification": "Públicos",
                  "meaning": "For all the public (especially designed for children under 3 years of age).",
                  "order": 1
                },
                {
                  "certification": "M/3",
                  "meaning": "Passed for viewers aged 3 and older.",
                  "order": 2
                },
                {
                  "certification": "M/6",
                  "meaning": "Passed for viewers aged 6 and older.",
                  "order": 3
                },
                {
                  "certification": "M/12",
                  "meaning": "Passed for viewers aged 12 and older.",
                  "order": 4
                },
                {
                  "certification": "M/14",
                  "meaning": "Passed for viewers aged 14 and older.",
                  "order": 5
                },
                {
                  "certification": "M/16",
                  "meaning": "Passed for viewers aged 16 and older.",
                  "order": 6
                },
                {
                  "certification": "M/18",
                  "meaning": "Passed for viewers aged 18 and older.",
                  "order": 7
                },
                {
                  "certification": "P",
                  "meaning": "Special rating supplementary to the M/18 age rating denoting pornography.",
                  "order": 8
                }
              ]
            }
          }', true);
    }

    public function mockGetTVCredentialsResponse(): array
    {
        return json_decode('{
            "certifications": {
              "RU": [
                {
                  "certification": "18+",
                  "meaning": "Restricted to People 18 or Older.",
                  "order": 5
                },
                {
                  "certification": "0+",
                  "meaning": "Can be watched by Any Age.",
                  "order": 1
                },
                {
                  "certification": "6+",
                  "meaning": "Only kids the age of 6 or older can watch.",
                  "order": 2
                },
                {
                  "certification": "12+",
                  "meaning": "Only kids the age of 12 or older can watch.",
                  "order": 3
                },
                {
                  "certification": "16+",
                  "meaning": "Only teens the age of 16 or older can watch.",
                  "order": 4
                }
              ],
              "US": [
                {
                  "certification": "NR",
                  "meaning": "No rating information.",
                  "order": 0
                },
                {
                  "certification": "TV-Y",
                  "meaning": "This program is designed to be appropriate for all children.",
                  "order": 1
                },
                {
                  "certification": "TV-Y7",
                  "meaning": "This program is designed for children age 7 and above.",
                  "order": 2
                },
                {
                  "certification": "TV-G",
                  "meaning": "Most parents would find this program suitable for all ages.",
                  "order": 3
                },
                {
                  "certification": "TV-PG",
                  "meaning": "This program contains material that parents may find unsuitable for younger children.",
                  "order": 4
                },
                {
                  "certification": "TV-14",
                  "meaning": "This program contains some material that many parents would find unsuitable for children under 14 years of age.",
                  "order": 5
                },
                {
                  "certification": "TV-MA",
                  "meaning": "This program is specifically designed to be viewed by adults and therefore may be unsuitable for children under 17.",
                  "order": 6
                }
              ],
              "CA": [
                {
                  "certification": "Exempt",
                  "meaning": "Shows which are exempt from ratings (such as news and sports programming) will not display an on-screen rating at all.",
                  "order": 0
                },
                {
                  "certification": "C",
                  "meaning": "Programming suitable for children ages of 2–7 years. No profanity or sexual content of any level allowed. Contains little violence.",
                  "order": 1
                },
                {
                  "certification": "C8",
                  "meaning": "Suitable for children ages 8+. Low level violence and fantasy horror is allowed. No foul language is allowed, but occasional -socially offensive and discriminatory- language is allowed if in the context of the story. No sexual content of any level allowed.",
                  "order": 2
                },
                {
                  "certification": "G",
                  "meaning": "Suitable for general audiences. Programming suitable for the entire family with mild violence, and mild profanity and/or censored language.",
                  "order": 3
                },
                {
                  "certification": "PG",
                  "meaning": "Parental guidance. Moderate violence and moderate profanity is allowed, as is brief nudity and sexual references if important to the context of the story.",
                  "order": 4
                },
                {
                  "certification": "14+",
                  "meaning": "Programming intended for viewers ages 14 and older. May contain strong violence and strong profanity, and depictions of sexual activity as long as they are within the context of a story.",
                  "order": 5
                },
                {
                  "certification": "18+",
                  "meaning": "Programming intended for viewers ages 18 and older. May contain explicit violence and sexual activity. Programming with this rating cannot air before the watershed (9:00 p.m. to 6:00 a.m.).",
                  "order": 6
                }
              ],
              "AU": [
                {
                  "certification": "P",
                  "meaning": "Programming is intended for younger children 2–11; commercial stations must show at least 30 minutes of P-rated content each weekday and weekends at all times. No advertisements may be shown during P-rated programs.",
                  "order": 1
                },
                {
                  "certification": "C",
                  "meaning": "Programming intended for older children 5–14; commercial stations must show at least 30 minutes of C-rated content each weekday between 7 a.m. and 8 a.m. or between 4 p.m. and 8:30 p.m. A further 2 and a half ours a week must also be shown either within these time bands or between 7 a.m. and 8:30 p.m. on weekends and school holidays, for a total of five hours a week (averaged as 260 hours over the course of a year). C-rated content is subject to certain restrictions and limitations on advertising (typically five minutes maximum per 30-minute period or seven minutes including promotions and community announcements).",
                  "order": 2
                },
                {
                  "certification": "G",
                  "meaning": "For general exhibition; all ages are permitted to watch programming with this rating.",
                  "order": 3
                },
                {
                  "certification": "PG",
                  "meaning": "Parental guidance is recommended for young viewers; PG-rated content may air at any time on digital-only channels, otherwise, it should only be broadcast between 8:30 a.m. and 4:00 p.m. and between 7:00 p.m. and 6:00 a.m. on weekdays, and between 10:00 a.m. and 6:00 a.m. on weekends.",
                  "order": 4
                },
                {
                  "certification": "M",
                  "meaning": "Recommended for mature audiences; M-rated content may only be broadcast between 8:30 p.m. and 5:00 a.m. on any day, and additionally between 12:00 p.m. and 3:00 p.m. on schooldays.",
                  "order": 5
                },
                {
                  "certification": "MA15+",
                  "meaning": "Not suitable for children and teens under 15; MA15+-rated programming may only be broadcast between 9:00 p.m. and 5:00 a.m. on any given day. Consumer advice is mandatory. Some R18+ rated movies on DVD/Blu-ray are often re-edited on free TV/cable channels to secure a more -appropriate- MA15+ rating. Some movies that were rated R18 on DVD have since been aired in Australian TV with MA15+ rating.",
                  "order": 6
                },
                {
                  "certification": "AV15+",
                  "meaning": "Not suitable for children and teens under 15; this is the same as the MA15+ rating, except the -AV- stands for -Adult Violence- meaning that anything that is Classified -MA15+- with the consumer advice -Frequent Violence- or -Strong Violence- will automatically become AV15+ (with that same consumer advice.) The AV rating is still allowed to exceed any MA15+ content, in particular – Violence. AV15+ content may only be broadcast between 9:30 p.m. and 5:00 a.m. on any day. Consumer advice is mandatory.",
                  "order": 7
                },
                {
                  "certification": "R18+",
                  "meaning": "Not for children under 18; this is limited to Adult -Pay Per View- VC 196 and 197. Content may include graphic violence, sexual situations, coarse language and explicit drug use.",
                  "order": 8
                }
              ],
              "FR": [
                {
                  "certification": "NR",
                  "meaning": "No rating information.",
                  "order": 0
                },
                {
                  "certification": "10",
                  "meaning": "Not recommended for children under 10. Not allowed in children is television series.",
                  "order": 1
                },
                {
                  "certification": "12",
                  "meaning": "Not recommended for children under 12. Not allowed air before 10:00 p.m. Some channels and programs are subject to exception.",
                  "order": 2
                },
                {
                  "certification": "16",
                  "meaning": "Not recommended for children under 16. Not allowed air before 10:30 p.m. Some channels and programs are subject to exception.",
                  "order": 3
                },
                {
                  "certification": "18",
                  "meaning": "Not recommended for persons under 18. Allowed between midnight and 5 a.m. and only in some channels, access to these programs is locked by a personal password.",
                  "order": 4
                }
              ],
              "DE": [
                {
                  "certification": "0",
                  "meaning": "Can be aired at any time.",
                  "order": 0
                },
                {
                  "certification": "6",
                  "meaning": "Can be aired at any time.",
                  "order": 1
                },
                {
                  "certification": "12",
                  "meaning": "The broadcaster must take the decision about the air time by taking in consideration the impact on young children in the timeframe from 6:00am to 8:00pm.",
                  "order": 2
                },
                {
                  "certification": "16",
                  "meaning": "Can be aired only from 10:00pm Uhr to 6:00am.",
                  "order": 3
                },
                {
                  "certification": "18",
                  "meaning": "Can be aired only from 11:00pm Uhr to 6:00am.",
                  "order": 4
                }
              ],
              "TH": [
                {
                  "certification": "ส",
                  "meaning": "Sor - Educational movies which the public should be encouraged to see.",
                  "order": 0
                },
                {
                  "certification": "ท",
                  "meaning": "Tor - G Movies appropriate for the general public. No sex, abusive language or violence.",
                  "order": 1
                },
                {
                  "certification": "น 13+",
                  "meaning": "Nor 13+ Movies appropriate for audiences aged 13 and older.",
                  "order": 2
                },
                {
                  "certification": "น 15+",
                  "meaning": "Nor 15+ Movies appropriate for audiences aged 15 and older. Some violence, brutality, inhumanity, bad language or indecent gestures allowed.",
                  "order": 3
                },
                {
                  "certification": "น 18+",
                  "meaning": "Nor 18+ Movies appropriate for audiences aged 18 and older.",
                  "order": 4
                },
                {
                  "certification": "ฉ 20-",
                  "meaning": "Chor 20 - Movies prohibited for audiences aged below 20.",
                  "order": 5
                },
                {
                  "certification": "-",
                  "meaning": "Banned.",
                  "order": 6
                }
              ],
              "KR": [
                {
                  "certification": "Exempt",
                  "meaning": "This rating is only for knowledge based game shows; lifestyle shows; documentary shows; news; current topic discussion shows; education/culture shows; sports that excludes MMA or other violent sports; and other programs that Korea Communications Standards Commission recognizes.",
                  "order": 0
                },
                {
                  "certification": "ALL",
                  "meaning": "This rating is for programming that is appropriate for all ages. This program usually involves programs designed for children or families.",
                  "order": 1
                },
                {
                  "certification": "7",
                  "meaning": "This rating is for programming that may contain material inappropriate for children younger than 7, and parental discretion should be used. Some cartoon programming not deemed strictly as -educational-, and films rated -G- or -PG- in North America may fall into the 7 category.",
                  "order": 2
                },
                {
                  "certification": "12",
                  "meaning": "This rating is for programs that may deemed inappropriate for those younger than 12, and parental discretion should be used. Usually used for animations that have stronger themes or violence then those designed for children, or for reality shows that have mild violence, themes, or language.",
                  "order": 3
                },
                {
                  "certification": "15",
                  "meaning": "This rating is for programs that contain material that may be inappropriate for children under 15, and that parental discretion should be used. Examples include most dramas, and talk shows on OTA (over-the-air) TV (KBS, MBC, SBS), and many American TV shows/dramas on Cable TV channels like OCN and OnStyle. The programs that have this rating may include moderate or strong adult themes, language, sexual inference, and violence. As with the TV-MA rating in North America, this rating is commonly applied to live events where the occurrence of inappropriate dialogue is unpredictable. Since 2007, this rating is the most used rating for TV.",
                  "order": 4
                },
                {
                  "certification": "19",
                  "meaning": "This rating is for programs that are intended for adults only. 19-rated programming cannot air during the hours of 7:00AM to 9:00AM, and 1:00PM to 10:00PM. Programmes that receive this rating will almost certainly have adult themes, sexual situations, frequent use of strong language and disturbing scenes of violence.",
                  "order": 5
                }
              ],
              "GB": [
                {
                  "certification": "U",
                  "meaning": "The U symbol stands for Universal. A U film should be suitable for audiences aged four years and over.",
                  "order": 0
                },
                {
                  "certification": "PG",
                  "meaning": "PG stands for Parental Guidance. This means a film is suitable for general viewing, but some scenes may be unsuitable for young children. A PG film should not unsettle a child aged around eight or older.",
                  "order": 1
                },
                {
                  "certification": "12A",
                  "meaning": "Films classified 12A and video works classified 12 contain material that is not generally suitable for children aged under 12. 12A requires an adult to accompany any child under 12 seeing a 12A film at the cinema.",
                  "order": 2
                },
                {
                  "certification": "12",
                  "meaning": "Films classified 12A and video works classified 12 contain material that is not generally suitable for children aged under 12.",
                  "order": 3
                },
                {
                  "certification": "15",
                  "meaning": "No-one under 15 is allowed to see a 15 film at the cinema or buy/rent a 15 rated video. 15 rated works are not suitable for children under 15 years of age.",
                  "order": 4
                },
                {
                  "certification": "18",
                  "meaning": "Films rated 18 are for adults. No-one under 18 is allowed to see an 18 film at the cinema or buy / rent an 18 rated video. No 18 rated works are suitable for children.",
                  "order": 5
                },
                {
                  "certification": "R18",
                  "meaning": "The R18 category is a special and legally-restricted classification primarily for explicit works of consenting sex or strong fetish material involving adults.",
                  "order": 6
                }
              ],
              "BR": [
                {
                  "certification": "L",
                  "meaning": "Content is suitable for all audiences.",
                  "order": 0
                },
                {
                  "certification": "10",
                  "meaning": "Content suitable for viewers over the age of 10.",
                  "order": 1
                },
                {
                  "certification": "12",
                  "meaning": "Content suitable for viewers over the age of 12.",
                  "order": 2
                },
                {
                  "certification": "14",
                  "meaning": "Content suitable for viewers over the age of 14.",
                  "order": 3
                },
                {
                  "certification": "16",
                  "meaning": "Content suitable for viewers over the age of 16.",
                  "order": 4
                },
                {
                  "certification": "18",
                  "meaning": "Content suitable for viewers over the age of 18.",
                  "order": 5
                }
              ]
            }
          }', true);
    }
}
