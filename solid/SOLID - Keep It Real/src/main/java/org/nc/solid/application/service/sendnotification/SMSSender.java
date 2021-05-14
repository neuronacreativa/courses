package org.nc.solid.application.service.sendnotification;

import org.nc.solid.application.usecase.notification.interfaces.SenderSMS;
import org.nc.solid.domain.entities.Notification;

public class SMSSender implements SenderSMS {
    @Override
    public void send(Notification notification) {
        /*
         * Sending SMS notification
         */
    }
}
