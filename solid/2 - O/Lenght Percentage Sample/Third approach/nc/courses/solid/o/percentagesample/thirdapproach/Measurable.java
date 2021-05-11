package nc.courses.solid.o.percentagesample.thirdapproach;

abstract class Measurable {
    abstract Double getTotalLength();
    abstract Double getSentLength();

    public Double getSentLengthPercentage() {
        return getSentLength() * 100 / getTotalLength();
    }
}
