<?php

/**
 * ⚠️ Editing not allowed except for 'en' language.
 *
 * @see https://github.com/monicahq/monica/blob/main/docs/contribute/translate.md for translations.
 */

return [
    'yes' => '是',
    'no' => '否',
    'update' => '更新',
    'save' => '保存',
    'add' => '添加',
    'cancel' => '取消',
    'confirm' => '确认',
    'delete_confirm' => '确定吗？',
    'delete' => '删除',
    'edit' => '编辑',
    'upload' => '上传',
    'download' => '下载',
    'save_close' => '保存并关闭',
    'close' => '关闭',
    'copy' => '复制',
    'create' => '创建',
    'remove' => '删除',
    'revoke' => '撤销',
    'done' => '完成',
    'back' => '返回',
    'verify' => '验证',
    'new' => '新',
    'unknown' => '我不知道',
    'load_more' => '载入更多',
    'loading' => '加载中...',
    'with' => '与',
    'today' => '今天',
    'yesterday' => '昨天',
    'another_day' => '某一天',
    'date' => '日期',
    'type' => '类型',
    'zoom' => '放大',
    'upgrade' => '升级解锁',
    'percent_uploaded' => '已上传 {percent}%',
    'retry' => '重试',
    'filter' => '过滤列表',
    'go_back' => '后退',
    'file_selected' => '选择了 1 个文件...| 选择了 {count} 个文件...',

    'application_title' => 'Monica – 您的私人社交关系管家',
    'application_description' => 'Monica是用来收集并管理您与亲朋好友之间的关系的得力助手。',
    'application_og_title' => '促进你们之间的感情。一个免费开源的面向亲朋好友的 CRM 工具',

    'markdown_description' => '想用一种美观的方式格式化文本吗？我们以Markdown语法支持粗体、斜体、列表等样式。',
    'markdown_link' => '阅读文档',

    'header_settings_link' => '设置',
    'header_logout_link' => '注销',
    'header_changelog_link' => '更新日志',

    'main_nav_cta' => '联系人',
    'main_nav_dashboard' => '仪表盘',
    'main_nav_family' => '联系人',
    'main_nav_journal' => '日记',
    'main_nav_activities' => '活动',
    'main_nav_tasks' => '任务',

    'footer_remarks' => '想发送反馈？',
    'footer_send_email' => '给我们发邮件',
    'footer_privacy' => '隐私条款',
    'footer_release' => '版本说明',
    'footer_newsletter' => '新闻简报',
    'footer_source_code' => '捐助',
    'footer_version' => '版本::version',
    'footer_new_version' => '有新版本的 Monica 可用',

    'footer_modal_version_whats_new' => '新增内容',
    'footer_modal_version_release_away' => '您有一个最新发布版本可更新。您应该更新实例. |您已经有:number个版本没有更新，应该更新了。',

    'breadcrumb_dashboard' => '仪表盘',
    'breadcrumb_list_contacts' => '联系人',
    'breadcrumb_archived_contacts' => '存档的联系人',
    'breadcrumb_journal' => '日记',
    'breadcrumb_settings' => '设置',
    'breadcrumb_settings_export' => '导出',
    'breadcrumb_settings_users' => '用户',
    'breadcrumb_settings_users_add' => '添加用户',
    'breadcrumb_settings_subscriptions' => '订阅',
    'breadcrumb_settings_import' => '导入',
    'breadcrumb_settings_import_report' => '导入报表',
    'breadcrumb_settings_import_upload' => '上传',
    'breadcrumb_settings_tags' => '标签',
    'breadcrumb_add_significant_other' => '添加其他重要',
    'breadcrumb_edit_significant_other' => '编辑其他重要',
    'breadcrumb_add_note' => '添加注释',
    'breadcrumb_edit_note' => '编辑注释',
    'breadcrumb_api' => 'API',
    'breadcrumb_dav' => 'DAV 资源',
    'breadcrumb_edit_introductions' => '你是怎么知道的',
    'breadcrumb_settings_personalization' => '个性化',
    'breadcrumb_settings_security' => '安全',
    'breadcrumb_settings_security_2fa' => '二次验证',
    'breadcrumb_profile' => ':name的资料',

    'gender_male' => '男',
    'gender_female' => '女',
    'gender_none' => '保密',
    'gender_no_gender' => '无性别',

    'error_title' => '糟糕! 出错了。',
    'error_unauthorized' => '你没有权限编辑此页',
    'error_user_account' => '此用户不属于此账号',
    'error_save' => '当储存数据时出现了一个错误',
    'error_try_again' => '出了点问题，请再试一次。',
    'error_id' => '错误代码：:id',
    'error_unavailable' => '服务不可用',
    'error_maintenance' => '网站维护中，待会见。',
    'error_help' => '待会见！',
    'error_twitter' => '关注我们的<a href="https://twitter.com/:twitter">推特</a>来得知网站的最新消息！',
    'error_no_term' => '此实例尚无策略',

    'default_save_success' => '数据已被保存',

    'compliance_title' => '抱歉，打扰您一下',
    'compliance_desc' => '我们更新了<a href=":urlterm" hreflang=":hreflang">用户协议</a> 以及 <a href=":url" hreflang=":hreflang">隐私政策</a>，您需要阅读并同意才能继续使用您的账号。',
    'compliance_desc_end' => '我们会保护您的隐私安全',
    'compliance_terms' => '我已阅读并同意',

    // Relationship types
    // Yes, each relationship type has 8 strings associated with it.
    // This is because we need to indicate the name of the relationship type,
    // and also the name of the opposite side of this relationship (father/son),
    // and then, the feminine version of the string. Finally, in some sentences
    // in the UI, we need to include the name of the person we add the relationship
    // to.
    'relationship_type_group_love' => '恋爱关系',
    'relationship_type_group_family' => '家庭关系',
    'relationship_type_group_friend' => '朋友关系',
    'relationship_type_group_work' => '工作关系',
    'relationship_type_group_other' => '其他关系',

    'relationship_type_partner' => '搭档',
    'relationship_type_partner_female' => '搭档',
    'relationship_type_partner_male' => '爱人',
    'relationship_type_partner_with_name' => ':name的情侣',
    'relationship_type_partner_female_with_name' => ':name的搭档',
    'relationship_type_partner_male_with_name' => ':name的爱人',

    'relationship_type_spouse' => '配偶',
    'relationship_type_spouse_female' => '妻子',
    'relationship_type_spouse_male' => '丈夫',
    'relationship_type_spouse_with_name' => ':name的配偶',
    'relationship_type_spouse_female_with_name' => ':name的妻子',
    'relationship_type_spouse_male_with_name' => ':name的丈夫',

    'relationship_type_date' => '约会对象',
    'relationship_type_date_female' => '约会对象',
    'relationship_type_date_male' => '约会对象',
    'relationship_type_date_with_name' => ':name的约会对象',
    'relationship_type_date_female_with_name' => ':name的约会对象',
    'relationship_type_date_male_with_name' => ':name的约会对象',

    'relationship_type_lover' => '情人',
    'relationship_type_lover_female' => '情人',
    'relationship_type_lover_male' => '情人',
    'relationship_type_lover_with_name' => ':name的情人',
    'relationship_type_lover_female_with_name' => ':name的情人',
    'relationship_type_lover_male_with_name' => ':name的情人',

    'relationship_type_inlovewith' => '喜欢的人',
    'relationship_type_inlovewith_female' => '喜欢的人',
    'relationship_type_inlovewith_male' => '喜欢的人',
    'relationship_type_inlovewith_with_name' => ':name喜欢的人',
    'relationship_type_inlovewith_female_with_name' => ':name喜欢的人',
    'relationship_type_inlovewith_male_with_name' => ':name喜欢的人',

    'relationship_type_lovedby' => '追求者',
    'relationship_type_lovedby_female' => '追求者',
    'relationship_type_lovedby_male' => '追求者',
    'relationship_type_lovedby_with_name' => ':name的追求者',
    'relationship_type_lovedby_female_with_name' => ':name的追求者',
    'relationship_type_lovedby_male_with_name' => ':name暗恋的人',

    'relationship_type_ex' => '前伴侣',
    'relationship_type_ex_female' => '前女友',
    'relationship_type_ex_male' => '前男友',
    'relationship_type_ex_with_name' => ':name的前伴侣',
    'relationship_type_ex_female_with_name' => ':name的前女友',
    'relationship_type_ex_male_with_name' => ':name的前男友',

    'relationship_type_parent' => '父母',
    'relationship_type_parent_female' => '母亲',
    'relationship_type_parent_male' => '父亲',
    'relationship_type_parent_with_name' => ':name的父母',
    'relationship_type_parent_female_with_name' => ':name的母亲',
    'relationship_type_parent_male_with_name' => ':name的父亲',

    'relationship_type_child' => '子女',
    'relationship_type_child_female' => '女儿',
    'relationship_type_child_male' => '儿子',
    'relationship_type_child_with_name' => ':name的子女',
    'relationship_type_child_female_with_name' => ':name的女人',
    'relationship_type_child_male_with_name' => ':name的儿子',

    'relationship_type_stepparent' => '继父/继母',
    'relationship_type_stepparent_female' => '继母',
    'relationship_type_stepparent_male' => '继父',
    'relationship_type_stepparent_with_name' => ':name的继父母',
    'relationship_type_stepparent_female_with_name' => ':name的继母',
    'relationship_type_stepparent_male_with_name' => ':name的继父',

    'relationship_type_stepchild' => '继子女',
    'relationship_type_stepchild_female' => '继女',
    'relationship_type_stepchild_male' => '继子',
    'relationship_type_stepchild_with_name' => ':name的继子女',
    'relationship_type_stepchild_female_with_name' => ':name的继女',
    'relationship_type_stepchild_male_with_name' => ':name的继子',

    'relationship_type_sibling' => '兄弟姐妹',
    'relationship_type_sibling_female' => '姐妹',
    'relationship_type_sibling_male' => '兄弟',
    'relationship_type_sibling_with_name' => ':name的兄弟姐妹',
    'relationship_type_sibling_female_with_name' => ':name的姐妹',
    'relationship_type_sibling_male_with_name' => ':name的兄弟',

    'relationship_type_grandparent' => '祖父母',
    'relationship_type_grandparent_female' => '祖母',
    'relationship_type_grandparent_male' => '祖父',
    'relationship_type_grandparent_with_name' => ':name的祖父母',
    'relationship_type_grandparent_female_with_name' => ':name的祖母',
    'relationship_type_grandparent_male_with_name' => ':name的祖父',

    'relationship_type_grandchild' => '（外）孙子女',
    'relationship_type_grandchild_female' => '（外）孙女',
    'relationship_type_grandchild_male' => '（外）孙子',
    'relationship_type_grandchild_with_name' => ':name的（外）孙子女',
    'relationship_type_grandchild_female_with_name' => ':name的（外）孙女',
    'relationship_type_grandchild_male_with_name' => ':name的（外）孙子',

    'relationship_type_uncle' => '叔叔',
    'relationship_type_uncle_female' => '阿姨',
    'relationship_type_uncle_male' => '叔叔',
    'relationship_type_uncle_with_name' => ':name的叔叔',
    'relationship_type_uncle_female_with_name' => ':name的阿姨',
    'relationship_type_uncle_male_with_name' => ':name的叔叔',

    'relationship_type_nephew' => '外甥',
    'relationship_type_nephew_female' => '外甥女',
    'relationship_type_nephew_male' => '外甥',
    'relationship_type_nephew_with_name' => ':name的外甥',
    'relationship_type_nephew_female_with_name' => ':name的外甥女',
    'relationship_type_nephew_male_with_name' => ':name的外甥',

    'relationship_type_cousin' => '堂兄弟',
    'relationship_type_cousin_female' => '堂姐妹',
    'relationship_type_cousin_male' => '堂兄弟',
    'relationship_type_cousin_with_name' => ':name的堂兄弟',
    'relationship_type_cousin_female_with_name' => ':name的堂姐妹',
    'relationship_type_cousin_male_with_name' => ':name的堂兄弟',

    'relationship_type_godfather' => '义父母',
    'relationship_type_godfather_female' => '神母',
    'relationship_type_godfather_male' => '义父',
    'relationship_type_godfather_with_name' => ':name的义父',
    'relationship_type_godfather_female_with_name' => ':name的神母',
    'relationship_type_godfather_male_with_name' => ':name的义父',

    'relationship_type_godson' => '义子',
    'relationship_type_godson_female' => '义女',
    'relationship_type_godson_male' => '义子',
    'relationship_type_godson_with_name' => ':name的义子',
    'relationship_type_godson_female_with_name' => ':name的义女',
    'relationship_type_godson_male_with_name' => ':name的义子',

    'relationship_type_friend' => '朋友',
    'relationship_type_friend_female' => '朋友',
    'relationship_type_friend_male' => '朋友',
    'relationship_type_friend_with_name' => ':name的朋友',
    'relationship_type_friend_female_with_name' => ':name的朋友',
    'relationship_type_friend_male_with_name' => ':name的朋友',

    'relationship_type_bestfriend' => '基友',
    'relationship_type_bestfriend_female' => '闺密',
    'relationship_type_bestfriend_male' => '好友',
    'relationship_type_bestfriend_with_name' => ':name的基友',
    'relationship_type_bestfriend_female_with_name' => ':name的闺密',
    'relationship_type_bestfriend_male_with_name' => ':name的好友',

    'relationship_type_colleague' => '同事',
    'relationship_type_colleague_female' => '同事',
    'relationship_type_colleague_male' => '同事',
    'relationship_type_colleague_with_name' => ':name的同事',
    'relationship_type_colleague_female_with_name' => ':name的同事',
    'relationship_type_colleague_male_with_name' => ':name的同事',

    'relationship_type_boss' => '上司',
    'relationship_type_boss_female' => '上司',
    'relationship_type_boss_male' => '上司',
    'relationship_type_boss_with_name' => ':name的上司',
    'relationship_type_boss_female_with_name' => ':name的上司',
    'relationship_type_boss_male_with_name' => ':name的上司',

    'relationship_type_subordinate' => '下属',
    'relationship_type_subordinate_female' => '下属',
    'relationship_type_subordinate_male' => '下属',
    'relationship_type_subordinate_with_name' => ':name的下属',
    'relationship_type_subordinate_female_with_name' => ':name的下属',
    'relationship_type_subordinate_male_with_name' => ':name的下属',

    'relationship_type_mentor' => '老师',
    'relationship_type_mentor_female' => '老师',
    'relationship_type_mentor_male' => '老师',
    'relationship_type_mentor_with_name' => ':name的老师',
    'relationship_type_mentor_female_with_name' => ':name的老师',
    'relationship_type_mentor_male_with_name' => ':name的老师',

    'relationship_type_protege' => '门徒',
    'relationship_type_protege_female' => 'protégé',
    'relationship_type_protege_male' => 'protégé',
    'relationship_type_protege_with_name' => ':name’s protégé',
    'relationship_type_protege_female_with_name' => ':name’s protégé',
    'relationship_type_protege_male_with_name' => ':name’s protégé',

    'relationship_type_ex_husband' => '前夫',
    'relationship_type_ex_husband_female' => '前妻',
    'relationship_type_ex_husband_male' => '前夫',
    'relationship_type_ex_husband_with_name' => ':name的前配偶',
    'relationship_type_ex_husband_female_with_name' => ':name的前妻',
    'relationship_type_ex_husband_male_with_name' => ':name的前夫',

    // emotions
    'emotion_primary_love' => '喜爱',
    'emotion_primary_joy' => '开心',
    'emotion_primary_surprise' => '惊讶',
    'emotion_primary_anger' => '生气',
    'emotion_primary_sadness' => '悲伤',
    'emotion_primary_fear' => '恐惧',

    'emotion_secondary_affection' => '感情',
    'emotion_secondary_lust' => '欲望',
    'emotion_secondary_longing' => '渴望',
    'emotion_secondary_cheerfulness' => '兴高采烈',
    'emotion_secondary_zest' => '热情',
    'emotion_secondary_contentment' => '满足',
    'emotion_secondary_pride' => '骄傲',
    'emotion_secondary_optimism' => '乐观',
    'emotion_secondary_enthrallment' => '沉迷',
    'emotion_secondary_relief' => '如释重负',
    'emotion_secondary_surprise' => '惊讶',
    'emotion_secondary_irritation' => '刺激',
    'emotion_secondary_exasperation' => '恼怒',
    'emotion_secondary_rage' => '狂怒',
    'emotion_secondary_disgust' => '厌恶',
    'emotion_secondary_envy' => '嫉妒',
    'emotion_secondary_suffering' => '痛苦',
    'emotion_secondary_sadness' => '悲伤',
    'emotion_secondary_disappointment' => '失望',
    'emotion_secondary_shame' => '耻辱',
    'emotion_secondary_neglect' => '忽视',
    'emotion_secondary_sympathy' => '同情',
    'emotion_secondary_horror' => '恐怖',
    'emotion_secondary_nervousness' => '紧张',

    'emotion_adoration' => '崇拜',
    'emotion_affection' => '感情',
    'emotion_love' => '喜爱',
    'emotion_fondness' => '宠爱',
    'emotion_liking' => '喜欢',
    'emotion_attraction' => '吸引',
    'emotion_caring' => '关心',
    'emotion_tenderness' => '柔情',
    'emotion_compassion' => '同情',
    'emotion_sentimentality' => '多愁善感',
    'emotion_arousal' => '激励',
    'emotion_desire' => '期望',
    'emotion_lust' => '欲望',
    'emotion_passion' => '热情',
    'emotion_infatuation' => '迷恋',
    'emotion_longing' => '渴望',
    'emotion_amusement' => '娱乐',
    'emotion_bliss' => '欣喜若狂',
    'emotion_cheerfulness' => '兴高采烈',
    'emotion_gaiety' => '欢乐',
    'emotion_glee' => '高兴',
    'emotion_jolliness' => '乔利',
    'emotion_joviality' => '快乐',
    'emotion_joy' => '开心',
    'emotion_delight' => '喜悦',
    'emotion_enjoyment' => '享受',
    'emotion_gladness' => '喜悦',
    'emotion_happiness' => '快乐',
    'emotion_jubilation' => '喜庆',
    'emotion_elation' => '兴高采烈',
    'emotion_satisfaction' => '称心如意',
    'emotion_ecstasy' => '狂喜',
    'emotion_euphoria' => '过度兴奋',
    'emotion_enthusiasm' => '热情高涨',
    'emotion_zeal' => '狂热',
    'emotion_zest' => '热情',
    'emotion_excitement' => '兴奋',
    'emotion_thrill' => '快感',
    'emotion_exhilaration' => '不亦乐乎',
    'emotion_contentment' => '满足',
    'emotion_pleasure' => '快乐',
    'emotion_pride' => '骄傲',
    'emotion_eagerness' => '渴望',
    'emotion_hope' => '希望',
    'emotion_optimism' => '乐观',
    'emotion_enthrallment' => '沉迷',
    'emotion_rapture' => '狂喜',
    'emotion_relief' => '如释重负',
    'emotion_amazement' => '惊奇',
    'emotion_surprise' => '惊讶',
    'emotion_astonishment' => '惊讶',
    'emotion_aggravation' => '恶化',
    'emotion_irritation' => '刺激',
    'emotion_agitation' => '鼓动',
    'emotion_annoyance' => '烦恼',
    'emotion_grouchiness' => '发牢骚',
    'emotion_grumpiness' => '脾气暴躁',
    'emotion_exasperation' => '恼怒',
    'emotion_frustration' => '受挫',
    'emotion_anger' => '生气',
    'emotion_rage' => '狂怒',
    'emotion_outrage' => '愤怒',
    'emotion_fury' => '愤怒',
    'emotion_wrath' => '暴怒',
    'emotion_hostility' => '敌意',
    'emotion_ferocity' => '凶猛',
    'emotion_bitterness' => '辛酸',
    'emotion_hate' => '讨厌',
    'emotion_loathing' => '嫌恶',
    'emotion_scorn' => '蔑视',
    'emotion_spite' => '怨恨',
    'emotion_vengefulness' => '报复',
    'emotion_dislike' => '不喜欢',
    'emotion_resentment' => '怨恨',
    'emotion_disgust' => '厌恶',
    'emotion_revulsion' => '反感',
    'emotion_contempt' => '轻蔑',
    'emotion_envy' => '嫉妒',
    'emotion_jealousy' => '嫉妒',
    'emotion_agony' => '痛苦',
    'emotion_suffering' => '痛苦',
    'emotion_hurt' => '伤心',
    'emotion_anguish' => '生不如死',
    'emotion_depression' => '忧郁',
    'emotion_despair' => '绝望',
    'emotion_hopelessness' => '无可救药',
    'emotion_gloom' => '沮丧',
    'emotion_glumness' => '阴沉',
    'emotion_sadness' => '悲伤',
    'emotion_unhappiness' => '不幸',
    'emotion_grief' => '悲痛',
    'emotion_sorrow' => '悲患',
    'emotion_woe' => '荣辱与共',
    'emotion_misery' => '痛苦',
    'emotion_melancholy' => '悲伤',
    'emotion_dismay' => '沮丧',
    'emotion_disappointment' => '失望',
    'emotion_displeasure' => '不满',
    'emotion_guilt' => '内疚',
    'emotion_shame' => '耻辱',
    'emotion_regret' => '后悔',
    'emotion_remorse' => '悔恨',
    'emotion_alienation' => '异化',
    'emotion_isolation' => '分离',
    'emotion_neglect' => '忽视',
    'emotion_loneliness' => '孤独',
    'emotion_rejection' => '拒绝',
    'emotion_homesickness' => '乡愁',
    'emotion_defeat' => '失败',
    'emotion_dejection' => '沮丧',
    'emotion_insecurity' => '紧张',
    'emotion_embarrassment' => '尴尬',
    'emotion_humiliation' => '屈辱',
    'emotion_insult' => '侮辱',
    'emotion_pity' => '可惜',
    'emotion_sympathy' => '同情',
    'emotion_alarm' => '警觉',
    'emotion_shock' => '震撼',
    'emotion_fear' => '恐惧',
    'emotion_fright' => '惊吓',
    'emotion_horror' => '恐怖',
    'emotion_terror' => '恐怖',
    'emotion_panic' => '恐慌',
    'emotion_hysteria' => '歇斯底里',
    'emotion_mortification' => '屈辱',
    'emotion_anxiety' => '焦虑',
    'emotion_nervousness' => '紧张',
    'emotion_tenseness' => '神经紧绷',
    'emotion_uneasiness' => '不安',
    'emotion_apprehension' => '忧虑',
    'emotion_worry' => '担心',
    'emotion_distress' => '苦恼',
    'emotion_dread' => '惊恐',

    // weather
    'weather_sunny' => '晴天',
    'weather_clear' => '万里无云',
    'weather_clear-day' => '晴朗',
    'weather_clear-night' => '晴朗的夜晚',
    'weather_light-drizzle' => '小雨',
    'weather_patchy-light-drizzle' => '局部小雨',
    'weather_patchy-light-rain' => '局部下雨',
    'weather_light-rain' => '小雨',
    'weather_moderate-rain-at-times' => '有时中雨',
    'weather_moderate-rain' => '中雨',
    'weather_patchy-rain-possible' => '可能有局部降雨',
    'weather_heavy-rain-at-times' => '有时大雨',
    'weather_heavy-rain' => '大雨',
    'weather_light-freezing-rain' => '小冻雨',
    'weather_moderate-or-heavy-freezing-rain' => '中度或重度冻雨',
    'weather_light-sleet' => '小雨夹雪',
    'weather_moderate-or-heavy-rain-shower' => '中到大雨，阵雨',
    'weather_light-rain-shower' => '小雨，阵雨',
    'weather_torrential-rain-shower' => '暴雨，阵雨',
    'weather_rain' => '雨',
    'weather_snow' => '雪',
    'weather_blowing-snow' => '高吹雪',
    'weather_patchy-light-snow' => '局部小雪',
    'weather_light-snow' => '小雪',
    'weather_patchy-moderate-snow' => '局部中雪',
    'weather_moderate-snow' => '中雪',
    'weather_patchy-heavy-snow' => '局部大雪',
    'weather_heavy-snow' => '大雪',
    'weather_light-snow-showers' => '小阵雪',
    'weather_moderate-or-heavy-snow-showers' => '中到大阵雪',
    'weather_patchy-snow-possible' => '可能有局部降雪',
    'weather_patchy-sleet-possible' => '可能有局部雨夹雪',
    'weather_moderate-or-heavy-sleet' => '中到大雨夹雪',
    'weather_light-sleet-showers' => '小阵雨夹雪',
    'weather_moderate-or-heavy-sleet-showers' => '中到大阵雨夹雪',
    'weather_sleet' => '雨夹雪',
    'weather_wind' => '风',
    'weather_fog' => '雾',
    'weather_freezing-fog' => '冻雾',
    'weather_mist' => '雾',
    'weather_blizzard' => '暴风雪',
    'weather_overcast' => '阴天',
    'weather_cloudy' => '多云',
    'weather_partly-cloudy-day' => '局部多云',
    'weather_partly-cloudy-night' => '局部多云',
    'weather_freezing-drizzle' => '冻毛毛雨',
    'weather_heavy-freezing-drizzle' => '冷冻大雨',
    'weather_patchy-freezing-drizzle-possible' => '可能有局部冻毛毛雨',
    'weather_ice-pellets' => '冰雹',
    'weather_light-showers-of-ice-pellets' => '阵雨加冰雹',
    'weather_moderate-or-heavy-showers-of-ice-pellets' => '中等或重度的冰雹阵雨',
    'weather_thundery-outbreaks-possible' => '雷雨可能',
    'weather_patchy-light-rain-with-thunder' => 'Patchy light rain with thunder',
    'weather_moderate-or-heavy-rain-with-thunder' => 'Moderate or heavy rain with thunder',
    'weather_patchy-light-snow-with-thunder' => 'Patchy light snow with thunder',
    'weather_moderate-or-heavy-snow-with-thunder' => 'Moderate or heavy snow with thunder',
    'weather_current_temperature_celsius' => ':temperature °C',
    'weather_current_temperature_fahrenheit' => ':temperature °F',
    'weather_current_title' => '当前天气',

    // dav
    'dav_contacts' => '名片',
    'dav_contacts_description' => ':name的名片',
    'dav_birthdays' => '生日',
    'dav_birthdays_description' => ':name的名片生日',
    'dav_tasks' => '任务',
    'dav_tasks_description' => ':name的任务',

    // contact list
    'contact_list_avatar' => '头像',
    'contact_list_name' => '联系人',
    'contact_list_description' => '描述',

];