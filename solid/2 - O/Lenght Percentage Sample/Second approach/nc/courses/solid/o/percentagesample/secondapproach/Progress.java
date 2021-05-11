package nc.courses.solid.o.percentagesample.secondapproach;

public class Progress {

    public Double getLengthPercentage(Measurable measurable) {
        return measurable.getSentLength() * 100 / measurable.getTotalLength();
    }
}
