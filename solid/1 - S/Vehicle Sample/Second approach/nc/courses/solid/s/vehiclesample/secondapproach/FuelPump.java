package nc.courses.solid.s.vehiclesample.secondapproach;

import nc.courses.solid.s.vehiclesample.firstapproach.Vehicle;

public class FuelPump {

    public void reFuel(final Vehicle vehicle){
        final int remainingFuel = vehicle.getRemainingFuel();
        final int additionalFuel = vehicle.getMaxFuel() - remainingFuel;
        vehicle.setRemainingFuel(remainingFuel + additionalFuel);
    }
}