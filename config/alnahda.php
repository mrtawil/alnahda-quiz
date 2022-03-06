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
                    'text_ar' => 'لنفترض أنك تبحث/ين عن فرص استثمارية في شركات ناشئة، وقد صادفت شركة تملكها سيدة. فهل كنت لتمضي قدماً في هذه الفرصة؟',
                    'text_en' => 'Suppose you are looking for investment opportunities in startups, and you came across a female-owned company. Would you go ahead with this opportunity?',
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
                            'text_en' => 'I might, but I would monitor them closely',
                            'weight' => 2,
                        ],
                        [
                            'id' => 3,
                            'text_ar' => 'نعم، لما لا طالما الشركة واعدة',
                            'text_en' => 'Yes, why not as long as the company is promising',
                            'weight' => 3,
                        ],
                    ],
                ],
                [
                    'id' => 2,
                    'text_ar' => 'أنت ذاهب/ة إلى البنك للحصول على استشارة مالية. اكتشفت أن الاستشاري سيدة، ماذا تفعل/ين؟',
                    'text_en' => 'You are going to the bank for a financial consultation and found out that the consultant is a woman. What do you do?',
                    'options' => [
                        [
                            'id' => 1,
                            'text_ar' => 'أطلب تغيير الموظف إلى رجل',
                            'text_en' => 'I would inform management that I\'d prefer if my consultant is a man',
                            'weight' => 1,
                        ],
                        [
                            'id' => 2,
                            'text_ar' => 'استمر في جلسة الاستشارة',
                            'text_en' => 'Continue the consultation',
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
                            'text_ar' => 'من يعيل الأسرة عليه/ا اتخاذ القرارات المالية',
                            'text_en' => 'The breadwinner must make the financial decisions',
                            'weight' => 2,
                        ],
                        [
                            'id' => 3,
                            'text_ar' => 'الرجل و المرأة يتعاونان معاً كشركاء',
                            'text_en' => 'Men and women should manage together as partners',
                            'weight' => 3,
                        ],
                    ],
                ],
                [
                    'id' => 4,
                    'text_ar' => 'اتصلت بك إدارة مدرسة ابنتك لأنهم يريدون ترشيحها لفريق كرة القدم الوطني النسائي. ماذا سيكون ردّك؟',
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
                            'text_ar' => 'أنا فخور/ة بها وإذا كان شيئًا تستمتع به، سأدعمها',
                            'text_en' => 'I\'m proud of her and if it\'s something she wants, I\'ll support her',
                            'weight' => 3,
                        ],
                        [
                            'id' => 3,
                            'text_ar' => 'الرياضة ليست المسار الصحيح للفتيات',
                            'text_en' => 'Sports is not the right career path for girls',
                            'weight' => 1,
                        ],
                    ],
                ],
                [
                    'id' => 5,
                    'text_ar' => 'أنت مدير/ة الموارد البشرية، وعليك تعيين موظف/ة لمنصب مهم. من تختار/ي؟',
                    'text_en' => 'You are an HR manager, and now you face the decision of hiring for an important position. Who would you choose?',
                    'options' => [
                        [
                            'id' => 1,
                            'text_ar' => 'مرشحة ذات كفاءة وتملك المهارات ولكنها حامل',
                            'text_en' => 'A female candidate who is qualified but pregnant',
                            'weight' => 3,
                        ],
                        [
                            'id' => 2,
                            'text_ar' => 'مرشح أقل كفاءة ولكنه أعزب وقادر على التفاني الكامل',
                            'text_en' => 'A single male candidate who is less qualified but fully dedicated',
                            'weight' => 1,
                        ],
                        [
                            'id' => 3,
                            'text_ar' => 'لا أختار أي أحد منهم، واستمر في البحث عن مرشحين آخرين',
                            'text_en' => 'Neither of them are suitable, I will continue searching for other candidates',
                            'weight' => 2,
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
                    'text_ar' => 'هل عملت مع أو قابلت مطورة تطبيقات وبرامج تقنية من قبل؟',
                    'text_en' => 'Have you worked with or met a female web developer before?',
                    'options' => [
                        [
                            'id' => 1,
                            'text_ar' => 'نعم',
                            'text_en' => 'Yes',
                            'weight' => 3,
                        ],
                        [
                            'id' => 2,
                            'text_ar' => 'لا',
                            'text_en' => 'No',
                            'weight' => 1,
                        ],
                        [
                            'id' => 3,
                            'text_ar' => 'لا أعرف أي مطورات أو مطورين',
                            'text_en' => 'I don’t know any male or female developers',
                            'weight' => 2,
                        ],
                    ],
                ],
                [
                    'id' => 2,
                    'text_ar' => 'برأيك، مَنْ على الأرجح قادر على تسديد قرض مصرفي في وقته المحدّد؟',
                    'text_en' => 'In your opinion, who is most likely capable of repaying a bank loan on time?',
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
                            'text_en' => 'There’s no difference',
                            'weight' => 3,
                        ],
                    ],
                ],
                [
                    'id' => 3,
                    'text_ar' => 'عند توزيع الميراث، هل تؤيد/ي:',
                    'text_en' => 'When distributing the inheritance, what do you support?',
                    'options' => [
                        [
                            'id' => 1,
                            'text_ar' => 'إعطاء المرأة حقها بالميراث بغض النظر عن المسؤوليات لأنه حق شرعي.',
                            'text_en' => 'Giving a woman her rightful inheritance, regardless of responsibilities, because it is her legitimate right.',
                            'weight' => 3,
                        ],
                        [
                            'id' => 2,
                            'text_ar' => 'لا حاجة للمرأة بالميراث لأن مسؤوليات الرجل أكبر وأهم.',
                            'text_en' => 'A woman doesn’t need an inheritance, because a man\'s responsibilities tend to be greater and more important.',
                            'weight' => 1,
                        ],
                        [
                            'id' => 3,
                            'text_ar' => 'إعطاء المرأة الميراث ولكن حدها في التصرف به إلا بعد الرجوع إلى مدير مالي.',
                            'text_en' => 'Giving women their inheritance, but she cannot access it without a conservator.',
                            'weight' => 1,
                        ],
                    ],
                ],
                [
                    'id' => 4,
                    'text_ar' => 'يعود ابنك إلى المنزل مستاء لأنه تعرض للتنمر في المدرسة, كيف ستتعامل/ين معه؟',
                    'text_en' => 'Your son comes home upset because he was bullied at school, how do you deal with it?',
                    'options' => [
                        [
                            'id' => 1,
                            'text_ar' => 'على الأم أن تتعامل معه',
                            'text_en' => 'The mother should deal with him',
                            'weight' => 1,
                        ],
                        [
                            'id' => 2,
                            'text_ar' => 'على الأب أن يتعامل معه',
                            'text_en' => 'The father should deal with him',
                            'weight' => 1,
                        ],
                        [
                            'id' => 3,
                            'text_ar' => 'على الوالدين التعامل معه كفريق واحد',
                            'text_en' => 'Co-parenting is the way to go',
                            'weight' => 3,
                        ],
                    ],
                ],
                [
                    'id' => 5,
                    'text_ar' => 'لقد أطلقت للتو شركتك الناشئة وأنت بحاجة ماسة للموظفين، ما هي استراتيجيتك في التوظيف؟',
                    'text_en' => 'You have just launched your startup and you need employees. What is your hiring strategy?',
                    'options' => [
                        [
                            'id' => 1,
                            'text_ar' => 'أوظف أكبر نسبة من النساء لتحقيق حصة التوظيف للاستفادة من التسهيلات الوزارة',
                            'text_en' => 'The largest % of women to achieve the hiring quota & receive benefits from the ministry',
                            'weight' => 2,
                        ],
                        [
                            'id' => 2,
                            'text_ar' => 'أوظف بحسب الكفاءة وأعمل على تحقيق بيئة عملية متوازنة',
                            'text_en' => 'I hire according to efficiency & achieve a gender-balanced work culture',
                            'weight' => 3,
                        ],
                        [
                            'id' => 3,
                            'text_ar' => 'أوظف أكبر نسبة من الرجال، خاصةً الأفراد، لأنهم أكثر تفرغًا',
                            'text_en' => 'I hire the largest % of men, especially non-married, because they are more free with their time',
                            'weight' => 1,
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
                    'text_ar' => 'بشكل عام، الرجل أفضل من المرأة في إدارة الأعمال:',
                    'text_en' => 'In general, men are better in business than women:',
                    'options' => [
                        [
                            'id' => 1,
                            'text_ar' => 'أتفق تمامًا',
                            'text_en' => 'Strongly Agree',
                            'weight' => 1,
                        ],
                        [
                            'id' => 2,
                            'text_ar' => 'أتفق',
                            'text_en' => 'Agree',
                            'weight' => 1,
                        ],
                        [
                            'id' => 3,
                            'text_ar' => 'لا أتفق',
                            'text_en' => 'Disagree',
                            'weight' => 2,
                        ],
                        [
                            'id' => 4,
                            'text_ar' => 'لا أتفق إطلاقًا',
                            'text_en' => 'Strongly Disagree',
                            'weight' => 3,
                        ],
                    ],
                ],
                [
                    'id' => 2,
                    'text_ar' => 'ماذا كنت لتفعل/ي لو أتيح لك سابقآً فرصة الاستثمار في مشروع تقوده النساء؟ ',
                    'text_en' => 'If you’ve previously had the opportunity to invest in a woman-led business, what would you have done?',
                    'options' => [
                        [
                            'id' => 1,
                            'text_ar' => 'رفضت بعد النظر في الاقتراح',
                            'text_en' => 'Declined after looking at the proposal',
                            'weight' => 2,
                        ],
                        [
                            'id' => 2,
                            'text_ar' => 'رفضت قبل النظر في الاقتراح',
                            'text_en' => 'Declined before looking at the proposal',
                            'weight' => 1,
                        ],
                        [
                            'id' => 3,
                            'text_ar' => 'لم تسنح لي مثل هذه الفرصة',
                            'text_en' => 'I wouldn\'t have had such an opportunity',
                            'weight' => 1,
                        ],
                    ],
                ],
                [
                    'id' => 3,
                    'text_ar' => 'بشكل عام، الرجل أفضل كقائد سياسي من المرأة:',
                    'text_en' => 'In general, men are better political leaders than women:',
                    'options' => [
                        [
                            'id' => 1,
                            'text_ar' => 'أتفق تمامًا',
                            'text_en' => 'Strongly Agree',
                            'weight' => 1,
                        ],
                        [
                            'id' => 2,
                            'text_ar' => 'أتفق',
                            'text_en' => 'Agree',
                            'weight' => 1,
                        ],
                        [
                            'id' => 3,
                            'text_ar' => 'لا أتفق',
                            'text_en' => 'Disagree',
                            'weight' => 2,
                        ],
                        [
                            'id' => 4,
                            'text_ar' => 'لا أتفق إطلاقًا',
                            'text_en' => 'Strongly Disagree',
                            'weight' => 3,
                        ],
                    ],
                ],
                [
                    'id' => 4,
                    'text_ar' => 'عندما تعمل الأم خارج المنزل يعاني الأطفال',
                    'text_en' => 'When a mother has a full time job, her children suffer',
                    'options' => [
                        [
                            'id' => 1,
                            'text_ar' => 'أتفق تمامًا',
                            'text_en' => 'Strongly Agree',
                            'weight' => 1,
                        ],
                        [
                            'id' => 2,
                            'text_ar' => 'أتفق',
                            'text_en' => 'Agree',
                            'weight' => 1,
                        ],
                        [
                            'id' => 3,
                            'text_ar' => 'لا أتفق',
                            'text_en' => 'Disagree',
                            'weight' => 2,
                        ],
                        [
                            'id' => 4,
                            'text_ar' => 'لا أتفق إطلاقًا',
                            'text_en' => 'Strongly Disagree',
                            'weight' => 3,
                        ],
                    ],
                ],
                [
                    'id' => 5,
                    'text_ar' => 'عندما تكون فرص العمل نادرة، يجب أن يكون للرجال حق أكثر من النساء في الحصول على عمل:',
                    'text_en' => '​​When job opportunities are scarce, men should have more rights to get a job than women:',
                    'options' => [
                        [
                            'id' => 1,
                            'text_ar' => 'أتفق تمامًا',
                            'text_en' => 'Strongly Agree',
                            'weight' => 1,
                        ],
                        [
                            'id' => 2,
                            'text_ar' => 'أتفق',
                            'text_en' => 'Agree',
                            'weight' => 1,
                        ],
                        [
                            'id' => 3,
                            'text_ar' => 'لا أتفق',
                            'text_en' => 'Disagree',
                            'weight' => 2,
                        ],
                        [
                            'id' => 4,
                            'text_ar' => 'لا أتفق إطلاقًا',
                            'text_en' => 'Strongly Disagree',
                            'weight' => 3,
                        ],
                    ],
                ],
            ],
        ],
    ],
    'result_messages' => [
        [
            'min_weight' => 5,
            'title_ar' => 'لديك الإمكانية لبناء قدراتك!',
            'title_en' => 'YOU HAVE MORE POTENTIAL TO UNLEASH!',
            'description_ar' => 'لنعمل معاً على كسر التحيّز وتحقيق المساواة',
            'description_en' => 'Let\'s work together to break bias and achieve equality.',
            'image' => 'assets/media/images/result_3.png',
            'embed_link' => '<blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/CZhILeYM4e8/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/CZhILeYM4e8/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/CZhILeYM4e8/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by Blue Hat (@bluehat_snaps)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>',
        ],
        [
            'min_weight' => 9,
            'title_ar' => 'أنت قادر/ة على إحداث فرق في مجتمعك!',
            'title_en' => "YOU ARE ABLE TO MAKE A DIFFERENCE IN YOUR COMMUNITY!",
            'description_ar' => 'لأنك على الطريق الصحيح لتحقيق المساواة بين الجنسينن',
            'description_en' => 'Because you are on the right track to achieving gender equality.',
            'image' => 'assets/media/images/result_2.png',
            'embed_link' => '<blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/CZhILeYM4e8/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/CZhILeYM4e8/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/CZhILeYM4e8/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by Blue Hat (@bluehat_snaps)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>',
        ],
        [
            'min_weight' => 13,
            'title_ar' => 'أنت صانع/ة  تغيير في مجتمعك!',
            'title_en' => 'YOU ARE A GENDER CHAMPION!',
            'description_ar' => 'لأنك تحترم/ين المساواة بين الجنسين من دون أي تحيّز',
            'description_en' => 'Because you believe in gender equality without any bias.',
            'image' => 'assets/media/images/result_1.png',
            'embed_link' => '<blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/CZhILeYM4e8/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/CZhILeYM4e8/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/CZhILeYM4e8/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by Blue Hat (@bluehat_snaps)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>',
        ],
    ],
    'coffee_shops' => [
        [
            'title_ar' => "هنا، بانوراما\nمول - الرياض",
            'title_en' => "Huna, Panorama Mall\n- Riyadh",
            'short_title' => "HNA",
            'logo' => 'assets/media/images/huna-logo.png',
            'logo_white' => 'assets/media/images/huna-logo.png',
            'logo_class' => 'invert',
            'logo_class_selected' => '',
            'value' => 'huna',
        ],
        [
            'title_ar' => "تنفس لاونج، حي\nالربيع - الرياض",
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
