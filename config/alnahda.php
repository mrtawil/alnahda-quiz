<?php

return [
    'cookie_name' => 'alnahda_quiz_records',
    'cookie_expiration' => 365 * 24 * 60, // minutes
    'languages' => ['ar', 'en'],
    'quizzes' => [
        [
            'id' => 1,
            'questions' => [
                [
                    'id' => 1,
                    'text_ar' => 'إذا كنت  تنوي أن تستثمر في واحدة من هذه الشركات الناشئة، أي واحدة ستختار؟',
                    'text_en' => 'If you were to invest in one of these startups, which one would you choose?',
                    'options' => [
                        [
                            'id' => 1,
                            'text_ar' => 'تطبيق يعنى بخدمات التجميل يملكه رائد أعمال',
                            'text_en' => 'A mobile app for beauty services owned by a male entrepreneur',
                            'weight' => 1,
                        ],
                        [
                            'id' => 2,
                            'text_ar' => 'تطبيق يعنى بالاستثمار تملكه رائدة أعمال',
                            'text_en' => 'A stock forecasting platform owned by a female entrepreneur',
                            'weight' => 2,
                        ],
                        [
                            'id' => 3,
                            'text_ar' => 'أحتاج تقارير تفصيلية لكلتا الشركتين قبل اتخاذ القرار',
                            'text_en' => 'I need detailed reports for both companies before making a decision',
                            'weight' => 3,
                        ],
                    ],
                ],
                [
                    'id' => 2,
                    'text_ar' => 'أنت تعمل في أحد البنوك وتحتاج إلى اختيار المرشحين المناسبين لمنحهم قرضًا تجاريًا.  من تختار؟',
                    'text_en' => 'You work in a bank and you\'re selecting the right candidates that qualify for a business loan. who do you choose?',
                    'options' => [
                        [
                            'id' => 1,
                            'text_ar' => 'رجل أعمال يريد فتح أفرع جديدة لسلسلة من البقالة يملكها',
                            'text_en' => 'A businessman who wants to open new branches for his grocery chain',
                            'weight' => 1,
                        ],
                        [
                            'id' => 2,
                            'text_ar' => 'سيدة أعمال تريد فتح أفرع جديدة لسلسلة من البقالة تملكها',
                            'text_en' => 'A businesswoman who wants to open new branches of her grocery chain',
                            'weight' => 1,
                        ],
                        [
                            'id' => 3,
                            'text_ar' => 'لا يمكنني اتخاذ القرار ما لم يكن لدي إحصاءات وتقارير عن الشركتين',
                            'text_en' => 'I can\'t make a decision unless I have statistics and reports on the two companies',
                            'weight' => 3,
                        ],
                    ],
                ],
                [
                    'id' => 3,
                    'text_ar' => 'من برأيك يجب أن يتحمّل مسؤولية ميزانية المنزل؟',
                    'text_en' => 'Who do you think should be responsible for managing the finances and budget at home?',
                    'options' => [
                        [
                            'id' => 1,
                            'text_ar' => 'الرجل حتى تتمكن المرأة من رعاية الأسرة',
                            'text_en' => 'The man, so that the woman can take care of the family',
                            'weight' => 1,
                        ],
                        [
                            'id' => 2,
                            'text_ar' => 'يجب على من يعيل الأسرة اتخاذ القرارات المالية',
                            'text_en' => 'The breadwinner must make the financial decisions',
                            'weight' => 2,
                        ],
                        [
                            'id' => 3,
                            'text_ar' => 'يجب أن يتعاون كلاهما معاً في هذه المهمّة',
                            'text_en' => 'Both the man and the woman should work together as partners',
                            'weight' => 3,
                        ],
                    ],
                ],
                [
                    'id' => 4,
                    'text_ar' => 'تتصل بك إدارة المدرسة لابنتك لأنهم يريدون ترشيحها لفريق كرة القدم الوطني للسيدات. ماذا سيكون ردّك؟',
                    'text_en' => 'Your daughter\'s school contacts you because they want to nominate her for the national female football team. What do you say?',
                    'options' => [
                        [
                            'id' => 1,
                            'text_ar' => 'أفضّل أن لا تشارك ابنتي في مباريات محترفة',
                            'text_en' => 'I would prefer that my daughter not go into football',
                            'weight' => 2,
                        ],
                        [
                            'id' => 2,
                            'text_ar' => 'أنا فخور بها وإذا كان شيئًا تستمتع به، سأدعمها',
                            'text_en' => 'I\'m proud of her and if it\'s something she enjoys, I\'ll support her',
                            'weight' => 3,
                        ],
                        [
                            'id' => 3,
                            'text_ar' => 'الرياضة ليست المسار الصحيح للفتيات',
                            'text_en' => 'Sports is not the right path for girls',
                            'weight' => 1,
                        ],
                    ],
                ],
                [
                    'id' => 5,
                    'text_ar' => 'اشتريت منزل جديد وتريد تصميم الديكور، مع من تعمل؟',
                    'text_en' => 'You just bought a house and are looking to decorate it. Who do you commission for the job?',
                    'options' => [
                        [
                            'id' => 1,
                            'text_ar' => 'مصممة ديكور سيدة لأنها أكثر إلمامًا بشؤون المنزل',
                            'text_en' => 'A female interior designer, because she is more familiar with the affairs of the house',
                            'weight' => 1,
                        ],
                        [
                            'id' => 2,
                            'text_ar' => 'مصمم ديكور  رجل لأنه أكثر احترافية',
                            'text_en' => 'A male interior designer as he is more professional',
                            'weight' => 1,
                        ],
                        [
                            'id' => 3,
                            'text_ar' => 'اختار المصمم/ة بحسب الكفاءة والخبرة',
                            'text_en' => 'I will pick the most qualified based on their portfolio',
                            'weight' => 3,
                        ],
                    ],
                ],
            ],
        ],
        [
            'id' => 2,
            'questions' => [
                [
                    'id' => 1,
                    'text_ar' => 'أتيحت لك فرصة الاستثمار في شركة  واعدة تملكها سيدة. هل ستمضي قدمًا في هذه الفرصة؟',
                    'text_en' => 'You have the opportunity to invest in a promising company owned by a woman. Would you go ahead with this opportunity?',
                    'options' => [
                        [
                            'id' => 1,
                            'text_ar' => 'كلا، أتردد لأن السيدات ليس لديهن الخبرة اللازمة لتنمية الأعمال التجارية',
                            'text_en' => 'No, I hesitate because women don\'t have the experience to grow a business',
                            'weight' => 1,
                        ],
                        [
                            'id' => 2,
                            'text_ar' => 'ممكن، لكن أراقبهم عن كثب',
                            'text_en' => 'Possibly, but I\'m watching them closely',
                            'weight' => 2,
                        ],
                        [
                            'id' => 3,
                            'text_ar' => 'لم لا, طالما الشركة واعدة',
                            'text_en' => 'Why not, as long as the company is promising',
                            'weight' => 3,
                        ],
                    ],
                ],
                [
                    'id' => 2,
                    'text_ar' => 'أنت ذاهب إلى البنك للحصول على استشارة مالية. اكتشفت أن الاستشاري سيدة، ماذا تفعل؟',
                    'text_en' => 'You are going to the bank for a financial consultation and found out that the consultant is a woman. What do you do?',
                    'options' => [
                        [
                            'id' => 1,
                            'text_ar' => 'أطلب تغيير الموظف إلى رجل',
                            'text_en' => 'I would ask to change the employee to a man',
                            'weight' => 1,
                        ],
                        [
                            'id' => 2,
                            'text_ar' => 'استمر في جلسة الاستشارة',
                            'text_en' => 'Continue the counseling session',
                            'weight' => 3,
                        ],
                        [
                            'id' => 3,
                            'text_ar' => 'سأحاول الحصول على رأي ثان من محترف آخر',
                            'text_en' => 'I will try to get a second opinion from another professional',
                            'weight' => 2,
                        ],
                    ],
                ],
                [
                    'id' => 3,
                    'text_ar' => 'عند توزيع الميراث هل تؤيد:',
                    'text_en' => 'When distributing the inheritance do you support..',
                    'options' => [
                        [
                            'id' => 1,
                            'text_ar' => 'إعطاء المرأة حقها بالميراث بغض النظر عن المسؤوليات لأنه حق شرعي',
                            'text_en' => 'Giving a woman her right to inherit, regardless of responsibilities, because it is a legitimate right',
                            'weight' => 3,
                        ],
                        [
                            'id' => 2,
                            'text_ar' => 'لا حاجة لها بالميراث لأن مسؤوليات الرجل أكبر وأهم',
                            'text_en' => 'There is no need for her to gain access to the inheritence, because the responsibilities of a man are greater and more important',
                            'weight' => 1,
                        ],
                        [
                            'id' => 3,
                            'text_ar' => 'تعطيها الميراث لكنها لا تستطيع التصرف به دون اللجوء إلى وكيل',
                            'text_en' => 'Giving women their inheritance, but she cannot access it without a sponsor',
                            'weight' => 2,
                        ],
                    ],
                ],
                [
                    'id' => 4,
                    'text_ar' => 'يعود ابنك إلى المنزل مستاء لأنه تعرض للتنمر في المدرسة ، كيف ستتعامل معه؟',
                    'text_en' => 'Your son comes home upset because he was bullied at school, how do you deal with it?',
                    'options' => [
                        [
                            'id' => 1,
                            'text_ar' => 'على الأم أن تتعامل معه، فهي المسؤولة عن الرعاية وإحتواء الإبن',
                            'text_en' => 'The mother should handle this, she is the emotional parent and the caretaker',
                            'weight' => 1,
                        ],
                        [
                            'id' => 2,
                            'text_ar' => 'على الأب أن يتعامل معه ، لأنه يحتاج إلى تعليم ابنه كيف يكون قويًا ويدافع عن نفسه من دون البكاء',
                            'text_en' => 'The father should handle this, as he needs to teach his son how to be strong and defend himself',
                            'weight' => 2,
                        ],
                        [
                            'id' => 3,
                            'text_ar' => 'يجب على كل من الأم والأب التعامل مع هذا الأمر ، حيث أن الأبوة والأمومة المشتركة هي السبيل الأنسب',
                            'text_en' => 'Both the mother and father should handle this, as co-parenting is the way to go',
                            'weight' => 3,
                        ],
                    ],
                ],
                [
                    'id' => 5,
                    'text_ar' => 'أنت مدير الموارد البشرية ، وعليك أن تعين موظف لمنصب مهم. من تختار؟',
                    'text_en' => 'You are an HR manager, and now you face the decision of hiring for an important position. Who would you choose?',
                    'options' => [
                        [
                            'id' => 1,
                            'text_ar' => 'مرشحة كفؤة وتملك المهارات ولكنها حامل',
                            'text_en' => 'Female candidate who is pregnant but has an extremely strong resume',
                            'weight' => 3,
                        ],
                        [
                            'id' => 2,
                            'text_ar' => 'مرشح أقل كفاءة ولكنه أعزب وقادر على التفاني الكامل',
                            'text_en' => 'Male candidate who is 24/7 available but has a standard resume',
                            'weight' => 1,
                        ],
                        [
                            'id' => 3,
                            'text_ar' => 'لا أختار أي أحد منهم، واستمر في البحث عن مرشحين آخرين',
                            'text_en' => 'Neither of them are suitable, I will continue searching for candidates',
                            'weight' => 2,
                        ],
                    ],
                ],
            ],
        ],
        [
            'id' => 3,
            'questions' => [
                [
                    'id' => 1,
                    'text_ar' => 'أنت تبني تطبيقًا خاصًا بشركة أغذية الأطفال، من هو برأيك الأجدر بالثقة في البرمجة؟',
                    'text_en' => 'You are building an app for a baby food company, who do you think is most trustworthy to code?',
                    'options' => [
                        [
                            'id' => 1,
                            'text_ar' => 'رجل مبرمج, عادة ما يتفوق الرجال في تطوير البرمجيات',
                            'text_en' => 'Male programmer, men usually excel at software development',
                            'weight' => 1,
                        ],
                        [
                            'id' => 2,
                            'text_ar' => 'امرأة مبرمجة, النساء يعرفن ميدان أغذية الأطفال أفضل من الرجال',
                            'text_en' => 'A female programmer, women know baby food better than men',
                            'weight' => 1,
                        ],
                        [
                            'id' => 3,
                            'text_ar' => 'قرارك يعتمد على من لديه سنوات أطول  في مجال البرمجة',
                            'text_en' => 'Your decision depends on who has the longest years in programming',
                            'weight' => 3,
                        ],
                    ],
                ],
                [
                    'id' => 2,
                    'text_ar' => 'برأيك، مَنْ على الأرجح  قادر على تسديد قرض مصرفي في وقته المحدّد؟',
                    'text_en' => 'In your opinion, who is most likely to be able to repay a bank loan on time?',
                    'options' => [
                        [
                            'id' => 1,
                            'text_ar' => 'الرجال',
                            'text_en' => 'Men',
                            'weight' => 1,
                        ],
                        [
                            'id' => 2,
                            'text_ar' => 'السيدات',
                            'text_en' => 'Women',
                            'weight' => 1,
                        ],
                        [
                            'id' => 3,
                            'text_ar' => 'لا فرق',
                            'text_en' => 'No difference',
                            'weight' => 3,
                        ],
                    ],
                ],
                [
                    'id' => 3,
                    'text_ar' => 'ما رأيك بتقسيم الأعمال المنزلية بين الزوجين مثل: تنظيف المنزل والاهتمام بالأطفال؟',
                    'text_en' => 'What do you think of dividing the household chores between the spouses, such as cleaning the house and taking care of the children?',
                    'options' => [
                        [
                            'id' => 1,
                            'text_ar' => 'يجب على المرأة أن تهتم بكل ما يتعلق  بالمنزل حتى يتمكن الرجل من إعالة الأسرة',
                            'text_en' => 'A woman should take care of everything related to the house, so that a man can provide for the family',
                            'weight' => 1,
                        ],
                        [
                            'id' => 2,
                            'text_ar' => 'لما لا، يجب تقسيم الأعمال المنزلية بين جميع أفراد المنزل',
                            'text_en' => 'Why not, the household chores should be divided among all the household members',
                            'weight' => 3,
                        ],
                        [
                            'id' => 3,
                            'text_ar' => 'هناك بعض الأدوار التي يجب احترامها في العائلة',
                            'text_en' => 'There are some roles that must be respected in the family',
                            'weight' => 2,
                        ],
                    ],
                ],
                [
                    'id' => 4,
                    'text_ar' => 'قررت زميلتك أنها تريد مواصلة تعليمها عبر الإنترنت. لديها طفلان وزوج يعمل بدوام كامل. ماذا تقول لها؟',
                    'text_en' => 'Your friend has decided that she wants to continue her education online. She has two children and a husband who works full time. What advice would you give her?',
                    'options' => [
                        [
                            'id' => 1,
                            'text_ar' => 'الآن ليس الوقت المناسب للحصول على التعليم خاصةً أن لديها عائلة لتعتني بها',
                            'text_en' => 'Now is not the time to get an education, especially since she has a family to take care of',
                            'weight' => 1,
                        ],
                        [
                            'id' => 2,
                            'text_ar' => 'لا  تعليق. هذا الأمر متعلق بها وبزوجها فقط',
                            'text_en' => 'No comment, this concerns her and her husband',
                            'weight' => 2,
                        ],
                        [
                            'id' => 3,
                            'text_ar' => 'أدعم قرارها لأنه من حقها أن تحقق ذاتها وأحلامها',
                            'text_en' => 'I support her decision, because she has the right to realize herself and her dreams',
                            'weight' => 3,
                        ],
                    ],
                ],
                [
                    'id' => 5,
                    'text_ar' => 'قد أطلقت للتو شركتك الناشئة وأنت بحاجة ماسة للموظفين، ما هي استراتيجيتك في التوظيف؟',
                    'text_en' => 'You have just launched your startup and you are in dire need of employees, what is your hiring strategy?',
                    'options' => [
                        [
                            'id' => 1,
                            'text_ar' => 'أوظف أكبر نسبة من النساء لتحقيق حصة التوظيف والاستفادة من التسهيلات المقدمة من الوزارة',
                            'text_en' => 'Employ the largest percentage of women to achieve the female hiring quota and benefit from the facilities provided by the ministry',
                            'weight' => 2,
                        ],
                        [
                            'id' => 2,
                            'text_ar' => 'أوظف بحسب الكفاءة وأعمل على تحقيق بيئة عملية متوازنة بين الجنسين',
                            'text_en' => 'I hire according to efficiency and work towards a gender-balanced work environment',
                            'weight' => 3,
                        ],
                        [
                            'id' => 3,
                            'text_ar' => 'أوظف أكبر نسبة من الرجال، خاصةً الأفراد، لأنهم أكثر تفرغًا',
                            'text_en' => 'I hire the largest percentage of men, especially non-married, because they are more free with their time',
                            'weight' => 1,
                        ],
                    ],
                ],
            ],
        ],
    ],
    'result_messages' => [
        [
            'min_weight' => 5,
            'title_ar' => 'لَم تطلق العنان لإمكاناتك بعد',
            'title_en' => 'You haven\'t unleashed your potential yet',
            'description_ar' => 'لنعمل معاً لكسر التحيز وتحقيق المساواة',
            'description_en' => 'Let\'s work together to break prejudice and achieve equality',
        ],
        [
            'min_weight' => 9,
            'title_ar' => 'أنت قادر على إحداث فرق في مجتمعك',
            'title_en' => 'You can make a difference in your community',
            'description_ar' => 'لأنك على الطريق الصحيح لتحقيق المساواة بين الجنسين',
            'description_en' => 'Because you are on the right path to achieving gender equality',
        ],
        [
            'min_weight' => 13,
            'title_ar' => 'أنت صانع تغيير في مجتمعك',
            'title_en' => 'You are a change maker in your community',
            'description_ar' => 'لأنك تحترم المساواة بين الجنسين من دون أي تحيز',
            'description_en' => 'Because you respect gender equality without any bias',
        ],
    ],
    'coffee_shops' => [
        [
            'title_key' => 'strings.Respire Lounge, Al Rabie District',
            'logo' => 'https://images.pexels.com/photos/674010/pexels-photo-674010.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'value' => 'respire_lounge',
        ],
        [
            'title_key' => 'strings.Huna, Panorama Mall',
            'logo' => 'https://images.pexels.com/photos/674010/pexels-photo-674010.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'value' => 'huna',
        ],
    ],
];
