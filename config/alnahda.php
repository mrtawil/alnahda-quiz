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
            'title_en' => 'YOU HAVE MORE POTENTIAL TO UNLEASH!',
            'description_ar' => 'لديك الإمكانية لبناء قدراتك!',
            'description_en' => 'Let\'s work together to break bias and achieve equality',
            'image' => 'assets/media/images/result_3.png',
            'embed_link' => '<blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/CZhILeYM4e8/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/CZhILeYM4e8/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/CZhILeYM4e8/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by Blue Hat (@bluehat_snaps)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>',
        ],
        [
            'min_weight' => 9,
            'title_ar' => 'أنت قادر على إحداث فرق في مجتمعك',
            'title_en' => "YOU ARE ABLE TO MAKE A DIFFER-\nENCE IN YOUR COMMUNITY!",
            'description_ar' => 'أنت قادر/ة على إحداث فرق في مجتمعك!',
            'description_en' => 'Because you are on the right track to achieving gender equality',
            'image' => 'assets/media/images/result_2.png',
            'embed_link' => '<blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/CZhILeYM4e8/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/CZhILeYM4e8/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/CZhILeYM4e8/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by Blue Hat (@bluehat_snaps)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>',
        ],
        [
            'min_weight' => 13,
            'title_ar' => 'أنت صانع تغيير في مجتمعك',
            'title_en' => 'YOU ARE A GENDER CHAMPION!',
            'description_ar' => 'أنت صانع/ة تغيير في مجتمعك!',
            'description_en' => 'Because you believe in gender equality without any bias',
            'image' => 'assets/media/images/result_1.png',
            'embed_link' => '<blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/CZhILeYM4e8/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/CZhILeYM4e8/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/CZhILeYM4e8/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by Blue Hat (@bluehat_snaps)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>',
        ],
    ],
    'coffee_shops' => [
        [
            'title_ar' => 'هنا، بانوراما مول - الرياض',
            'title_en' => "Huna, Panorama Mall\n- Riyadh",
            'short_title' => "HNA",
            'logo' => 'assets/media/images/huna-logo.png',
            'logo_white' => 'assets/media/images/huna-logo.png',
            'logo_class' => 'invert',
            'logo_class_selected' => '',
            'value' => 'huna',
        ],
        [
            'title_ar' => 'تنفس لاونج، حي الربيع - الرياض',
            'title_en' => "Respire Lounge, Ar\nRabi - Riyadh",
            'short_title' => "RSP",
            'logo' => 'assets/media/images/respire-logo.png',
            'logo_white' => 'assets/media/images/respire-logo-white.png',
            'logo_class' => '',
            'logo_class_selected' => 'invert',
            'value' => 'respire',
        ],
    ],
];
