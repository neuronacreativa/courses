package org.nc.solid.application.usecase.notification.send.senders;

import org.nc.solid.application.usecase.notification.send.interfaces.SenderSMS;
import org.nc.solid.domain.entities.Notification;

public class SMSSender implements SenderSMS {
    @Override
    public void send(Notification notification) {
        /*
         * Sending SMS notification
         */
        System.out.println("Sending SMS Notification: " + notification.getBody());
    }
}
