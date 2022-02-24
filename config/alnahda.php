<?php

return [
    'cookie_name' => 'alnahda_quiz_records',
    'cookie_expiration' => 365 * 24 * 60, // minutes
    'quizzes' => [
        [
            'id' => 1,
            'questions' => [
                [
                    'text' => 'إذا كنت  تنوي أن تستثمر في واحدة من هذه الشركات الناشئة، أي واحدة ستختار؟',
                    'options' => [
                        [
                            'text' => 'تطبيق يعنى بخدمات التجميل يملكه رائد أعمال',
                            'weight' => 1,
                        ],
                        [
                            'text' => 'تطبيق يعنى بالاستثمار تملكه رائدة أعمال',
                            'weight' => 2,
                        ],
                        [
                            'text' => 'أحتاج تقارير تفصيلية لكلتا الشركتين قبل اتخاذ القرار',
                            'weight' => 3,
                        ],
                    ],
                ],
                [
                    'text' => 'أنت تعمل في أحد البنوك وتحتاج إلى اختيار المرشحين المناسبين لمنحهم قرضًا تجاريًا.  من تختار؟',
                    'options' => [
                        [
                            'text' => 'رجل أعمال يريد فتح أفرع جديدة لسلسلة من البقالة يملكها',
                            'weight' => 1,
                        ],
                        [
                            'text' => 'سيدة أعمال تريد فتح أفرع جديدة لسلسلة من البقالة تملكها',
                            'weight' => 1,
                        ],
                        [
                            'text' => 'لا يمكنني اتخاذ القرار ما لم يكن لدي إحصاءات وتقارير عن الشركتين',
                            'weight' => 3,
                        ],
                    ],
                ],
                [
                    'text' => 'من برأيك يجب أن يتحمّل مسؤولية ميزانية المنزل؟',
                    'options' => [
                        [
                            'text' => 'الرجل حتى تتمكن المرأة من رعاية الأسرة',
                            'weight' => 1,
                        ],
                        [
                            'text' => 'يجب على من يعيل الأسرة اتخاذ القرارات المالية',
                            'weight' => 2,
                        ],
                        [
                            'text' => 'يجب أن يتعاون كلاهما معاً في هذه المهمّة',
                            'weight' => 3,
                        ],
                    ],
                ],
                [
                    'text' => 'تتصل بك إدارة المدرسة لابنتك لأنهم يريدون ترشيحها لفريق كرة القدم الوطني للسيدات. ماذا سيكون ردّك؟',
                    'options' => [
                        [
                            'text' => 'أفضّل أن لا تشارك ابنتي في مباريات محترفة',
                            'weight' => 2,
                        ],
                        [
                            'text' => 'أنا فخور بها وإذا كان شيئًا تستمتع به، سأدعمها',
                            'weight' => 3,
                        ],
                        [
                            'text' => 'الرياضة ليست المسار الصحيح للفتيات',
                            'weight' => 1,
                        ],
                    ],
                ],
                [
                    'text' => 'اشتريت منزل جديد وتريد تصميم الديكور، مع من تعمل؟',
                    'options' => [
                        [
                            'text' => 'مصممة ديكور سيدة لأنها أكثر إلمامًا بشؤون المنزل',
                            'weight' => 1,
                        ],
                        [
                            'text' => 'مصمم ديكور  رجل لأنه أكثر احترافية',
                            'weight' => 1,
                        ],
                        [
                            'text' => 'اختار المصمم/ة بحسب الكفاءة والخبرة',
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
                    'text' => 'أتيحت لك فرصة الاستثمار في شركة  واعدة تملكها سيدة. هل ستمضي قدمًا في هذه الفرصة؟',
                    'options' => [
                        [
                            'text' => 'كلا، أتردد لأن السيدات ليس لديهن الخبرة اللازمة لتنمية الأعمال التجارية',
                            'weight' => 1,
                        ],
                        [
                            'text' => 'ممكن، لكن أراقبهم عن كثب',
                            'weight' => 2,
                        ],
                        [
                            'text' => 'لم لا, طالما الشركة واعدة ',
                            'weight' => 3,
                        ],
                    ],
                ],
                [
                    'text' => 'أنت ذاهب إلى البنك للحصول على استشارة مالية. اكتشفت أن الاستشاري سيدة، ماذا تفعل؟',
                    'options' => [
                        [
                            'text' => 'أطلب تغيير الموظف إلى رجل',
                            'weight' => 1,
                        ],
                        [
                            'text' => 'استمر في جلسة الاستشارة',
                            'weight' => 3,
                        ],
                        [
                            'text' => 'سأحاول الحصول على رأي ثان من محترف آخر',
                            'weight' => 2,
                        ],
                    ],
                ],
                [
                    'text' => 'عند توزيع الميراث هل تؤيد:',
                    'options' => [
                        [
                            'text' => 'إعطاء المرأة حقها بالميراث بغض النظر عن المسؤوليات لأنه حق شرعي',
                            'weight' => 3,
                        ],
                        [
                            'text' => 'لا حاجة لها بالميراث لأن مسؤوليات الرجل أكبر وأهم',
                            'weight' => 1,
                        ],
                        [
                            'text' => 'تعطيها الميراث لكنها لا تستطيع التصرف به دون اللجوء إلى وكيل',
                            'weight' => 2,
                        ],
                    ],
                ],
                [
                    'text' => 'يعود ابنك إلى المنزل مستاء لأنه تعرض للتنمر في المدرسة ، كيف ستتعامل معه؟',
                    'options' => [
                        [
                            'text' => 'على الأم أن تتعامل معه، فهي المسؤولة عن الرعاية وإحتواء الإبن',
                            'weight' => 1,
                        ],
                        [
                            'text' => 'على الأب أن يتعامل معه ، لأنه يحتاج إلى تعليم ابنه كيف يكون قويًا ويدافع عن نفسه من دون البكاء',
                            'weight' => 2,
                        ],
                        [
                            'text' => 'يجب على كل من الأم والأب التعامل مع هذا الأمر ، حيث أن الأبوة والأمومة المشتركة هي السبيل الأنسب',
                            'weight' => 3,
                        ],
                    ],
                ],
                [
                    'text' => 'أنت مدير الموارد البشرية ، وعليك أن تعين موظف لمنصب مهم. من تختار؟',
                    'options' => [
                        [
                            'text' => 'مرشحة كفؤة وتملك المهارات ولكنها حامل',
                            'weight' => 3,
                        ],
                        [
                            'text' => 'مرشح أقل كفاءة ولكنه أعزب وقادر على التفاني الكامل',
                            'weight' => 1,
                        ],
                        [
                            'text' => 'لا أختار أي أحد منهم، واستمر في البحث عن مرشحين آخرين',
                            'weight' => 2,
                        ],
                    ],
                ],
            ],
        ],
    ],
];
