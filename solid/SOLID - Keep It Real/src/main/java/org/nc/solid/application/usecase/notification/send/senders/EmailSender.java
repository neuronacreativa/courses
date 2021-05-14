package org.nc.solid.application.usecase.notification.send.senders;

import org.nc.solid.application.usecase.notification.send.interfaces.SenderEmail;
import org.nc.solid.domain.entities.Notification;

public class EmailSender implements SenderEmail {
    @Override
    public void send(Notification notification) {
        /*
         * Sending email notification
         */
        System.out.println("Sending Email Notification: " + notification.getBody());
    }
}
