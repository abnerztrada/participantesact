<?php
namespace tool_participantes\task;

use tool_participantes\models\correo;
use tool_participantes\models\report;
class participantes extends \core\task\scheduled_task
{
    /**
     * return name of task for admin panel.
     *
     * @return string name
     */
    public function get_name()
    {
        return get_string('cronenroll', 'tool_participantes');
    }

    /**
     * method to execute by cron task.
     */
    public function execute()
    {
      // mtrace("Hola mundo");
      global $CFG;
      $correo_envio = new correo();
      $correo_envio->correo_envio();
    }
}
