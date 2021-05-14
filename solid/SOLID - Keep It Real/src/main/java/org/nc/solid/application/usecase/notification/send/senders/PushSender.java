package org.nc.solid.application.usecase.notification.send.senders;

import org.nc.solid.application.usecase.notification.send.interfaces.SenderPush;
import org.nc.solid.domain.entities.Notification;

public class PushSender implements SenderPush {
    @Override
    public void send(Notification notification) {
        /*
         * Sending push notification
         */
        System.out.println("Sending Push Notification: " + notification.getBody());
    }
}
