package nc.courses.solid.o.percentagesample.firstapproach;

public class Progress {

    private Song song;
    private File file;

    public Double getLengthPercentage(String type) throws Exception {
        switch (type) {
            case "song":
                return song.getSentLengthPercentage();
            case "file":
                return file.getSentLengthPercentage();
        }
        throw new Exception("Type not valid");
    }
}
