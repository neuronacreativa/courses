package org.nc.solid.application.service.sendnotification;

import org.nc.solid.application.usecase.notification.interfaces.SenderPush;
import org.nc.solid.domain.entities.Notification;

public class PushSender implements SenderPush {
    @Override
    public void send(Notification notification) {
        /*
         * Sending push notification
         */
    }
}
