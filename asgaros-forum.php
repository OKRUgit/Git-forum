<?php

/*
  Название плагина: форум Asgaros
  Плагин URI: https://www.asgaros.de
  Описание: Форум Asgaros - лучшее решение для форума для WordPress!Он поставляется с десятками функций в красивом дизайне и остается небольшим, простым и быстрым.
  Версия: 2.2.1
  Автор: Томас Белзер
  Автор URI: https://www.asgaros.de
  Лицензия: GPL2
  Лицензия URI: https://www.gnu.org/licenses/gpl-2.0.html
  Текстовый домен: Asgaros-forum
  Домен ПАТ: /Языки
Форум Asgaros - это бесплатное программное обеспечение: вы можете перераспределить его и/или изменить
  в соответствии с условиями общей публичной лицензии GNU, опубликованной
  Фонд бесплатного программного обеспечения, либо версия 2 лицензии, либо
  любая более поздняя версия.

  Форум Asgaros распространяется в надежде, что это будет полезно,
  но без каких -либо гарантий;даже без подразумеваемой гарантии
  Торговая способность или пригодность для определенной цели.Увидеть
  GNU Генеральная публичная лицензия для получения более подробной информации.

  Вы должны были получить копию общей публичной лицензии GNU
  вместе с форумом Асгареса.Если нет, см. Https://www.gnu.org/licenses/gpl-2.0.html.
*/

if (!defined('ABSPATH')) exit;

// Include Asgaros Forum core files.
require 'includes/forum.php';
require 'includes/forum-database.php';
require 'includes/forum-compatibility.php';
require 'includes/forum-rewrite.php';
require 'includes/forum-permissions.php';
require 'includes/forum-content.php';
require 'includes/forum-notifications.php';
require 'includes/forum-appearance.php';
require 'includes/forum-unread.php';
require 'includes/forum-uploads.php';
require 'includes/forum-search.php';
require 'includes/forum-statistics.php';
require 'includes/forum-breadcrumbs.php';
require 'includes/forum-editor.php';
require 'includes/forum-shortcodes.php';
require 'includes/forum-pagination.php';
require 'includes/forum-online.php';
require 'includes/forum-usergroups.php';
require 'includes/forum-profile.php';
require 'includes/forum-memberslist.php';
require 'includes/forum-reports.php';
require 'includes/forum-reactions.php';
require 'includes/forum-mentioning.php';
require 'includes/forum-activity.php';
require 'includes/forum-feed.php';
require 'includes/forum-approval.php';
require 'includes/forum-spoilers.php';
require 'includes/forum-polls.php';
require 'includes/forum-private.php';
require 'includes/forum-user-query.php';

// Include widget files.
require 'includes/forum-widgets.php';
require 'widgets/widget-recent-posts.php';
require 'widgets/widget-recent-topics.php';
require 'widgets/widget-search.php';

// Include integration files.
require 'integrations/integration-mycred.php';

// Include admin files.
require 'admin/admin.php';
require 'admin/tables/admin-structure-table.php';
require 'admin/tables/admin-usergroups-table.php';

$asgarosforum = new AsgarosForum();

if (is_admin()) {
    $asgarosforum_admin = new AsgarosForumAdmin($asgarosforum);
}
